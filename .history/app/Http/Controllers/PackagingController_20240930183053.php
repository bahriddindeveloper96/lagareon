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
            'owner_id' => $request->input('Владелец'),
        'parent_id' => $request->input('Родитель'),
        'name' => $request->input('Наименование'),
        'name_en' => $request->input('НаименованиеEn'),
        'height' => $request->input('Высота'),
        'depth' => $request->input('Глубина'),
        'unit_of_measure_id' => $request->input('ЕдиницаИзмерения'),
        'weight' => $request->input('Масса'),
        'net_weight' => $request->input('МассаНетто'),
        'volume' => $request->input('Объем'),
        'width' => $request->input('Ширина'),
        'coefficient' => $request->input('Коэффициент'),
        'owner_set' => $request->input('ВладелецНаборУпаковок') === 'true', // boolean
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
