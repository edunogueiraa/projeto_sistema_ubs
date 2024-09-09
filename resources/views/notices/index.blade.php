@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @session('success')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession

        <div class="card">
            <div class="card-header">Notícias</div>
            <div class="card-body">
                <a href="{{ route('notices.create') }}" class="btn btn-success btn-sm my-2">
                    <i class="bi bi-plus-circle"> </i>Novo Produto</a>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cód.</th>
                            <th scope="col">Descricao</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($notices as $notice)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $notice->code }}</td>
                                <td>{{ $notice->descricao }}</td>
                                <td>
                                    <form action="{{ route('notices.destroy', $notice->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ route('notices.show', $notice->id) }}" class="btn btn-warning btn-sm">
                                            <i class="bi bi-eye"></i>
                                            <!-- Ver -->
                                        </a>

                                        <a href="{{ route('products.edit', $product->id) }}"
                                            class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i>
                                            <!-- Editar -->
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>No Product Found!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                </table>

                {{ $notices->links() }}

            </div>
        </div>
    </div>
</div>

@endsection