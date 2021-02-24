<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tutores');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nombre_emp' => 'required',
            'tipo_doc' => 'required',
            'cif' => 'required',
            'nombre_tutor' => 'required',
            'apellido1' => 'required',
            'apellido2' => 'required',
            'pais' => 'required',
            'estado' => "required|in:activo,inactivo",
            'telefono' => 'required',
            'email' => 'required|email',
        ]);


        DB::Transaction(function () {
           

            $id_tutor = DB::table('tutores')->insertGetId(
                [
                    'nombre_emp' => request('nombre_emp'),
                    'tipo_doc' => request('tipo_doc'),
                    'cif' => request('cif'),
                    'nombre_tutor' => request('nombre_tutor'),
                    'apellido1' => request('apellido1'),
                    'apellido2' => request('apellido2'),
                    'pais' => request('pais'),
                    'provincia' => request('provincia'),
                    'municipio' => request('municipio'),
                    'estado' => request('estado'),
                    'telefono' => request('telefono'),
                    'email' => request('email')
                ]
            );
        });
        return "El formulario se ha enviado correctamente";
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
    }
}
