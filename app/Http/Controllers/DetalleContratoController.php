<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detalle_contrato;
use Illuminate\Support\Facades\DB;

class DetalleContratoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-detallecontrato|crear-detallecontrato|editar-detallecontrato|borrar-detallecontrato')->only('index');
        $this->middleware('permission:crear-detallecontrato', ['only'=>['create','store']]);
        $this->middleware('permission:editar-detallecontrato', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-detallecontrato', ['only'=>['destroy']]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $detallecontratos = Detalle_contrato::paginate(5);
        // return view('detalle_contratos.index', compact('detallecontratos'));
        $detallecontratos=DB::table('detalle_contratos')
        ->select('detalle_contratos.*','servicios.nombre_servicio')
        ->join('servicios','servicios.id','=','detalle_contratos.servicio_id')
        ->get()->paginate(5);
        return view('detalle_contratos.index', compact('detallecontratos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detalle_contratos.crear');
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
            'cotizacion' => 'required',
            'precio_final' => 'required',
            'contrato_id' => 'required',
            'servicio_id' => 'required'
        ]);

        detalle_contrato::create($request->all());
        return redirect()->route('detalle_contratos.index');
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
    public function edit(detalle_contrato $detallecontratos)
    {
        return view('detalle_contratos.editar', compact('detallecontratos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detalle_contrato $detallecontrato)
    {
        request()->validate([
            'cotizacion' => 'required',
            'precio_final' => 'required',
            'contrato_id' => 'required',
            'servicio_id' => 'required'
        ]);

        $detallecontrato->update($request->all());
        return redirect()->route('detalle_contratos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(detalle_contrato $detallecontrato)
    {
        $detallecontrato->delete();
        return redirect()->route('detalle_contratos.index');
    }
}
