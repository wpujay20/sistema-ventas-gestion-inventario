<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
          $clientes = Cliente::get();

        return view('admin.clientes.index',compact('clientes'));
    }


    public function create()
    {
        return view('admin.clientes.crear')->render();
    }


    public function store(Request $request)
    {
        //Cliente

      
        $user = User::create([
            'name'=>$request->nombre,
            'email'=>$request->email,
            'password'=>bcrypt('password'),            
        ]);

        $user_id= User::latest('id')->first();

        $user ->assignRole('Cliente');
        
        Cliente::create([
            'user_id'=>$user_id->id,
            'nombre'=>$request->nombre,
            'dni'=>$request->dni,
            'ruc'=>$request->ruc,
            'direccion'=>$request->direccion,
            'telefono'=>$request->telefono,
            'email'=>$request->email,
        ]);
       

        return redirect()->route('admin.clientes.index');
    }


    public function show(Cliente $cliente)
    {
          return view('admin.clientes.show', compact('cliente'));
    }


    public function edit(Cliente $cliente)
    {
       
         return view('admin.clientes.editar', compact('cliente'));
    }


    public function update(Request $request, Cliente $cliente)
    {
        // por ver la asiganación de rol

        $user = User::find($cliente['user_id']);

        $user->update([
            'name'=>$request->nombre,
            'email'=>$request->email,
            'password'=>bcrypt('password'), 
        ]);        
        
        $cliente->update($request->all());
        return redirect()->route('admin.clientes.index');
    }

    public function destroy(Cliente $cliente)
    {
         $cliente->delete();
         $user = User::find($cliente['user_id']);
         $user->delete();
        return redirect()->route('admin.clientes.index');
    }
}
