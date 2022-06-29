@extends('adminlte::page')

@section('title', 'Formulario para sitios')

@section('content_header')
    <h1>Turismo Popayan</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
           
                
           
            <table class="table table-dark">
               
                <thead>
                  ...
                </thead>
                <tbody>
                    @foreach ($sites as $site)
                  <th scope="row">{{$site->id}}</th>

                    <td>{{$site->municipio}}</td>
                    <td>{{$site->lugar}}</td>
                    <td>{{$site->nombre}}</td>
                    <td>{{$site->direccion}}</td>
                    <td>{{$site->telefono}}</td>
                    <td>{{$site->correo}}</td>
                    <td>
                        <div class="imagen d-flex flex-wrap " >
                            <img class="img-fluid" src="{{asset('img/'.$site->foto)}}"alt="" width="100px">
                        </div>
                    </td>
                    di
                    <td><div class="d-flex flex-wrap" style="font-size:1rem; width:400px">{{$site->descripcion}}</div></td>
                    <td>{{$site->tipo_actividad}}</td>
                    <td>{{$site->horario_atencion}}</td>
                    <td>{{$site->estado}}</td>

                  </tr>
                  @endforeach
                </tbody>
              </table>
            {{$sites->links()}}
        </div>
     
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop