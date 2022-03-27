<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Programa::all();
        return response()->json(['error' => false, 'msg' => 'Petición exitosa.', 'data' => $cursos]);
    }

    /**
     * Display a listing of the resource per type.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexTipo($tipo)
    {
        // dd($tipo);
        $cursos = Programa::where('Tipo', $tipo)->get();
        return response()->json(['error' => false, 'msg' => 'Petición exitosa.', 'data' => $cursos]);
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
