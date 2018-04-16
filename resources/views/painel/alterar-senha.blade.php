@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Alterar senha</div>

                    <div class="card-body">

                        @include('includes.alert')

                        <form method="POST" action="{{ route('alterar-senha') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="senha_atual" class="col-md-4 col-form-label text-md-right">Senha atual</label>

                                <div class="col-md-6">
                                    <input id="senha_atual" type="password" class="form-control{{ $errors->has('senha_atual') ? ' is-invalid' : '' }}" name="senha_atual" value="{{ old('senha_atual') }}" required>

                                    @if ($errors->has('senha_atual'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('senha_atual') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nova_senha" class="col-md-4 col-form-label text-md-right">Nova senha</label>

                                <div class="col-md-6">
                                    <input id="nova_senha" type="password" class="form-control{{ $errors->has('nova_senha') ? ' is-invalid' : '' }}" name="nova_senha" required>

                                    @if ($errors->has('nova_senha'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nova_senha') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nova_senha_confirm" class="col-md-4 col-form-label text-md-right">Confirmar senha</label>

                                <div class="col-md-6">
                                    <input id="nova_senha_confirm" type="password" class="form-control" name="nova_senha_confirmation" required>
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
