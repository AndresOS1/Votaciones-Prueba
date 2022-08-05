



@extends('layouts.home')
@section('content')
    @include('sweetalert::alert')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card card1 back1 text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Datos del Votante</h2>
                                <form action="{{route('DatosDelVotante.store')}}" method="POST">
                                    @csrf
                                    <div class="form-outline form-white mb-4 mt-2">
                                        <input type="text" id="text" class="form-control form-control-lg"
                                            name="nombres" required />
                                        <label class="form-label" for="typeEmailX">Nombres</label>
                                    </div>
                                    <div class="form-outline form-white mb-4 mt-2">
                                        <input type="text" id="text" class="form-control form-control-lg"
                                            name="apellidos" required />
                                        <label class="form-label" for="typeEmailX">Apellidos</label>
                                    </div>



                                    <div class="form-outline form-white mb-4 mt-2">
                                        <input type="text" id="" class="form-control form-control-lg"
                                            name="direccion" required />
                                        <label class="form-label" for="typeEmailX">Direccion</label>
                                    </div>

                                    <div class="form-outline form-white mb-4 mt-2">
                                        <input type="number" id="" class="form-control form-control-lg"
                                            name="telefono" required />
                                        <label class="form-label" for="typeEmailX">Telefono</label>
                                    </div>

                                    <div class="form-outline form-white mb-4 mt-2">
                                        <input type="number" id="" class="form-control form-control-lg"
                                            name="cedula" required />
                                        <label class="form-label" for="typeEmailX">Num Documento</label>
                                    </div>


                                    <div class="form-outline form-white mb-4 mt-2">
                                        <select  id="" class="form-select form-control-lg" name="user_id" required>
                                            <option value="">Seleccione un Lider</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id}}">{{ $user->tipoUsuario }}-{{$user->nombres}}</option>
                                            @endforeach
                                        </select>
                                        <label class="form-label" for="typeEmailX">Lider</label>
                                    </div>

                                    <div class="form-outline form-white mb-4 mt-2">
                                        <select  id="" class="form-select form-control-lg" name="barrio_id" required>
                                            <option value="">Seleccione un Barrio</option>
                                            @foreach ($barrios as $barrio)
                                                <option value="{{ $barrio->id_barrio }}">{{ $barrio->nombre }}</option>
                                            @endforeach
                                        </select>
                                        <label class="form-label" for="typeEmailX">Barrio</label>
                                    </div>

                                    <div class="form-outline form-white mb-4 mt-2">
                                        <select  id="" class="form-select form-control-lg" name="puestos_de_votacion_id" required>
                                            <option value="">Seleccione un Puesto de votación</option>
                                            @foreach ($PuestosDeVotaciones as $PuestoDeVotacion)
                                                <option value="{{ $PuestoDeVotacion->id_puesto }}">{{ $PuestoDeVotacion->nombre }}</option>
                                            @endforeach
                                        </select>
                                        <label class="form-label" for="typeEmailX">Puesto de votacion</label>
                                    </div>

                                    <div class="form-outline form-white mb-4 mt-2">
                                        <input type="number" id="" class="form-control form-control-lg"
                                            name="mesa" required />
                                        <label class="form-label" for="typeEmailX"># Mesa</label>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-sm-8 mt-2 mb-4">
                                            <button type="submit" name="button"
                                                class="btn btn1  w-100">Registrar</button>
                                        </div>
                                    </div>

                    
                                </form>
                            </div>

                            <div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection