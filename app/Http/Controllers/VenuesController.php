<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateVenueRequest;
use App\Http\Requests\UpdateVenueRequest;
use App\Services\Venues\CreateVenueService;
use App\Services\Venues\UpdateVenueService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class VenuesController extends Controller
{
    public function __construct(private CreateVenueService $createVenue, private UpdateVenueService $updateVenue) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        // Gate::authorize('viewAny', Venue::class);
        return response()->json(Venue::with('courts')->get(), 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateVenueRequest $request)
    {
        Gate::authorize('create', Venue::class);
        $venue = $this->createVenue->store(['validatedData' => $request->validated(), 'owner_id' => Auth::id()]);
        return response()->json($venue, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Venue $venue)
    {
        return response()->json($venue->load('courts'), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVenueRequest $request, Venue $venue)
    {
        Gate::authorize('update', $venue);
        return $this->updateVenue->update(['validatedData' => $request->validated(), 'venue' => $venue]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venue $venue)
    {
        Gate::authorize('delete', $venue);
        $venue->delete();
        return response()->json(null, 204);
    }
}
