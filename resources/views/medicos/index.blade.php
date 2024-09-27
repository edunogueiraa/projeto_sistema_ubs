@extends('layouts.app')

@section('content')
    <h1>Lista de Médicos</h1>
    <a href="{{ route('medicos.create') }}">Adicionar Médico</a>
    <ul>
        @foreach ($medicos as $medico)
            <li>
                <a href="{{ route('medicos.show', $medico->id) }}">{{ $medico->nome }}</a>
                <a href="{{ route('medicos.edit', $medico->id) }}">Editar</a>
                <form action="{{ route('medicos.destroy', $medico->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection