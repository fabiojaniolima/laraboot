@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <a class="btn btn-info mb-4" href="{{ route('alterar-perfil') }}"><i class="fas fa-user"></i> Perfil</a>
                <a class="btn btn-info mb-4" href="{{ route('alterar-email') }}"><i class="fas fa-at"></i> Alterar e-mail</a>
                <a class="btn btn-info mb-4" href="{{ route('alterar-senha') }}"><i class="fas fa-key"></i> Alterar senha</a>

                <div class="card">
                    <div class="card-header">Perfil</div>

                    <div class="card-body">

                        @include('includes.alert')

                        <form method="POST" action="{{ route('salvar-perfil') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">Nome Completo</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $usuario->name or old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">E-mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $usuario->email or old('email') }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="profissao" class="col-md-4 col-form-label text-md-right">Profissao</label>

                                <div class="col-md-6">
                                    <input id="profissao" type="text" class="form-control{{ $errors->has('profissao') ? ' is-invalid' : '' }}" name="profissao" value="{{ $usuario->profissao or old('profissao') }}">

                                    @if ($errors->has('profissao'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('profissao') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="biografia" class="col-md-4 col-form-label text-md-right">Biografia</label>

                                <div class="col-md-6">
                                    <textarea id="biografia" class="form-control{{ $errors->has('biografia') ? ' is-invalid' : '' }}" rows="7" name="biografia">{{ $usuario->biografia or old('biografia') }}</textarea>

                                    @if ($errors->has('biografia'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('biografia') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="genero" class="col-md-4 col-form-label text-md-right">Gênero</label>

                                <div class="col-md-6">
                                    <fieldset id="genero">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input{{ $errors->has('genero') ? ' is-invalid' : '' }}" name="genero" value="F" {{ $usuario->genero == 'F' ? 'checked' : '' }}>
                                                Feminino
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input{{ $errors->has('genero') ? ' is-invalid' : '' }}" name="genero" value="M" {{ $usuario->genero == 'M' ? 'checked' : '' }}>
                                                Masculino
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input{{ $errors->has('genero') ? ' is-invalid' : '' }}" name="genero" value="Não declarado" {{ $usuario->genero == 'Não declarado' ? 'checked' : '' }}>
                                                Não declarado
                                            </label>
                                        </div>
                                    </fieldset>

                                    @if ($errors->has('genero'))
                                        <span class="invalid-feedback" style="display: block !important;">
                                        <strong>{{ $errors->first('genero') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dt_nasc" class="col-md-4 col-form-label text-md-right">Data de nascimento</label>

                                <div class="col-md-6">
                                    <input id="dt_nasc" type="date" placeholder="dd/mm/yyyy" class="form-control{{ $errors->has('dt_nasc') ? ' is-invalid' : '' }}" name="dt_nasc" value="{{ !is_null(old('dt_nasc')) ? old('dt_nasc') : $usuario->dt_nasc }}">

                                    @if ($errors->has('dt_nasc'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('dt_nasc') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Salvar
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
