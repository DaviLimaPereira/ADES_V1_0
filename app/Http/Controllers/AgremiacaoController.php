<?php

namespace App\Http\Controllers;

use App\Models\Agremiacao;
use Illuminate\Http\Request;

class AgremiacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listagem = Agremiacao::all();
        return view('agremiacao.list')->with('NomeVarView',$listagem);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('agremiacao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Agremiacao::create($request->all());
        return redirect ('/agremiacao');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Agremiacao $agremiacao)
    {
        return view('agremiacao.show')->with('dep',$agremiacao);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return View('agremiacao.edit')->with('dep',$departamento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agremiacao $agremiacao)
    {
        $agremiacao->update($request->all());
        return redirect ('/agremiacao');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agremiacao $agremiacao)
    {
        $agremiacao->delete();
        return redirect('/agremiacao');
    }
}
