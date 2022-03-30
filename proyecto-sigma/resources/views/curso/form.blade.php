<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_curso') }}
            {{ Form::text('name_curso', $curso->name_curso, ['class' => 'form-control' . ($errors->has('name_curso') ? ' is-invalid' : ''), 'placeholder' => 'Name Curso']) }}
            {!! $errors->first('name_curso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('campus') }}
            {{ Form::text('campus', $curso->campus, ['class' => 'form-control' . ($errors->has('campus') ? ' is-invalid' : ''), 'placeholder' => 'Campus']) }}
            {!! $errors->first('campus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('programa') }}
            {{ Form::text('programa', $curso->programa, ['class' => 'form-control' . ($errors->has('programa') ? ' is-invalid' : ''), 'placeholder' => 'Programa']) }}
            {!! $errors->first('programa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sede') }}
            {{ Form::text('sede', $curso->sede, ['class' => 'form-control' . ($errors->has('sede') ? ' is-invalid' : ''), 'placeholder' => 'Sede']) }}
            {!! $errors->first('sede', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modalidad') }}
            {{ Form::text('modalidad', $curso->modalidad, ['class' => 'form-control' . ($errors->has('modalidad') ? ' is-invalid' : ''), 'placeholder' => 'Modalidad']) }}
            {!! $errors->first('modalidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grupo') }}
            {{ Form::text('grupo', $curso->grupo, ['class' => 'form-control' . ($errors->has('grupo') ? ' is-invalid' : ''), 'placeholder' => 'Grupo']) }}
            {!! $errors->first('grupo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio') }}
            {{ Form::text('fecha_inicio', $curso->fecha_inicio, ['class' => 'form-control' . ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_fin') }}
            {{ Form::text('fecha_fin', $curso->fecha_fin, ['class' => 'form-control' . ($errors->has('fecha_fin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin']) }}
            {!! $errors->first('fecha_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>