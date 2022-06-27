<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contrato;
use Illuminate\Support\Facades\DB;

class ContratoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-contrato|crear-contrato|editar-contrato|borrar-contrato')->only('index');
        $this->middleware('permission:crear-contrato', ['only'=>['create','store']]);
        $this->middleware('permission:editar-contrato', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-contrato', ['only'=>['destroy']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $contratos = Contrato::paginate(5);
        // return view('contratos.index', compact('contratos'));
        $contratos=DB::table('contratos')
        ->select('contratos.*','users.name','tipo_pagos.tipo_de_pago')
        ->join('users','users.id','=','contratos.user_id',)
        ->join ('tipo_pagos','tipo_pagos.id','=','contratos.tipopago_id')
        ->get()->paginate(5);
        return view('contratos.index', compact('contratos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contratos.crear');
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
            'fecha' => 'required',
            'direccion' => 'required',
            'user_id' => 'required',
            'tipopago_id' => 'required'
        ]);

        Contrato::create($request->all());
        return redirect()->route('contratos.index');
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
    public function edit(contrato $contrato)
    {
        return view('contratos.editar', compact('contrato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contrato $contrato)
    {
        request()->validate([
            'fecha' => 'required',
            'direccion' => 'required'
        ]);

        $contrato->update($request->all());
        return redirect()->route('contratos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contrato $contrato)
    {
        $contrato->delete();
        return redirect()->route('contratos.index');
    }
}
