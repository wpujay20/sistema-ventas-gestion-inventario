<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Cliente;


class ClienteLoginControler extends Controller
{
    
    public function index()
    {
        return view('vistas.login');
    }

  
    public function create()
    {
        return view('vistas.registro');
    }

    
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'nombre'=>'required',
            'dni'=>'required',
            'direccion'=>'required',
            'telefono'=>'numeric',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|same:confirm-password|min:6',
        ]);

        //Cliente
        $user = User::create([
            'name'=>$request->nombre,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),            
        ]);

        $user_id= User::latest('id')->first();

        $user ->assignRole('Cliente');
        
        if($request->ruc ==null){
            $rc= "NULL" ;
        }else{
            $rc=$request->ruc;
        }
        
        Cliente::create([
            'user_id'=>$user_id->id,
            'nombre'=>$request->nombre,
            'dni'=>$request->dni,
            'ruc'=>$rc,
            'direccion'=>$request->direccion,
            'telefono'=>$request->telefono,
            'email'=>$request->email,
        ]);
        return view('vistas.index');
    }
   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
