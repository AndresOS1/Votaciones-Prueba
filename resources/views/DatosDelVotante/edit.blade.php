@extends('layouts.dashboard')
@section('content')
    @include('sweetalert::alert')
    <section class="gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card card1 back1 text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Datos del Votante</h2>
                                <form action="{{route('DatosDelVotante.uptate', $DatosDelVotantes-> id_votante)}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-outline form-white mb-4 mt-2">
                                        <input type="text" id="text" class="form-control form-control-lg"
                                            name="nombres" value="{{$DatosDelVotantes->nombres}}" required />
                                        <label class="form-label" for="typeEmailX">Nombres</label>
                                    </div>
                                    <div class="form-outline form-white mb-4 mt-2">
                                        <input type="text" id="text" class="form-control form-control-lg"
                                            name="apellidos" value="{{$DatosDelVotantes->apellidos}}" required />
                                        <label class="form-label" for="typeEmailX">Apellidos</label>
                                    </div>



                                    <div class="form-outline form-white mb-4 mt-2">
                                        <input type="text" id="" class="form-control form-control-lg"
                                            name="direccion" value="{{$DatosDelVotantes->direccion}}" required />
                                        <label class="form-label" for="typeEmailX">Direccion</label>
                                    </div>

                                    <div class="form-outline form-white mb-4 mt-2">
                                        <input type="number" id="" class="form-control form-control-lg"
                                            name="telefono" value="{{$DatosDelVotantes->telefono}}" required />
                                        <label class="form-label" for="typeEmailX">Telefono</label>
                                    </div>

                                    <div class="form-outline form-white mb-4 mt-2">
                                        <input type="number" id="" class="form-control form-control-lg"
                                            name="cedula" value="{{$DatosDelVotantes->cedula}}" required />
                                        <label class="form-label" for="typeEmailX">Num Documento</label>
                                    </div>


                                    <div class="form-outline form-white mb-4 mt-2">
                                        <select  id="" class="form-select form-control-lg" name="user_id" required>
                                            <option value="">Seleccione un Lider</option>
                                            @foreach ($users as $user)
                                                @if($user->tipoUsuario == "lider")
                                                <option value="{{ $user->id}}">{{ $user->tipoUsuario }}-{{$user->nombres}}</option>
                                                @endif
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
                                        <select  id="" class="form-select form-control-lg" name="puestos_de_votaciones_id" required>
                                            <option value="">Seleccione un Puesto de votación</option>
                                            @foreach ($PuestosDeVotaciones as $PuestoDeVotacion)
                                                <option value="{{ $PuestoDeVotacion->id_puesto }}">{{ $PuestoDeVotacion->nombre }}</option>
                                            @endforeach
                                        </select>
                                        <label class="form-label" for="typeEmailX">Puesto de votacion</label>
                                    </div>

                                    <div class="form-outline form-white mb-4 mt-2">
                                        <input type="number" id="" class="form-control form-control-lg"
                                            name="mesa" value="{{$DatosDelVotantes->mesa}}" required />
                                        <label class="form-label" for="typeEmailX"># Mesa</label>
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
<style>
    #wrapper{
    background-color: grey;
    width: 100%;
  }
.body{
    width: 80%;
}
  nav .boton{
      background-color: #DC5716;
      color: aliceblue;
      border: 1px;
      border-radius: 10px;
      padding: 10px;
      margin-left: 20px;
      box-shadow: 5px 10px 8px rgb(47, 47, 47);
  }
  #imgUser{
    width: 200px;
    height: 200px;
  
  }
  #siderbar{
      width: 17%;
      height: 100vh;
      background-color: grey;
  }
  #siderbar.active{
      background-color: rgb(244, 9, 9);
      margin-left: -700px;
  }
  .lista a:hover{
      background-color: #254240;
  }
  .ul{
      background-color: #437176;
  }
  .ul li a:hover{
      background-color: #69A6A4;
  }
  .icon:hover{
      color: #DC5716;
  }
  
  .icon{
      color: aliceblue;
  }
  .miss {
    text-decoration: none;
    color: #FFFF;
}

.nav1 {
    height: 100vh;
}

.miss:hover {
    color: #FFFF;
}

body {
    background-color: #ffff;
}

.g {
    width: 20%;
    height: 10px;
}

header {
    height: 90px;
    background-color: #FFFF
}

.ff {
    display: flex;
    justify-content: flex-end;
    height: 60px;
    padding: 0px;

}

div .back1 {
    background-color: #69A6A4
}

div .btn1 {
    background-color: #DC5716;
    color: #FFFF;
    margin-left: 16px;
}
.btn1:hover {
    background-color: black;
    color: #FFFF;
   
}

.t {
    font-size: 15px;
    margin-top: 0px;
    /* margin-left: 50px; */
    text-decoration: none;
    background-color: black;
    color: #FFFF;
    border-radius: 5%;
}

.t:hover {
    background-color: #FFFF;
    color: black;
    border-radius: 5%;
}

.imglogin {


    /* float: initial; */
    border-radius: 50%;
    width: 150px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 50px;
    display: block;

}

.barra-lateral {
    background-color: #437176;
    color: #fff;
    min-width: 250px;
    min-height: 190vh;
    
}

.barra-lateral a {
    color: #fff;


}

.barra-lateral .menu a {

    display: block;
    padding: 20px;
    margin-top: 50px;
    font-family: Roboto, sans-serif;
    font-weight: 500;
    border-bottom: 1px rgba(255, 255, 255, .1);
    font-size: 20PX;
    text-decoration: none;
}

.barra-lateral .menu a:hover {
    background-color: rgb(30, 30, 30);
    text-decoration: none;
}

.text1 {
    margin-top: 30px;
    display: flex;
    justify-content: center
}

.barra {
    background-color: #437176;
    padding-top: 10px;
    padding-bottom: 15px;
    margin: 0;
}

.dropdown-menu {
    margin: 17px;
    background: #262a34;
    color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.568);
}
</style>