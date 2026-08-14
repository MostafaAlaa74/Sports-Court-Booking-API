<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourtResource;
use App\Models\Court;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCourtRequest;
use App\Http\Requests\UpdateCourtRequest;
use App\Repository\Interfaces\CourtInterface;
use App\Services\Courts\CreateCourtService;
use App\Services\Courts\UpdateCourtService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

class CourtController extends Controller
{

    public function __construct(
        private CreateCourtService $createCourtService,
        private UpdateCourtService $updateCourtService,
        protected CourtInterface $courtRepository,
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //! to generate a unique cache key based on the request query parameters,
        //! we can use the md5 hash of the json encoded query parameters. This will ensure that different combinations of query parameters will result in different cache keys.
        $key = 'courts' . md5(json_encode($request->query()));
        $courts = Cache::tags(['courts'])->remember(
            $key,
            3600,
            function () use ($request) {
                return $this->courtRepository->getCourts($request);
            }
        );

        return response()->json(CourtResource::collection($courts), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCourtRequest $request)
    {
        Gate::authorize('create', Court::class);
        $court = $this->createCourtService->create(['ValidatedData' => $request->validated(), 'user' => Auth::user()]);
        return response()->json(new CourtResource($court), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Court $court)
    {
        $courtData = new CourtResource($court);
        return response()->json($courtData, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourtRequest $request, Court $court)
    {
        Gate::authorize('update', $court);
        $court = $this->updateCourtService->update(['validatedData' => $request->validated(), 'court' => $court]);
        return response()->json(new CourtResource($court), 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Court $court)
    {
        Gate::authorize('delete', $court);
        $court->delete();
        return response()->json(null, 204);
    }
}
