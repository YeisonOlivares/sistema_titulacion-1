@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Trabajos

                    <!--ACA PUEDE IR EL BUSCADOR -->
                    
                </div>
                <td>
                    <div class="col-md-4">
                        {{ Form::label('run','Busqueda por Rut de alumno','')}}
                    </div>                            
                        {{ Form::text('run',null)}}

                    </td>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th colspan="6">&nbsp;</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($trabajos as $trabajo)
                            <tr>
                                <td> {{ $trabajo->nombre_trabajo}}</td>
                                <td> {{ $trabajo->estado}}</td>

                                <td width="10px">
                                    <a href="{{ route('correctcom') }}" class="btn btn-sm btn-default">
                                        Ingresar comision correctora
                                    </a>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route( 'home' ) }}" class="btn btn-sm btn-primary pull-right">Atras</a>
                    {{ $trabajos->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection