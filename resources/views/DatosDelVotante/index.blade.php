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
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Direcion</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Cedula</th>
                            <th scope="col">Mesa</th>
                            <th scope="col">Lider</th>
                            <th scope="col">Barrio</th>
                            <th scope="col">Puesto de Votacion</th>
                            <th scope="col">Opciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($DatosDelVotantes as $DatosDelVotante)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $DatosDelVotante->nombres }}</td>
                                <td>{{ $DatosDelVotante->apellidos }}</td>
                                <td>{{ $DatosDelVotante->direccion }}</td>
                                <td>{{ $DatosDelVotante->telefono }}</td>
                                <td>{{ $DatosDelVotante->cedula }}</td>
                                <td>{{ $DatosDelVotante->mesa }}</td>
                                @foreach ($users as $user)
                                    @if ($DatosDelVotante->user_id == $user->id)
                                        <td>{{ $user->nombres}}</td>
                                        {{-- @if ($DatosDelVotante->user_id == $user->id)
                                        @if($user->tipoUsuario == "lider")
                                        <td>{{$user->tipoUsuario}}</td>  
                                        @else
                                          <td>xd</td>  
                                        @endif
                                    @endif --}}
                                    @endif
                                @endforeach

                                @foreach ($barrios as $barrio)
                                    @if ($DatosDelVotante->barrio_id == $barrio->id_barrio)
                                        <td>{{ $barrio->nombre }}</td>
                                    @endif
                                @endforeach
                                
                                @foreach ($PuestosDeVotaciones as $PuestosDeVotacion)
                                    @if ($DatosDelVotante->puestos_de_votaciones_id == $PuestosDeVotacion->id_puesto)
                                        <td>{{ $PuestosDeVotacion->nombre }}</td>
                                    @endif
                                @endforeach
                                <td>
                                    <form action="{{ route('eliminarvotante',$DatosDelVotante->id_votante)}}" method="POST">
                                        <a class="btn btn-sm btn-success" href="{{route('editarvotante',$DatosDelVotante->id_votante)}}"><i class="bi bi-pencil-square"></i></a>
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
