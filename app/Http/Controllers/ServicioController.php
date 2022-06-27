<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\servicio;
use Illuminate\Support\Facades\DB;

class ServicioController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-servicio|crear-servicio|editar-servicio|borrar-servicio')->only('index');
        $this->middleware('permission:crear-servicio', ['only'=>['create','store']]);
        $this->middleware('permission:editar-servicio', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-servicio', ['only'=>['destroy']]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $servicios = Servicio::paginate(5);
        // return view('servicios.index', compact('servicios'));
        $servicios=DB::table('servicios')
        ->select('servicios.*','categorias.nombre_categoria')
        ->join('categorias','categorias.id','=','servicios.categoria_id')
        ->get()->paginate(5);
        return view('servicios.index', compact('servicios'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.crear');
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
            'nombre_servicio' => 'required',
            'descripcion_servicio' => 'required',
            'categoria_id' => 'required'
        ]);

        Servicio::create($request->all());
        return redirect()->route('servicios.index');
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
    public function edit(servicio $servicio)
    {
        return view('servicios.editar', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
        request()->validate([
            'nombre_servicio' => 'required',
            'descripcion_servicio' => 'required',
            'categoria_id' => 'required'
        ]);

        $servicio->update($request->all());
        return redirect()->route('servicios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();
        return redirect()->route('servicios.index');
    }
}
