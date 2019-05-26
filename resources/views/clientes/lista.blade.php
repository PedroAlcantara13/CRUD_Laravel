@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clientes
                    <a style="margin-left: 550px;" href="{{ url('clientes/novo') }}">Novo Cliente</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
                    <table class="table">
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Numero</th>
                        <th>Ações</th>
                        <tbody>
                            @foreach($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->endereco }}</td>
                                <td>{{ $cliente->numero }}</td>
                                <td>
                                    <a href="clientes/{{ $cliente->id }}/edicao" class="btn btn-default">Editar</a>
                                    <a class="btn btn-danger" href="clientes/{{ $cliente->id }}/delete">Deletar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection