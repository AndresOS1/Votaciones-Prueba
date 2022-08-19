@extends('layouts.dashboard')
@section('content')
<div class="container"style="height: 150vh;">
    <div class="container" >
        <div class="row">
            <div class="col-12 mt-5">
                
                <h1 class="text-center">Estadisticas</h1>
                <table cellspacing="0"class="table table-bordered table-responsive display compact no-wrap mt-2">
                    <div class="col-12 d-flex justify-content-end">
                        <a href="{{route('verestadisticas')}}"><button class="btn btn-primary btn1 ">Ver PDF</button> </a>
                        <a href="{{route('jasper')}}"><button class="btn btn-primary btn1 ">Descargar PDF</button> </a>
                      </div>
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
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <h1 class="text-center mt-2">Votantes inscritos por Lider</h1>
    <div class="chart-container barras"style="">
        <canvas id="myChart"></canvas>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.2/chart.min.js"></script>


<div class="container d-flex h-50">
    <script>
        
        const cData = JSON.parse(`<?php echo $data; ?>`);
        console.log(cData);

        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels:cData.label,
                datasets: [{
                    label: '#VotantesRegistrados',
                    data: cData.data,
                    backgroundColor: [
                        'rgba(255, 99, 132)',
                        'rgba(54, 162, 235)',
                        'rgba(255, 206, 86)',
                        'rgba(75, 192, 192)',
                        'rgba(153, 102, 255)',
                        'rgba(255, 159, 64)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    }
                }
            }
        });
  
</script>
</div>
</div>
@endsection
