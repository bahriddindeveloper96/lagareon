<?php

namespace App\Http\Controllers;

use App\Models\Packaging;
use App\Http\Requests\StorePackagingRequest;
use App\Http\Requests\UpdatePackagingRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Log;

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
    // public function store(StorePackagingRequest $request)
    // {
    //     $request->validate([
    //         'link' => 'required|string|unique:packagings,link',
    //         'deleted' => 'required|boolean',
    //         'owner' => 'required|string',
    //         'parent' => 'nullable|string',
    //         'name' => 'required|string',
    //         'name_en' => 'nullable|string',
    //         'height' => 'required|numeric',
    //         'depth' => 'required|numeric',
    //         'measurement_unit' => 'required|string',
    //         'weight' => 'required|numeric',
    //         'net_weight' => 'required|numeric',
    //         'full_name' => 'nullable|string',
    //         'volume' => 'required|numeric',
    //         'width' => 'required|numeric',
    //         'coefficient' => 'required|integer',
    //         'is_packaging_set' => 'required|boolean',
    //         'accounting_type' => 'required|string',
    //     ]);

    //     // Ma'lumotlarni log yozing
    //     Log::info('Request data:', $request->all());
        

    //     $packaging = Packaging::create([
    //         'link' => $request->input('Ссылка'),
    //         'deleted' => $request->input('ПометкаУдаления'),
    //         'owner' => $request->input('Владелец'),
    //         'parent' => $request->input('Родитель'),
    //         'name' => $request->input('Наименование'),
    //         'name_en' => $request->input('НаименованиеEn'),
    //         'height' => $request->input('Высота'),
    //         'depth' => $request->input('Глубина'),
    //         'measurement_unit' => $request->input('ЕдиницаИзмерения'),
    //         'weight' => $request->input('Масса'),
    //         'net_weight' => $request->input('МассаНетто'),
    //         'full_name' => $request->input('НаименованиеПолное'),
    //         'volume' => $request->input('Объем'),
    //         'width' => $request->input('Ширина'),
    //         'coefficient' => $request->input('Коэффициент'),
    //         'is_packaging_set' => $request->input('ВладелецНаборУпаковок'),
    //         'accounting_type' => $request->input('ВидУчета'),
    //     ]);

    //     return response()->json($packaging, 201);
    // }
    public function store(Request $request)
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

    // Ma'lumotlarni log yozing
    \Log::info('Request data:', $request->all());

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
