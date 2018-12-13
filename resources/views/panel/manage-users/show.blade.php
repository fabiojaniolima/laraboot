@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><i class="fas fa-user-tag"></i> Informações do usuário</div>

                    <div class="card-body">
                        <div class="card" >
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-id-card"></i> ID: {{ $user->id }}</li>
                                <li class="list-group-item"><i class="fas fa-user"></i> Nome: {{ $user->name }}</li>
                                <li class="list-group-item"><i class="fas fa-envelope"></i> E-mail: {{ $user->email }}</li>
                                <li class="list-group-item"><i class="fas fa-user-tie"></i> Profissão: {{ $user->profession }}</li>
                                <li class="list-group-item"><i class="fas fa-book"></i> Biografia: {{ $user->biography }}</li>
                                <li class="list-group-item"><i class="fas fa-stopwatch"></i> Cadastrado desde: {{ $user->created_at->format('d/m/Y à\s H:i:s') }}</li>
                                <li class="list-group-item"><i class="fas fa-transgender-alt"></i> Gênero: {{ $user->gender }}</li>
                                <li class="list-group-item"><i class="fas fa-calendar-alt"></i> Data de nascimento: {{ date('d/m/Y', strtotime($user->dt_birth)) }}</li>
                                <li class="list-group-item"><i class="fas fa-check-square"></i> Status: {{ $user->locked ? 'Ativo' : 'Bloqueado' }}</li>
                            </ul>
                        </div>
                        <div class="mt-2">
                        <a class="btn btn-primary" href="{{ url('/painel/gerenciar-usuarios') }}"><i class="fas fa-chevron-left"></i> Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
