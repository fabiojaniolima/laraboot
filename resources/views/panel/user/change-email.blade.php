@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><i class="far fa-envelope"></i> Alterar e-mail</div>

                    <div class="card-body">
                        @include('includes.alert')

                        <form method="POST" action="{{ url('/painel/alterar-email') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="senha" class="col-md-4 col-form-label text-md-right">Senha atual</label>

                                <div class="col-md-6">
                                    <input id="senha" type="password" class="form-control{{ $errors->has('senha') ? ' is-invalid' : '' }}" name="senha" value="{{ old('senha') }}" required {{ old('senha') ?? 'autofocus' }}>

                                    @if ($errors->has('senha'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('senha') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Novo e-mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_confirmation" class="col-md-4 col-form-label text-md-right">Confirmar e-mail</label>

                                <div class="col-md-6">
                                    <input id="email_confirmation" type="email" class="form-control{{ $errors->has('email_confirmation') ? ' is-invalid' : '' }}" name="email_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Salvar alterações
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
