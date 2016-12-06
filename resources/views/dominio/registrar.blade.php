@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar dominio</div>

                <div class="panel-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    @if (session('error'))
                        <div class="alert alert-error">
                            {{ session('error') }}
                        </div>
                    @endif
                    <h3>¿ Ya tienes un dominio ?</h3>
                    
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/dominio/registrar') }}">

                        <div class="form-group{{ $errors->has('dominio') ? ' has-error' : '' }}">
                            <label for="dominio" class="col-md-4 control-label">Registre su dominio</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="dominio" value="{{ old('dominio') }}" required autofocus>

                                @if ($errors->has('dominio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dominio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Enviar
                                </button>

                                <a class="btn btn-link" href="{{ url('/dominio/enviar-solicitud') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                    
                    <div class="alert alert-info">
                        <h5>Realice los siguientes pasos para configurar su dominio con su proveedor:</h5>
                        <ul class="list-inline">
                            <li>1.- PASO</li>
                            <li>2.- PASO</li>
                            <li>3.- PASO</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection