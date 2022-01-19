<?php

namespace App\Http\Controllers;

use App\Models\centralTelefones;
use Illuminate\Http\Request;

class CentralTelefonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return centralTelefones::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registro = new centralTelefones();
        return $registro->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\centralTelefones  $cr
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return centralTelefones::findOrFail($id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\centralTelefones  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $registro  = centralTelefones::findOrFail($id);
        $input = $request->all();
        return $registro->fill($input)->save();

        //$registro = SgeAulaTurmaAlunoObservacao::find($request->id);
        //if ($registro)
        //{
        //$registro = centralTelefones::find($id);
        //return $registro->update($request->all());
        //$dados = variaveisUpdate();

        /*
        $this->validate($request, [
            'local' => 'required',
            'numero' => 'required',
            'pessoa_referencia' => 'required',
        ]);*/
        //dd($telefone);
        //return $telefone->save($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\centralTelefones  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro = centralTelefones::findOrFail($id);
        return $registro->delete();
    }
}
