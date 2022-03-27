<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = Docente::all();
        return response()->json(['error' => false, 'msg' => 'Petición exitosa.', 'data' => $docentes]);
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
        $docente = new Docente();

        // $docente = Docente::create($request->all());
        $docente->Nombre = $request->Nombre;
        $docente->ApellidoPaterno = $request->ApellidoPaterno;
        $docente->ApellidoMaterno = $request->ApellidoMaterno;
        $docente->Celular = $request->Celular;
        $docente->Whatsapp = $request->Whatsapp;
        $docente->CorreoPersonal = $request->CorreoPersonal;
        $docente->CorreoInstitucional = $request->CorreoInstitucional;
        $docente->Nombrado = $request->Nombrado;
        $docente->Grado = $request->Grado;
        $docente->TipoDocumento = $request->TipoDocumento;
        $docente->NumeroDocumento = $request->NumeroDocumento;

        $docente->save();
        // return response()->json(['error' => false, 'msg' => 'Docente creado satisfatoriamente', 'data' => $docente]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $docente = Docente::where('Codigo', $id)->firstOrFail();
        return response()->json(['error' => false, 'msg' => 'Docente obtenido satisfatoriamente', 'data' => $docente]);

        // return new DocenteResource($docente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

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
