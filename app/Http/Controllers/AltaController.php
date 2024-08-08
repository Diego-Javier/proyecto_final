<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;


class AltaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $var_usuarios = Usuarios::get();
        return view('AdmiUsuarios', compact('var_usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         request()->validate(
            [
                'name'=>'required|alpha',
                'email'=>'required|email',
                'password'=>'required',
                'password_confirmar'=>'required',
            ]);

         Usuarios::create([
            'nombre'=>request('name'),
            'email'=>request('email'),
            'contraseña'=>request('password')


        ]);
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('UsuariosShow', ['i'=>Usuarios::findorFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $id=Usuarios::findorFail($id);
        return view('UsuariosEdit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $id=Usuarios::findorFail($id);
        $id->nombre=$request->name;
        $id->email=$request->email;
        $id->contraseña=$request->password;
        $id->save();
        return redirect()->route('usuarios.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $id=Usuarios::findorFail($id);
        $id->delete();
        return redirect()->route('usuarios.index');
    }
}
