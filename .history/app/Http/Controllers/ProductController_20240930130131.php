<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

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
      // dd($request->all());
        $request->validate([
            'Ссылка' => 'required|string|unique:products,link',
            'ПометкаУдаления' => 'required|boolean',
            'ЭтоГруппа' => 'required|boolean',
            'Родитель' => 'nullable|string',
            'Наименование' => 'required|string',
            'Код' => 'required|string',
            'Артикул' => 'nullable|string',
            'ВидНоменклатуры' => 'nullable|string',
            'ЕдиницаИзмерения' => 'nullable|string',
            'Комментарий' => 'nullable|string',
            'Масса' => 'required|numeric',
            'НаименованиеПолное' => 'nullable|string',
            'Объем' => 'required|numeric',
            'ЕдиницаИзмеренияСрокаХранения' => 'nullable|string',
            'СрокХранения' => 'required|integer',
            'НаборУпаковок' => 'nullable|string',
            'ЯвляетсяКомплектом' => 'required|boolean',
        ]);
       $product = Product::create([
            'link' => $request->Ссылка,
            'deleted' => $request->ПометкаУдаления,
            'is_group' => $request->ЭтоГруппа,
            'parent' => $request->Родитель,
            'name' => $request->Наименование,
            'code' => $request->Код,
            'article' => $request->Артикул,
            'type' => $request->ВидНоменклатуры,
            'measurement_unit' => $request->ЕдиницаИзмерения,
            'comment' => $request->Комментарий,
            'weight' => $request->Масса,
            'full_name' => $request->НаименованиеПолное,
            'volume' => $request->Объем,
            'storage_unit' => $request->ЕдиницаИзмеренияСрокаХранения,
            'storage_time' => $request->СрокХранения,
            'packaging_set' => $request->НаборУпаковок,
            'is_set' => $request->ЯвляетсяКомплектом,
        ]);

        return response()->json($product, 201);
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
