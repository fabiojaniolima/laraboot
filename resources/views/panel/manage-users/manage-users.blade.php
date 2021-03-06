@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><i class="fas fa-users-cog"></i> Gerenciar usuários</div>

                <div class="card-body">
                    @include('includes.alert')

                    <div class="row">
                        <div class="col">
                            Total de usuários: <span class="badge badge-info">{{ $users->total() }}</span>
                            @isset($filter)
                                <a title="Limpar filtro" href="{{ url('/painel/gerenciar-usuarios') }}" class="badge badge-warning">x filtro: "{{ $filter }}"</a>
                            @endif
                        </div>
                        <div class="col">
                            <form class="form-inline float-right" method="POST" action="{{ url('/painel/gerenciar-usuarios') }}">
                                @csrf
                                <div class="form-group mx-sm-2 mb-2">
                                    <label for="search" class="sr-only">Pesquisar</label>
                                    <input title="Pesquise pelo nome ou email" type="search" class="form-control form-control-sm" id="search" name="search" placeholder="Pesquisar...">
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm mb-2">GO!</button>
                            </form>
                        </div>
                    </div>

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th><i class="far fa-user"></i> Nome</th>
                                <th><i class="far fa-envelope"></i> E-mail</th>
                                <th class="text-center"><i class="far fa-check-square"></i> Status</th>
                                <th class="text-center"><i class="far fa-clock"></i> Criado em</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($users as $u)
                            <tr>
                                <td class="text-center">{{ $u->id }}</td>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->email }}</td>
                                <td class="text-center">
                                    @if($u->locked)
                                        <i title="Bloqueado" class="fas fa-user-lock text-danger"></i>
                                    @else
                                        <i title="Ativo" class="fas fa-user-check text-success"></i>
                                    @endif
                                </td>
                                <td class="text-center">{{ $u->created_at}}</td>
                                <td class="text-center">
                                    <div class="list-inline">
                                        <span class="list-inline-item"><a title="Detalhes" href="{{ url('/painel/gerenciar-usuarios/mostrar', $u->id) }}"><i class="far fa-eye text-success"></i></a></span>
                                        <span class="list-inline-item"><a title="{{ $u->locked ? 'Bloqueado' : 'Desbloqueado' }}" data-method="locked" href="{{ url('/painel/gerenciar-usuarios/alterar-status', $u->id) }}"><i class="far fa-{{ $u->locked ? 'check-circle' : 'times-circle' }}" style="color: #f6963e"></i></a></span>
                                        <span class="list-inline-item"><a title="Excluir" data-method="delete" href="{{ url('/painel/gerenciar-usuarios/excluir', $u->id) }}"><i class="far fa-trash-alt text-danger"></i></a></span>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">Não existem posts para serem listados</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                    <div class="float-right">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function () {
            var url, username;

            function mensage(event, action) {
                event.preventDefault();

                var msg = `O usuário "${username}" será excluido!`;

                if (action)
                    msg = `Essa ação irá ${action} o usuário "${username}"!`;

                if (confirm(msg))
                    window.location = url;
            };

            $('.list-inline-item').on('click', 'a[data-method="delete"], a[data-method="locked"]', function (e) {
                url = $(this).attr('href');
                username = $(this).parents('tr').children('td:nth-child(2)').text();

                if ($(this).attr('data-method') == 'locked')
                    return mensage(e, $(this).attr('title') == 'Bloqueado' ? 'Desbloquear' : 'Bloquear');

                return mensage(e);
            });
        });
    </script>
@endpush
@endsection
