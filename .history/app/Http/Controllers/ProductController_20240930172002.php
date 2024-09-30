<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Packaging;
use Illuminate\Http\Client\Request;

class ProductController extends Controller
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
    public function store(StoreProductRequest $request)
    {
        // Validation rules
        $request->validate([
            'Ссылка' => 'required|url',
            'ПометкаУдаления' => 'boolean',
            'Владелец' => 'required|string|max:255',
            'Родитель' => 'nullable|string|max:255',
            'Наименование' => 'required|string|max:255',
            'НаименованиеEn' => 'nullable|string|max:255',
            'Высота' => 'required|numeric',
            'Глубина' => 'required|numeric',
            'ЕдиницаИзмерения' => 'required|string|max:50',
            'Масса' => 'required|numeric',
            'МассаНетто' => 'nullable|numeric',
            'НаименованиеПолное' => 'nullable|string|max:255',
            'Объем' => 'nullable|numeric',
            'Ширина' => 'required|numeric',
            'Коэффициент' => 'nullable|numeric',
            'ВладелецНаборУпаковок' => 'boolean',
            'ВидУчета' => 'nullable|string|max:50',
        ]);

        try {
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
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
