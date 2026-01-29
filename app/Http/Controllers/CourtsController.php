<?php

namespace App\Http\Controllers;

use App\Models\Court;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCourtRequest;
use App\Http\Requests\UpdateCourtRequest;
use App\Services\Courts\CreateCourtService;
use App\Services\Courts\UpdateCourtService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CourtsController extends Controller
{

    public function __construct(private CreateCourtService $createCourtService , private UpdateCourtService $updateCourtService){}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Court::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCourtRequest $request)
    {
        Gate::authorize('create', Court::class);
        $court = $this->createCourtService->create([ 'ValidatedData' => $request->validated() ,'user' => Auth::user()]);
        return response()->json($court, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Court $court)
    {
        return response()->json($court, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourtRequest $request, Court $court)
    {
        Gate::authorize('update', $court);
        return $this->updateCourtService->update(['validatedData' => $request->validated() , 'court' => $court]);
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
