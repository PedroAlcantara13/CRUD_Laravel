@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Informe Abaixo as Informações do Cliente
                    <a style="margin-left: 280px;" href="{{ url('clientes') }}">Listagem de Clientes</a>
                </div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="edicaos">

                    <input name="_token" type="hidden" value="Zc70HsPfWroiAnp9YVEGJNTKWQdyqHLCctj9CICo">                 
                    Editando
                    <label for="nome">Nome</label>
                    <input class="form-control" autofocus placeholder="Nome" name="nome" type="text" value="{{ $cliente->nome }}" id="nome">

                    <label for="endereco">Endere&ccedil;o</label>
                    <input class="form-control" autofocus placeholder="Endereço" name="endereco" type="text" value="{{ $cliente->endereco }}" id="endereco">

                    <label for="numero">Numero</label>
                    <input class="form-control" autofocus placeholder="Numero" name="numero" type="text" value="{{ $cliente->numero }}" id="numero">

                    <input class="btn btn-primary" type="submit" value="Salvar">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection