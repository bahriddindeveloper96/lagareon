<?php

namespace App\Http\Controllers;

use App\Models\Packaging;
use App\Http\Requests\StorePackagingRequest;
use App\Http\Requests\UpdatePackagingRequest;

class PackagingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'link' => 'required|string|unique:packagings,link',
            'deleted' => 'required|boolean',
            'owner' => 'required|string',
            'parent' => 'nullable|string',
            'name' => 'required|string',
            'name_en' => 'nullable|string',
            'height' => 'required|numeric',
            'depth' => 'required|numeric',
            'measurement_unit' => 'required|string',
            'weight' => 'required|numeric',
            'net_weight' => 'required|numeric',
            'full_name' => 'nullable|string',
            'volume' => 'required|numeric',
            'width' => 'required|numeric',
            'coefficient' => 'required|integer',
            'is_packaging_set' => 'required|boolean',
            'accounting_type' => 'required|string',
        ]);

        $packaging = Packaging::create($request->all());

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
