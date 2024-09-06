<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index(){
        $medicos = Medico::all();
        return view('medicos.index', compact('medicos'));
    }

    public function create(){
        return view('medicos.create');
    }

    public function store(Request $request){
        Medico::create($request->all());
        return redirect()->route('medicos.index');
    }

    public function show($medico){
        $medico = Medico::findOrFail($medico);
        return view('medicos.show', compact('medico'));
    }

    public function edit($medico){
        $medico = Medico::findOrFail($medico);
        return view('medicos.edit', compact('medico'));
    }

    public function update(Request $request, $medico){
        $medico = Medico::findOrFail($medico);
        $medico->update($request->all());
        return redirect()->route('medicos.index');
    }

    public function destroy($medico){
        Medico::destroy($medico);
        return redirect()->route('medicos.index');
    }
}
