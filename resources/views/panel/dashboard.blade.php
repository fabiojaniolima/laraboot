@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><i class="fas fa-tachometer-alt"></i> Dashboard</div>

                <div class="card-body">
                    @include('includes.alert')

                    <h5>Usuários</h5>

                    <hr>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card bg-light mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 class="card-title">Total: {{ $total_users }}</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <i class="fas fa-users fa-2x text-dark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-light mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 class="card-title">Bloqueados: {{ $locked_users }}</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <i class="fas fa-user-times fa-2x text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-light mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 class="card-title">Ativos: {{ $active_users }}</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <i class="fas fa-user-check fa-2x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
