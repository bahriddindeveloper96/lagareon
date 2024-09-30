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
            'link' => $request->input('Ссылка'), // 'Ссылка' to 'link'
            'deleted' => $request->input('ПометкаУдаления'), // 'ПометкаУдаления' to 'deleted'
            'owner' => $request->input('Владелец'), // Ensure this is in your fillable if needed
            'parent' => $request->input('Родитель'), // 'Родитель' to 'parent'
            'name' => $request->input('Наименование'), // 'Наименование' to 'name'
            'name_en' => $request->input('НаименованиеEn'), // Optional, ensure it's defined in fillable
            'height' => $request->input('Высота'), // If you have this in your input
            'depth' => $request->input('Глубина'), // If you have this in your input
            'measurement_unit' => $request->input('ЕдиницаИзмерения'), // 'ЕдиницаИзмерения' to 'measurement_unit'
            'weight' => $request->input('Масса'), // 'Масса' to 'weight'
            'net_weight' => $request->input('МассаНетто'), // If needed, else omit
            'full_name' => $request->input('НаименованиеПолное'), // 'НаименованиеПолное' to 'full_name'
            'volume' => $request->input('Объем'), // 'Объем' to 'volume'
            'width' => $request->input('Ширина'), // If you have this in your input
            'coefficient' => $request->input('Коэффициент'), // If you have this in your input
            'is_packaging_set' => $request->input('ЯвляетсяКомплектом'), // 'ЯвляетсяКомплектом' to 'is_packaging_set'
            'accounting_type' => $request->input('ВидУчета'), // If needed
        ]);

        // Handle nested Упаковки and Штрихкоды if needed here
        // Example: Processing Упаковки
        if ($request->has('Упаковки')) {
            foreach ($request->input('Упаковки') as $pack) {
                // Process each packing if necessary
                // You may create a related model or process it as needed
            }
        }

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
