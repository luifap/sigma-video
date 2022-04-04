@extends('layouts.app')

@section('template_title')
    {{ $curso->name ?? 'Show Curso' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Vista de Curso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cursos.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre del Curso:</strong>
                            {{ $cursos->name_curso }}
                        </div>
                        <div class="form-group">
                            <strong>Campus:</strong>
                            {{ $cursos->campus }}
                        </div>
                        <div class="form-group">
                            <strong>Programa:</strong>
                            {{ $cursos->programa }}
                        </div>
                        <div class="form-group">
                            <strong>Sede:</strong>
                            {{ $cursos->sede }}
                        </div>
                        <div class="form-group">
                            <strong>Modalidad:</strong>
                            {{ $cursos->modalidad }}
                        </div>
                        <div class="form-group">
                            <strong>Grupo:</strong>
                            {{ $cursos->grupo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $curso->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin:</strong>
                            {{ $cursos->fecha_fin }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
