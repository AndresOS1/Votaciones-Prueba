<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
 </head>
  <body>
    @include('sweetalert::alert')
    <section class="" id="wrapper">
      <nav class="navbar navbar-expand-sm p-2">
        <button type="button" class="boton " id="buttonsiderbar">
          <span class="bi-archive fs-3 m-1"></span>
        </button>
        <button type="button" class="btn d-inline-block d-sm-none ml-auto" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-expanded="false" aria-label="Togglenavigation">
            <span class="navbar-toggler-icon" aria-controls="navbarSupportedContent"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center pt-4" id="navbarSupportedContent">
            <ul class="nav navbar-nav navbar-center px-5 ml-auto w-50 d-flex justify-content-lg-end gap-5">
                <li class="navbar-item mx-3">
                    <a class="icon fs-3 bi bi-apple w-100 d-flex justify-content-center text-decoration-none"></a>
                    <div class="">
                        <p class="fs-4 text-white">circle</p>
                    </div>
                </li>
                <li class="navbar-item mx-3">
                    <a class="icon fs-3 bi bi-bell-fill w-100 d-flex justify-content-center text-decoration-none"></a>
                    <div class="">
                        <p class="fs-4 text-white">circle</p>
                    </div>
                </li>
                <li class="navbar-item mx-3">
                    <a class="icon fs-3 bi bi-brightness-high-fill w-100 d-flex justify-content-center text-decoration-none"></a>
                    <div class="">
                        <p class="fs-4 text-white">circle</p>
                    </div>
                </li>
                <li class="navbar-item mx-3">
                    <a class="icon fs-3 bi bi-people-fill w-100 d-flex justify-content-center text-decoration-none"></a>
                    <div class="">
                        <p class="fs-4 text-white">circle</p>
                    </div>
                </li>    
            </ul> 
            <div class="w-25 d-flex justify-content-end icon pb-4">
                <a class="icon fs-1 bi bi-door-closed-fill  d-flex justify-content-end text-decoration-none" href="{{ route('cerrarSesion') }}"></a> 
            </div>
        </div>
      </nav>
    </section>
    <section class="d-flex flex-row" id="content">
        <nav id="siderbar" class="p-2 col-sm-12 d-flex flex-column">
            <div class="siderbar-header mb-4">
                <div class="d-flex justify-content-center w-100"><p class="fs-2 text-white">{{ Auth()->user()->userName }} </p></div> 
                <div class="d-flex justify-content-center w-100">
                    <img id="imgUser" src="{{ asset(Auth()->user()->avatar) }}" class="img-fluid rounded-circle shadow-lg sm-4" alt="">
                </div>       
            </div>
            <ul class="list list-unstyled justify-content-center d-flex flex-wrap">
               <li id="" class="w-100 d-flex lista justify-content-center mt-5 flex-wrap"> 
                <a type="button" class="btn d-inline-block  ml-auto w-100 fs-4 text-white" data-toggle="collapse"
                data-target="#list1" aria-expanded="false" aria-label="Togglenavigation">
                Puestos de votaciones</a>
                    <ul class="collapse w-100 ul  flex-wrap p-0" id="list1">
                        <li class="d-flex justify-content-center ">
                                <a class="fs-4 text-white nav-link w-100 d-flex justify-content-center" href="{{ route('PuestosDeVotaciones.index') }}">Ver puestos</a>
                        </li>
                        <li class="d-flex justify-content-center w-100">
                            <a class="fs-4 text-white nav-link  w-100 d-flex justify-content-center" href="{{ route('PuestosDeVotaciones.create') }}">Registrar puesto</a>
                        </li>                
                    </ul>
                </li>
                <a href=""></a>
                <li id="" class="w-100 lista  mt-5 d-flex justify-content-center flex-wrap"> 
                    <a type="button" class="btn  d-inline-block  ml-auto w-100 fs-4 text-white" data-toggle="collapse"
                    data-target="#list2" aria-expanded="false" aria-label="Togglenavigation">
                    Datos del votante</a>
                        <ul class="collapse ul w-100 flex-wrap p-0" id="list2">
                            <li class="d-flex justify-content-center w-100">
                                <a class="fs-4 text-white nav-link  w-100 d-flex justify-content-center" href="{{route('DatosDelVotante.index')}}">Ver datos de los votantes</a>
                            </li>
                            <li class="d-flex justify-content-center w-100">
                                <a class="fs-4 text-white nav-link  w-100 d-flex justify-content-center" href="{{route('DatosDelVotante.create')}}">registrar votante</a>
                            </li>                
                        </ul>
                    </li>
                    <div class="w-100 d-flex mt-5 justify-content-center lista">
                        <a href="{{route('estadisticas')}}" type="button" class="btn  w-100 fs-4 text-white text-decoration-none">Estadisticas</a>
                    </div>
            </ul>
        </nav> 
        <section class="body card d-flex mx-auto mt-2 shadow-lg" >
            <div class="card-body d-flex flex-column flex-row">
                @yield('content')
            </div>
        </section>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>