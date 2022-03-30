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
                            <span class="card-title">Show Curso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cursos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name Curso:</strong>
                            {{ $curso->name_curso }}
                        </div>
                        <div class="form-group">
                            <strong>Campus:</strong>
                            {{ $curso->campus }}
                        </div>
                        <div class="form-group">
                            <strong>Programa:</strong>
                            {{ $curso->programa }}
                        </div>
                        <div class="form-group">
                            <strong>Sede:</strong>
                            {{ $curso->sede }}
                        </div>
                        <div class="form-group">
                            <strong>Modalidad:</strong>
                            {{ $curso->modalidad }}
                        </div>
                        <div class="form-group">
                            <strong>Grupo:</strong>
                            {{ $curso->grupo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $curso->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin:</strong>
                            {{ $curso->fecha_fin }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
