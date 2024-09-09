<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(){
        $pacientes = Paciente::all();
        return view('pacientes.index', compact('pacientes'));
    }

    public function create(){
        return view('pacientes.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'nascimento' => 'required|date',
            'telefone' => 'required|string|max:15',
            'endereco' => 'required|string|max:255',
            'sexo' => 'required|string|max:10',
            'cpf' => 'required|string|max:14|unique:pacientes,cpf',
        ]);

        Paciente::create($validatedData);
        return redirect()->route('pacientes.index');
    }

    public function show($paciente){
        $paciente = Paciente::findOrFail($paciente);
        return view('pacientes.show', compact('paciente'));
    }

    public function edit($paciente){
        $paciente = Paciente::findOrFail($paciente);
        return view('pacientes.edit', compact('paciente'));
    }

    public function update(Request $request, $paciente){
        $paciente = Paciente::findOrFail($paciente);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'nascimento' => 'required|date',
            'telefone' => 'required|string|max:15',
            'endereco' => 'required|string|max:255',
            'sexo' => 'required|string|max:10',
            'cpf' => 'required|string|max:14|unique:pacientes,cpf,'.$paciente->id,
        ]);

        $paciente->update($validatedData);
        return redirect()->route('pacientes.index');
    }

    public function destroy($paciente){
        Paciente::destroy($paciente);
        return redirect()->route('pacientes.index');
    }
}
