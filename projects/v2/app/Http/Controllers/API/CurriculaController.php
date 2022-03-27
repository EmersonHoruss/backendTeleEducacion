<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Curricula;
use Illuminate\Http\Request;

class CurriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curriculas = Curricula::all();
        return response()->json(['error' => false, 'msg' => 'Petición exitosa.', 'data' => $curriculas]);
    }

    /**
     * Display a listing of the resource by program's code
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPorCodigoPrograma($codigoPrograma)
    {
        $curriculas = Curricula::where('CodigoPrograma', $codigoPrograma)->get();
        return response()->json(['error' => false, 'msg' => 'Petición exitosa.', 'data' => $curriculas]);
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
