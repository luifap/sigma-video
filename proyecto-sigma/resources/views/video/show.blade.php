@extends('layouts.app')

@section('template_title')
    {{ $video->name ?? 'Show Video' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Video</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('videos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $video->name }}
                        </div>
                        <div class="form-group">
                            <strong>Link:</strong>
                            {{ $video->link }}
                        </div>
                        <div class="form-group">
                            <strong>Duracion:</strong>
                            {{ $video->duracion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Publicacion:</strong>
                            {{ $video->fecha_publicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Tipologia:</strong>
                            {{ $video->tipologia }}
                        </div>
                        <div class="form-group">
                            <strong>Carpeta Vimeo:</strong>
                            {{ $video->carpeta_vimeo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
