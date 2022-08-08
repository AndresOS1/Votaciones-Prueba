@extends('layouts.dashboard')
@section('content')
    @include('sweetalert::alert')

    <div class="container index-body">
        <div class="row">
            <div class="col mt-5">
                <h1 class="text-center">Puestos de Votaciones</h1>
                <table cellspacing="0"class="table table-bordered table-responsive display compact no-wrap">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Direcion</th>
                            <th scope="col">Municipio</th>
                            <th scope="col">Opciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($PuestosDeVotaciones as $PuestosDeVotacion)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $PuestosDeVotacion->nombre }}</td>
                                <td>{{ $PuestosDeVotacion->direccion }}</td>

                                @foreach ($municipios as $municipio)
                                    @if ($PuestosDeVotacion->municipio_id == $municipio->id_municipio)
                                        <td>{{ $municipio->nombre }}</td>
                                    @endif
                                @endforeach
                                <td>
                                    <form action="{{ route('eliminarpuesto',$PuestosDeVotacion-> id_puesto)}}" method="POST">
                                        <a class="btn btn-sm btn-success" href="{{route('editarpuesto',$PuestosDeVotacion->id_puesto)}}"><i class="bi bi-pencil-square"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
