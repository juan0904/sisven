<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();
        return view('categorie.index',['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        return view('categorie.new',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorie = new Categories();
        $categorie->id = $request->code;
        $categorie->name = $request->nombre;
        $categorie->description = $request->descripcion;
        $categorie->save();

        $categories = Categories::all();
        return view('categorie.index',['categories' => $categories]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categorie = Categories::find($id);
        return view('categorie.edit',['categorie' => $categorie]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categorie = Categories::find($id);

        if ($request->id !== null) {
            $categorie->id = $request->code;
        }
        $categorie->name = $request->nombre;
        $categorie->description = $request->descripcion;
        $categorie->save();

        $categories = Categories::all();
        return view('categorie.index',['categories' => $categories]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categorie = Categories::find($id);
        $categorie->delete();
        $categories = Categories::all();
        return view('categorie.index',['categories' => $categories]);

    }
}