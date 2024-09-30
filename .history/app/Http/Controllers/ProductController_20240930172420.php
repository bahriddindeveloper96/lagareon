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
        

        try {
             $packaging = Packaging::create([
            'link' => $request->input('Ссылка'),
            'deleted' => $request->input('ПометкаУдаления'),
            'owner' => $request->input('Владелец'), // Make sure you define this in validation if needed
            'parent' => $request->input('Родитель'),
            'name' => $request->input('Наименование'),
            'name_en' => $request->input('НаименованиеEn'), // If this is relevant
            'height' => $request->input('Высота'), // If included in validation
            'depth' => $request->input('Глубина'), // If included in validation
            'measurement_unit' => $request->input('ЕдиницаИзмерения'),
            'weight' => $request->input('Масса'),
            'net_weight' => $request->input('МассаНетто'), // If included in validation
            'full_name' => $request->input('НаименованиеПолное'),
            'volume' => $request->input('Объем'),
            'width' => $request->input('Ширина'), // If included in validation
            'coefficient' => $request->input('Коэффициент'), // If included in validation
            'is_packaging_set' => $request->input('ЯвляетсяКомплектом'),
            'accounting_type' => $request->input('ВидУчета'), // If included in validation
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
