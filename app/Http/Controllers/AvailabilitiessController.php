<?php

namespace App\Http\Controllers;

use App\Models\Availability;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAvailabilityRequest;
use App\Http\Requests\UpdateAvailabilityRequest;
use App\Services\Availabilities\CreateAvailabilityService;
use App\Services\Availabilities\UpdateAvailabilityService;
use Illuminate\Support\Facades\Gate;

class AvailabilitiessController extends Controller
{
    public function __construct(private CreateAvailabilityService $createAvailabilityService, private UpdateAvailabilityService $updateAvailabilityService) {}

    public function index()
    {
        return response()->json(Availability::all(), 200);
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
        return response()->json($availability, 200);
    }

    public function update(UpdateAvailabilityRequest $request, Availability $availability)
    {
        Gate::authorize('update', $availability);
        return $this->updateAvailabilityService->update(['validatedData' => $request->validated(), 'availability' => $availability]);
    }

    public function destroy(Availability $availability)
    {
        Gate::authorize('delete', $availability);
        $availability->delete();
        return response()->json(null, 204);
    }
}
