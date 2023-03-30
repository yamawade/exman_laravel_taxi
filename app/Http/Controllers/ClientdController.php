<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Region;
use App\Models\Trajet;

class ClientdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regions = Region::all();
        return (view('dashboard',compact('regions')));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function getByRegion($regionId)
    {
        $trajets = Trajet::where('region_id', $regionId)->get();
    
        return response()->json($trajets);
    }
    public function getTarif($trajetId)
    {
        $trajet = Trajet::findOrFail($trajetId);
        $tarif = $trajet->tarif;
        return response()->json(['tarif' => $tarif]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reservation = Reservation::create($request->all());
        return redirect('dashboard')->with('flash_message','candidat créé');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
