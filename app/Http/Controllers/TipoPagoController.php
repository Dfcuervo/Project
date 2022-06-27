<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipo_pago;

class TipoPagoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-tipopago|crear-tipopago|editar-tipopago|borrar-tipopago')->only('index');
        $this->middleware('permission:crear-tipopago', ['only'=>['create','store']]);
        $this->middleware('permission:editar-tipopago', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-tipopago', ['only'=>['destroy']]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipopagos = Tipo_pago::paginate(5);
        return view('tipo_pagos.index', compact('tipopagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_pagos.crear');
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
            'tipo_de_pago' => 'required'
        ]);

        Tipo_pago::create($request->all());
        return redirect()->route('tipo_pagos.index');
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
    public function edit(Tipo_pago $tipopago)
    {
        return view('tipo_pagos.editar', compact('tipopago'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo_pago $tipopago)
    {
        request()->validate([
            'tipo_de_pago' => 'required'
        ]);

        $tipopago->update($request->all());
        return redirect()->route('tipo_pagos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo_pago $tipopago)
    {
        $tipopago->delete();
        return redirect()->route('tipo_pagos.index');
    }
}
