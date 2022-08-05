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
                                <form action="{{}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-outline form-white mb-4 mt-5">
                                        <input type="text" id="text" class="form-control form-control-lg"
                                            name="nombre" required />
                                        <label class="form-label" for="typeEmailX">Nombre</label>
                                    </div>



                                    <div class="form-outline form-white mb-4 mt-2">
                                        <input type="text" id="" class="form-control form-control-lg"
                                            name="direccion" required />
                                        <label class="form-label" for="typeEmailX">Direccion</label>
                                    </div>

                                    <div class="form-outline form-white mb-4 mt-2">
                                        <select name="" id="" class="form-select form-control-lg" name="municipio_id">
                                            <option value="" selected class="">selecciona el municipio</option>
                                            
                                        </select>
                                        <label class="form-label" for="typeEmailX">municipio</label>
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