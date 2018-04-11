@extends('layouts.app')

@section('content')


<div class="container">

    <div class="row justify-content-center">
        <div>
            <li>
                <a href="/clientes/pesquisar">Pesquisar </a>
            </li>
            <li>
                <a href="/clientes/inserir">Inserir </a>
            </li>

        </div>

        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif



                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
