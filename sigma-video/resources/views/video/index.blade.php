@extends('layouts.app')

@section('template_title')
    Video
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Video') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('videos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                    <nav class="navbar navbar-light float-right">
                        <form class="form-inline">
                            <input name="busqueda" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                    </nav>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Id</th>

										<th>Título del video</th>
										<th>Link</th>
										<th>Duración</th>
										<th>Fecha Publicación</th>
										<th>Tipología</th>
										<th>Carpeta Vimeo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($videos as $video)
                                        <tr>
                                            <td>{{ $video->id }}</td>
											<td>{{ $video->name }}</td>
											<td>{{ $video->link }}</td>
											<td>{{ $video->duracion }}</td>
											<td>{{ $video->fecha_publicacion }}</td>
											<td>{{ $video->tipologia }}</td>
											<td>{{ $video->carpeta_vimeo }}</td>

                                            <td>
                                                <form action="{{ route('videos.destroy',$video->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('videos.show',$video->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('videos.edit',$video->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $videos->links() !!}
            </div>
        </div>
    </div>
@endsection
