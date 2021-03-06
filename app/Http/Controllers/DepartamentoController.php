<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Empleado;
use App\Models\User;
use App\Policies\DepartamentoPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //solo ver los de un usuario
        //$departamentos = Auth::user()->departamentos()->with('user')->get();
        //$departamentos = Departamento::all();
        $departamentos = Departamento::with('user')->get();
        return view('departamento.departamentoindex', compact('departamentos'));
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
        return view('departamento.departamentoform');
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
            'nombre'=>['required', 'string', 'min:3', 'max:50', 'unique:App\Models\Departamento,nombre'],
            'descripcion'=>['required', 'string', 'min:10', 'max:255'],
        ]);

        $request->merge(['user_id'=>$request->user()->id]);
        $departamento = new Departamento($request->all());
        $departamento->save();
        
        //return redirect('/tarea');
        return redirect()->route('departamento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show(Departamento $departamento)
    {
        //
        $this->authorize('view', $departamento);

        $empleados = Empleado::get();

        return view('departamento.departamentoshow', compact('departamento', 'empleados'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Departamento $departamento)
    {
        //
        if(!Gate::allows('administrador')){
            abort(403);
        }
        return view('departamento.departamentoform', compact('departamento'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departamento $departamento)
    {
        //
        if(!Gate::allows('administrador')){
            abort(403);
        }
        //Departamento::where('id', $departamento->id)->update($request->except('_token', '_method'));
        $request->validate([
            'nombre'=>['required', 'string', 'min:3', 'max:50', Rule::unique('departamentos')->ignore($departamento->id)],
            'descripcion'=>['required', 'string', 'min:20', 'max:255'],
        ]);

        $departamento->nombre = $request->nombre;
        $departamento->descripcion = $request->descripcion;
        $departamento->save();

        return redirect()->route('departamento.show', $departamento);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departamento $departamento)
    {
         if(!Gate::allows('administrador')){
            abort(403);
        }
        //
        $departamento->delete();
        return redirect()->route('departamento.index');
    }

    public function agregaEmpleado(Request $request){

        if(!Gate::allows('administrador')){
            abort(403);
        }

        DB::table('departamento_empleado')->insert([
            'empleado_id'=> $request->empleado_id,
            'departamento_id'=> $request->departamento_id,
        ]);

        return redirect()->route('departamento.show', $request->departamento_id);
    }
}
