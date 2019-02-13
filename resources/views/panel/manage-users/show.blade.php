@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><i class="fas fa-user-tag"></i> Informações do usuário</div>

                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col" width="30%">Colunas</th>
                                <th scope="col">Valores</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th><i class="fas fa-id-card"></i> ID</th>
                                <td>{{ $user->id }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-user"></i> Nome</th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-envelope"></i> E-mail</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-user-tie"></i> Profissão</th>
                                <td>{{ $user->profession }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-book"></i> Biografia</th>
                                <td>{{ $user->biography }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-stopwatch"></i> Cadastrado desde</th>
                                <td>{{ $user->created_at }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-transgender-alt"></i> Gênero</th>
                                <td>{{ $user->gender }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-calendar-alt"></i> Data de nascimento</th>
                                <td>{{ date('d/m/Y', strtotime($user->dt_birth)) }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-check-square"></i> Status</th>
                                <td>{{ $user->locked ? 'Ativo' : 'Bloqueado' }}</td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="mt-2">
                            <a class="btn btn-primary" href="{{ url('/painel/gerenciar-usuarios') }}"><i class="fas fa-chevron-left"></i> Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
