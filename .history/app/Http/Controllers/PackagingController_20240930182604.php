<?php

namespace App\Http\Controllers;

use App\Models\Packaging;
use App\Http\Requests\StorePackagingRequest;
use App\Http\Requests\UpdatePackagingRequest;
use Illuminate\Database\Eloquent\Collection;

class PackagingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Collection
    {
        return Packaging::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePackagingRequest $request)
    {   
        $request->validate([
           
        ]);

        $packaging = Packaging::create([
            'link' => $request->input('Ссылка'),
            'is_deleted' => $request->input('ПометкаУдаления'),
            'owner_id' => $request->owner_id,
            'name' => $request->name,
            'height' => $request->height,
            'depth' => $request->depth,
            'unit_of_measure_id' => $request->unit_of_measure_id,
            'weight' => $request->weight,
            'net_weight' => $request->net_weight,
            'volume' => $request->volume,
            'width' => $request->width,
            'coefficient' => $request->coefficient,
            'owner_set' => $request->owner_set ?? false,
        ]);

        return response()->json($packaging, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Packaging $packaging)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Packaging $packaging)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePackagingRequest $request, Packaging $packaging)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Packaging $packaging)
    {
        //
    }
}
