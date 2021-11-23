<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{

    public function index()
    {
        $proveedores = Proveedor::get();
        return view('admin.proveedores.index',compact('proveedores'))->render();
    }


    public function create()
    {
        return view('admin.proveedores.crear');
    }


    public function store(Request $request)
    {
        Proveedor::create($request->all());
        return redirect()->route('admin.proveedores.index');
    }


    public function show(Proveedor $proveedor)
    {
        return view('admin.proveedores.show', compact('proveedor'));
    }


    public function edit(Proveedor $proveedor)
    {
       return view('admin.proveedores.editar', compact('proveedor'));
    }


    public function update(Request $request, Proveedor $proveedor)
    {
        $proveedor->update($request->all());
        return redirect()->route('admin.proveedores.index');
    }


    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('admin.proveedores.index');
    }
}
