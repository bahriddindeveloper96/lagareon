<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Http\Requests\StoreUnitRequest;
use App\Http\Requests\UpdateUnitRequest;

class UnitController extends Controller
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
    public function store(StoreUnitRequest $request)
    {
        // Validatsiya
        $request->validate([
            'Ссылка' => 'required|string|unique:units,link',
            'ПометкаУдаления' => 'required|boolean',
            'Наименование' => 'required|string',
            'Код' => 'required|string',
            'НаименованиеПолное' => 'nullable|string',
            'Сокращение' => 'nullable|string',
            'Мерная' => 'required|boolean',
        ]);

        // Ma'lumotlarni saqlash
        Unit::create([
            'link' => $request->input('Ссылка'),
            'deleted' => $request->input('ПометкаУдаления'),
            'name' => $request->input('Наименование'),
            'code' => $request->input('Код'),
            'full_name' => $request->input('НаименованиеПолное'),
            'abbreviation' => $request->input('Сокращение'),
            'is_measure' => $request->input('Мерная'),
        ]);

        return response()->json(['message' => 'Unit created successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUnitRequest $request, Unit $unit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        //
    }
}
