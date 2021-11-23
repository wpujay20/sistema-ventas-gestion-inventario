<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index()
    {
        $categorias = Categoria::get();

        return view('admin.categorias.index',compact('categorias'))->render();
    }


    public function create()
    {
        return view('admin.categorias.crear')->render();
    }


    public function store(Request $request)
    {
        Categoria::create($request->all());
        return redirect()->route('admin.categorias.index');
    }

    public function show(Categoria $categoria)
    {
        return view('admin.categorias.show', compact('categoria'));
    }

    public function edit(Categoria $categoria)
    {
        return view('admin.categorias.editar', compact('categoria'));

    }


    public function update(Request $request, Categoria $categoria)
    {
        $categoria->update($request->all());
        return redirect()->route('admin.categorias.index');
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('admin.categorias.index');
    }
}
