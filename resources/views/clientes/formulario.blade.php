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

                    

                    {!! Form::open(['url' => 'clientes/salvar']) !!}                 

                    {!! Form::label('nome', 'Nome') !!}
                    {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']) !!}

                    {!! Form::label('endereco', 'Endereço') !!}
                    {!! Form::input('text', 'endereco', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Endereço']) !!}

                    {!! Form::label('numero', 'Numero') !!}
                    {!! Form::input('text', 'numero', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Numero']) !!}

                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection