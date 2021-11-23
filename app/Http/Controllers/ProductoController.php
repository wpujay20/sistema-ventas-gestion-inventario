<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedor;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Storage;
//image controoller


class ProductoController extends Controller
{

    public function index()
    {
        $productos = Producto::paginate(5);
          $productos = Producto::get();

        return view('admin.productos.index',compact('productos'))->render();
    }


    public function create()
    {
        $categorias = Categoria::get();
        $proveedores = Proveedor::get();

        return view('admin.productos.crear',compact('categorias','proveedores'))->render();
    }

    public function store(Request $request)
    {
        //falta validar campos
        //id	nombre	descripcion	precio	stock	image	estado	categoria_id	proveedor_id
        $request->validate([
            'nombre'=>'required|max:50px',
            'descripcion'=>'required|max:255px',
            'precio'=>'required',
            'stock'=>'required',
            'image' => 'required|image|mimes:jpeg,png,svg|max:1024',

        ]);
        $producto = $request->all();
   
        if($imagen = $request->file('image')) {
            $rutaGuardarImg = 'images/productos/';
            $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $producto['image'] = "$imagenProducto";             
        }
        
               /*Enviamos los datos a la BBDD */
               Producto::create([
                    'nombre' => $request->nombre,
                    'descripcion' => $request->descripcion,
                    'precio' => $request->precio,
                    'stock' => $request->stock,
                    'image' => $producto['image'],
                    'categoria_id' => $request->categoria,
                    'proveedor_id' => $request->proveedor,
                ]);

        return redirect()->route('admin.productos.index');
    }


    public function show(Producto $producto)
    {
          return view('admin.productos.show', compact('producto'));
    }


    public function edit(Producto $producto)
    {
        $categorias = Categoria::get();
        $proveedores = Proveedor::get();

        return view('admin.productos.editar',compact('producto','categorias','proveedores'))->render();
    }


    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'precio'=>'required',
            'stock'=>'required',

        ]);
        $prod = $request->all();

         if($imagen = $request->file('image')){
            $rutaGuardarImg = 'images/productos/';
            $imagenProducto = date('YmdHis') . "." . $imagen->getClientOriginalExtension(); 
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $prod['image'] = "$imagenProducto";
             
        }else{
            $foto = Producto::find($producto);
            $prod['image'] = $foto[0]['image'];
            //unset($prod['image']);
         }
        
         $producto->update([
            'nombre' => $request['nombre'],
            'descripcion' => $request['descripcion'],
            'precio' => $request['precio'],
            'stock' => $request['stock'],
            'image' => $prod['image'],
            'estado' => $request['estado'],
            'categoria_id' => $request['categoria'],
            'proveedor_id' => $request['proveedores'],

         ]);

        return  redirect()->route('admin.productos.index');
    }

    public function destroy(Producto $producto)
    {
         $producto->delete();
        return redirect()->route('admin.productos.index');
    }
}
