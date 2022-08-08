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

                                <h2 class="fw-bold mb-2 text-uppercase">Puesto de votacion</h2>
                                <form action="{{route('PuestosDeVotaciones.uptate',$PuestosDeVotaciones-> id_puesto)}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-outline form-white mb-4 mt-5">
                                        <input type="text" id="text" class="form-control form-control-lg"
                                            name="nombre" value="{{$PuestosDeVotaciones->nombre}}" required />
                                        <label class="form-label" for="typeEmailX">Nombre</label>
                                    </div>



                                    <div class="form-outline form-white mb-4 mt-2">
                                        <input type="text" id="" class="form-control form-control-lg"
                                            name="direccion" value="{{$PuestosDeVotaciones->direccion}}"  required />
                                        <label class="form-label" for="typeEmailX">Direccion</label>
                                    </div>

                                    <div class="form-outline form-white mb-4 mt-2">
                                        <select  id="" class="form-select form-control-lg" name="municipio_id" required>
                                            <option value="">Seleccione Municipio</option>
                                            @foreach ($municipios as $municipio)
                                                <option value="{{ $municipio->id_municipio }}">{{ $municipio->nombre }}</option>
                                            @endforeach
                                        </select>
                                        <label class="form-label" for="typeEmailX">municipio</label>
                                    </div>



                                    <div class="row justify-content-center">
                                        <div class="col-sm-8 mt-2 mb-4">
                                            <button type="submit" name="button"
                                                class="btn btn1  w-100">Actualizar</button>
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