<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">
    <title>salud</title>
</head>

<body>

    {{-- <div class="container ff">
        <div class="ps-2">
            <div class="form-group">
                <a class="bi bi-box-arrow-left g" href="{{ route('cerrarSesion') }}"></a>
            </div>
        </div>
    </div>

    <section class="body container-fliud d-flex col-10">
        @include('sweetalert::alert')
        <section class="col-2 d-flex  flex-column" style="height: 91vh;">
            <div class="w-100 d-flex p-5 flex-column justify-content-center">

                <img class="imglogin" src="{{ asset(Auth()->user()->avatar) }}" />
                <h5 class="font-1 active ">{{$user->name}} </h5>




            </div>
            <nav class="d-flex flex-wrap col-sm-3 flex-column nav w-100 p-4 mt-5 h-50 justify-content-between">

                <a class="nav-link d-flex justify-content-center t" href="">Opcion 1</a>
                <a class="nav-link d-flex justify-content-center t">Opcion 2</a>
                <a class="nav-link d-flex justify-content-center t">Opcion 3</a>
                <a class="nav-link d-flex justify-content-center t">Opcion 4</a>

            </nav>
        </section>
        <section class="col-12 d-flex border">
            <div class="container-fluid card col-12">
                @yield('content')


            </div>

        </section>
    </section> --}}
    <div class="container-fluid">
        <div class="row d-flex justify-content-center border align-content-center">
            <div class="col-12 barra d-flex justify-content-between">
                <h4 class="text-light ms-5">Bienvenido</h4>

                <div>

                    <a href="{{ route('cerrarSesion') }}" class="miss">Cerrar Sesion</a>


                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid">

        <div class="row">

            <div class="barra-lateral col-12 col-sm-2 border">

                <nav class="menu d-flex d-sm-block justify-content-end flex-wrap">
                    <img class="imglogin" src="{{ asset(Auth()->user()->avatar) }}" />
                    <h5 class="font-1 text1 active ">{{ $user->name }} </h5>


                <a class="nav-link d-flex justify-content-center " href="">Opcion 1</a>
                <a class="nav-link d-flex justify-content-center ">Opcion 2</a>
                <a class="nav-link d-flex justify-content-center ">Opcion 3</a>
                <a class="nav-link d-flex justify-content-center ">Opcion 4</a>
                </nav>

            </div>

            <div class="col">
                <div class="row justify-content-center align-content-center text-center">
                    <div class="columna col-lg-12">
                        <div class="container">

                            @yield('content')
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

<style>
    * {
        margin: 0px;
        top: 0;
        bottom: 0;
    }

    .miss {
        text-decoration: none;
        color: #FFFF;
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

    .back1 {
        background-color: #69A6A4
    }

    .btn1 {
        background-color: #DC5716;
        color: #FFFF
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


        /* float: left; */
        width: 100px;
        border-radius: 50%;
        margin-top: 30px;
        margin-left: 55px;
        padding: 0;
    }

    .barra-lateral {
        background-color: #437176;
        color: #fff;
        min-width: 250px;
        min-height: 100vh;
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

</html>
