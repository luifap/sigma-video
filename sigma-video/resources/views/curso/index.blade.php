@extends('layouts.app')

@section('template_title')
    Curso
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Curso') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cursos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Nombre del Curso</th>
										<th>Campus</th>
										<th>Programa</th>
										<th>Sede</th>
										<th>Modalidad</th>
										<th>Grupo</th>
										<th>Fecha Inicio</th>
										<th>Fecha Fin</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cursos as $curso)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $curso->name_curso }}</td>
											<td>{{ $curso->campus }}</td>
											<td>{{ $curso->programa }}</td>
											<td>{{ $curso->sede }}</td>
											<td>{{ $curso->modalidad }}</td>
											<td>{{ $curso->grupo }}</td>
											<td>{{ $curso->fecha_inicio }}</td>
											<td>{{ $curso->fecha_fin }}</td>

                                            <td>
                                                <form action="{{ route('cursos.destroy',$curso->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cursos.show',$curso->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cursos.edit',$curso->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $cursos->links() !!}
            </div>
        </div>
    </div>
@endsection
