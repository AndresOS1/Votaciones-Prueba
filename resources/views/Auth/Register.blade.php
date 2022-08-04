<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{!! asset('public/css/style.css') !!}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="fondo">
    @include('sweetalert::alert')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card back1 text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Registrar Capitan</h2>
                                <form action="" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf


                                    <div class="form-outline form-white mb-4">
                                        <input type="file" class="form-control form-control-lg" name="avatar" required/>
                                        <label class="form-label" for="typeEmailX">Avatar</label>
                                    </div>
                                    <div class="form-outline form-white mb-4 mt-5">
                                        <input type="text" id="typeEmailX" class="form-control form-control-lg"
                                            name="nombres" required />
                                        <label class="form-label" for="typeEmailX">Nombres</label>
                                    </div>

                                    <div class="form-outline form-white mb-4 mt-5">
                                        <input type="text" id="typeEmailX" class="form-control form-control-lg"
                                            name="apellidos" required />
                                        <label class="form-label" for="typeEmailX">Apellidos</label>
                                    </div>
                                
                                    <div class="form-outline form-white mb-4 mt-5">
                                        <input type="text" id="typeEmailX" class="form-control form-control-lg"
                                            name="userName" required />
                                        <label class="form-label" for="typeEmailX">UserName</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="typePasswordX" class="form-control form-control-lg"
                                            name="password" required/>
                                        <label class="form-label" for="typePasswordX">Contraseña</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <a id="viewPassword">Mostrar contraseña</a>
                                    </div>

                                    
                                    <div class="row justify-content-center">
                                        <div class="col-sm-8 mt-2 mb-4">
                                            <button type="submit" name="button"
                                                class="btn btn1  w-100">Registrar</button>
                                        </div>
                                    </div>

                                    <div class="form-outline  form-white mb-4">
                                        <a class="ini" id="inicia" href="{{route('verLogin')}}">Ya tienes cuenta? Inicia Sesion!</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

<style>
    .back1 {
        background-color: black;
    }

    .btn1 {
        background-color: #DC5716;
        color: #FFFF
    }
    .btn1:hover {
        color: #FFFF
    }


    .fondo {
        background-image: url('https://fondosmil.com/fondo/54336.png')
    }
    #viewPassword {
        cursor: pointer;
    }

    #inicia{
        cursor: pointer;
    }

    .ini{
        text-decoration: none;
        color: #FFFF
    }
    .ini:hover{
        color: #DC5716;
    }


    .fondo {
        background-image: url('https://fondosmil.com/fondo/54336.png')
    }
</style>

<script>
    let password = document.getElementById('typePasswordX');
    let viewPassword = document.getElementById('viewPassword');
    let click = false;

    viewPassword.addEventListener('click', (e) => {
        if (!click) {
            password.type = 'text'
            click = true
        } else if (click) {
            password.type = 'password'
            click = false
        }
    })
</script>
</html>