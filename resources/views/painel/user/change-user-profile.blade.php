@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><i class="fas fa-user"></i> Alterar perfil</div>

                    <div class="card-body">
                        @include('includes.alert')

                        <form method="POST" action="{{ url('/painel/alterar-perfil') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nome completo</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') ?? $user->name }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="profession" class="col-md-4 col-form-label text-md-right">Profissão</label>

                                <div class="col-md-6">
                                    <input id="profession" type="text" class="form-control{{ $errors->has('profession') ? ' is-invalid' : '' }}" name="profession" value="{{ old('profession') ?? $user->profession }}">

                                    @if ($errors->has('profession'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('profession') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="biography" class="col-md-4 col-form-label text-md-right">Biografia</label>

                                <div class="col-md-6">
                                    <textarea id="biography" class="form-control{{ $errors->has('biography') ? ' is-invalid' : '' }}" rows="7" name="biography">{{ old('biography') ?? $user->biography }}</textarea>

                                    @if ($errors->has('biography'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('biography') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">Gênero</label>

                                <div class="col-md-6">
                                    <fieldset id="gender">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="F" {{ $user->gender == 'F' ? 'checked' : '' }}>
                                                Feminino
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="M" {{ $user->gender == 'M' ? 'checked' : '' }}>
                                                Masculino
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="Não declarado" {{ $user->gender == 'Não declarado' ? 'checked' : '' }}>
                                                Não declarado
                                            </label>
                                        </div>
                                    </fieldset>

                                    @if ($errors->has('gender'))
                                        <span class="invalid-feedback" style="display: block !important;">
                                         <strong>{{ $errors->first('gender') }}</strong>
                                     </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dt_birth" class="col-md-4 col-form-label text-md-right">Data de nascimento</label>

                                <div class="col-md-6">
                                    <input id="dt_birth" type="date" placeholder="dd/mm/yyyy" class="form-control{{ $errors->has('dt_birth') ? ' is-invalid' : '' }}" name="dt_birth" value="{{ old('profession') ?? $user->dt_birth }}">

                                    @if ($errors->has('dt_birth'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dt_birth') }}</strong>
                                    </span>
                                    @endif
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
