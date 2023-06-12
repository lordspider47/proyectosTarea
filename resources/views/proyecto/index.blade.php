@extends('layouts.app')

@section('template_title')
    Proyecto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Proyecto') }}
                            </span>

                            <div class="float-right">
                                {{-- //PDF BTN --}}
                                <a href="{{ route('proyecto.pdf') }}" class="btn btn-primary btn-sm"
                                    data-placement="left">
                                    {{ __('DESCARGAR PDF') }}
                                </a>
                                
                                &nbsp;
                                {{-- //CREATE NEW --}}
                                <a href="{{ route('proyectos.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('CREAR PROYECTO') }}
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

                                        <th>Nombre</th>
                                        <th>Fuente de fondos</th>
                                        <th>Monto planificado</th>
                                        <th>Monto patrocinado</th>
                                        <th>Monto fondos propios</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proyectos as $proyecto)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $proyecto->NombreProyecto }}</td>
                                            <td>{{ $proyecto->fuenteFondos }}</td>
                                            <td>{{ $proyecto->MontoPlanificado }}</td>
                                            <td>{{ $proyecto->MontoPatrocinado }}</td>
                                            <td>{{ $proyecto->MontoFondosPropios }}</td>

                                            <td>
                                                <form action="{{ route('proyectos.destroy', $proyecto->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('proyectos.show', $proyecto->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('proyectos.edit', $proyecto->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $proyectos->links() !!}
            </div>
        </div>
    </div>
@endsection
