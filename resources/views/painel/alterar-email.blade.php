@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <a class="btn btn-info mb-4" href="{{ route('alterar-perfil') }}"><i class="fas fa-user"></i> Perfil</a>
                <a class="btn btn-info mb-4" href="{{ route('alterar-email') }}"><i class="fas fa-at"></i> Alterar e-mail</a>
                <a class="btn btn-info mb-4" href="{{ route('alterar-senha') }}"><i class="fas fa-key"></i> Alterar senha</a>

                <div class="card">
                    <div class="card-header">Alterar email</div>

                    <div class="card-body">

                        @include('includes.alert')

                        <form method="POST" action="{{ route('alterar-email') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Senha atual</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <span class="m-md-4"></span>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Nova email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_confirmation" class="col-md-4 col-form-label text-md-right">Confirmar email</label>

                                <div class="col-md-6">
                                    <input id="email_confirmation" type="email" class="form-control" name="email_confirmation" value="{{ old('email') }}" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-save"></i> Salvar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
