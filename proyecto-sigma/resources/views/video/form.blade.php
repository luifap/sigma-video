<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $video->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('link') }}
            {{ Form::text('link', $video->link, ['class' => 'form-control' . ($errors->has('link') ? ' is-invalid' : ''), 'placeholder' => 'Link']) }}
            {!! $errors->first('link', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('duracion') }}
            {{ Form::text('duracion', $video->duracion, ['class' => 'form-control' . ($errors->has('duracion') ? ' is-invalid' : ''), 'placeholder' => 'Duracion']) }}
            {!! $errors->first('duracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_publicacion') }}
            {{ Form::text('fecha_publicacion', $video->fecha_publicacion, ['class' => 'form-control' . ($errors->has('fecha_publicacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Publicacion']) }}
            {!! $errors->first('fecha_publicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipologia') }}
            {{ Form::text('tipologia', $video->tipologia, ['class' => 'form-control' . ($errors->has('tipologia') ? ' is-invalid' : ''), 'placeholder' => 'Tipologia']) }}
            {!! $errors->first('tipologia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('carpeta_vimeo') }}
            {{ Form::text('carpeta_vimeo', $video->carpeta_vimeo, ['class' => 'form-control' . ($errors->has('carpeta_vimeo') ? ' is-invalid' : ''), 'placeholder' => 'Carpeta Vimeo']) }}
            {!! $errors->first('carpeta_vimeo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>