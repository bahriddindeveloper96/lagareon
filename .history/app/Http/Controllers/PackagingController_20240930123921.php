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
        $packaging = Packaging::create([
        'link' => $request->input('Ссылка'),
        'deleted' => $request->input('ПометкаУдаления'),
        'owner' => $request->input('Владелец'),
        'parent' => $request->input('Родитель'),
        'name' => $request->input('Наименование'),
        'name_en' => $request->input('НаименованиеEn'),
        'height' => $request->input('Высота'),
        'depth' => $request->input('Глубина'),
        'measurement_unit' => $request->input('ЕдиницаИзмерения'),
        'weight' => $request->input('Масса'),
        'net_weight' => $request->input('МассаНетто'),
        'full_name' => $request->input('НаименованиеПолное'),
        'volume' => $request->input('Объем'),
        'width' => $request->input('Ширина'),
        'coefficient' => $request->input('Коэффициент'),
        'is_packaging_set' => $request->input('ВладелецНаборУпаковок'),
        'accounting_type' => $request->input('ВидУчета'),
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
