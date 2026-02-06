<?php

namespace App\Http\Controllers;

use App\Http\Resources\AvailabilitiesResource;
use App\Models\Availability;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAvailabilityRequest;
use App\Http\Requests\UpdateAvailabilityRequest;
use App\Services\Availabilities\CreateAvailabilityService;
use App\Services\Availabilities\UpdateAvailabilityService;
use Illuminate\Support\Facades\Gate;

class AvailabilityController extends Controller
{
    public function __construct(private CreateAvailabilityService $createAvailabilityService, private UpdateAvailabilityService $updateAvailabilityService) {}

    public function index()
    {
        $availabilities = AvailabilitiesResource::collection(Availability::all());
        return response()->json($availabilities, 200);
    }

    public function store(CreateAvailabilityRequest $request)
    {
        Gate::authorize('create', Availability::class);
        $availability = $this->createAvailabilityService->store(['validatedData' => $request->validated()]);
        return response()->json($availability, 201);
    }

    public function show(Availability $availability)
    {
        Gate::authorize('view', $availability);
        return response()->json(new AvailabilitiesResource($availability), 200);
    }

    public function update(UpdateAvailabilityRequest $request, Availability $availability)
    {
        Gate::authorize('update', $availability);
        $availabilityData =  $this->updateAvailabilityService->update(['validatedData' => $request->validated(), 'availability' => $availability]);
        return response()->json($availabilityData, 200);
    }

    public function destroy(Availability $availability)
    {
        Gate::authorize('delete', $availability);
        $availability->delete();
        return response()->json(null, 204);
    }
}
