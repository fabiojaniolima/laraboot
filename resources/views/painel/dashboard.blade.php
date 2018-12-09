@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><i class="fas fa-tachometer-alt"></i> Dashboard</div>

                <div class="card-body">
                    @include('includes.alert')

                    Login efetuado com sucesso!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
