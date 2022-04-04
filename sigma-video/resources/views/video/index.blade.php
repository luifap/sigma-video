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

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Link</th>
										<th>Duracion</th>
										<th>Fecha Publicacion</th>
										<th>Tipologia</th>
										<th>Carpeta Vimeo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($videos as $video)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
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
