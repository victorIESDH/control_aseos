<?php

namespace App\Http\Controllers;

use App\Models\alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Obtener todos los alumnos y se los pasamos a la vista de listado
        $alumnos = alumno::paginate(2);
        return view('alumnos.listado', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Mostrar el formulario de creacion de alumnos
        return view('alumnos.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        alumno::create($request->all());
        return redirect()->route('alumnos.index');  
    }

    /**
     * Display the specified resource.
     */
    public function show(alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(alumno $alumno)
    {
        //
        return view('alumnos.editar', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, alumno $alumno)
    {
        //
        $alumno->update($request->all());
        return to_route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(alumno $alumno)
    {
        //
        $alumno->delete();
        return to_route('alumnos.index');
    }
}
