<?php

namespace App\Http\Controllers;

use App\Models\Supervisor;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $supervisores = Supervisor::all();
        return view('supervisor.supervisorindex', compact('supervisores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(!Gate::allows('administrador')){
            abort(403);
        }

        return view('supervisor.supervisorform');
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
        if(!Gate::allows('administrador')){
            abort(403);
        }
        $request->validate([
            'nombre'=>['required', 'string', 'min:3', 'max:50'],
            'correo'=>['required', 'string', 'min:3', 'max:255'],
            'pass'=>['required', 'string', 'min:3', 'max:255'],
            
        ]);

        $supervisor = new Supervisor($request->all());
        $supervisor->save();

        DB::table('users')->insert([
            'name' => $supervisor->nombre,
            'email' => $supervisor->correo,
            'password' => bcrypt($supervisor->pass),
            'tipo' => $request->tipo,
        ]);
        
        //return redirect('/tarea');
        return redirect()->route('supervisor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function show(Supervisor $supervisor)
    {
        //
        return view('supervisor.supervisorshow', compact('supervisor'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function edit(Supervisor $supervisor)
    {
        //
        if(!Gate::allows('administrador')){
            abort(403);
        }
        return view('supervisor.supervisorform', compact('supervisor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supervisor $supervisor)
    {
        //
        if(!Gate::allows('administrador')){
            abort(403);
        }

        $request->validate([
            'nombre'=>['required', 'string', 'min:3', 'max:50'],
            'correo'=>['required', 'string', 'min:3', 'max:255'],
            'pass'=>['required', 'string', 'min:3', 'max:255'],
        ]);

        $supervisor->nombre = $request->nombre;
        $supervisor->correo = $request->correo;
        $supervisor->pass = $request->pass;
        $supervisor->salario = $request->salario;
        $supervisor->edad = $request->edad;
        
        $supervisor->save();

        return redirect()->route('supervisor.show', $supervisor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supervisor $supervisor)
    {
        //
        if(!Gate::allows('administrador')){
            abort(403);
        }
        $supervisor->delete();
        return redirect()->route('supervisor.index');
    }
}
