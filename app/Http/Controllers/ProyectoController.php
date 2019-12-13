<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use App\Http\Requests\proyectorequest;
class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listadoProyectos = Proyecto::All();
        return view('proyectos.index', ['listadoProyectos' => $listadoProyectos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyectos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(proyectorequest $request)
    {
        $project = new Proyecto;
        $project->nombre = $request->input('nombre');
        $project->titulo = $request->input('titulo');
        $project->fechainicio = $request->input('fechainicio');
        $project->fechafin = $request->input('fechafin');
        $project->horasestimadas = $request->input('horasestimadas');
        $project->empleado_id = $request->input('empleado_id');

        $project->save();
        
        return redirect(route('proyectos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyecto::find($id);
        return view('proyectos.proyecto',['proyecto'=>$proyecto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        return view('proyectos.editar', ['proyecto'=>$proyecto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(proyectorequest $request, $id)
    {
        $project = Proyecto::find($id);
        $project->nombre = $request->input('nombre');
        $project->titulo = $request->input('titulo');
        $project->fechainicio = $request->input('fechainicio');
        $project->fechafin = $request->input('fechafin');
        $project->horasestimadas = $request->input('horasestimadas');
        $project->empleado_id = $request->input('empleado_id');

        $project->save();
        
        return redirect(route('proyectos.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proyecto::destroy($id);
        
        return back();
    }
}
