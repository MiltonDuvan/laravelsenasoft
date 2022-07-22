@extends('adminlte::page')

@section('title', 'Formulario para sitios')

@section('content_header')
    <h1>Insertar servicio</h1>
@stop

@section('content')
    <form action="{{ route('service.store') }}" enctype="multipart/form-data" method="post">

        @csrf
        <section class="container-fluid">
            <div class="col-md-6 col-lg-6 col-sm-12">
                <label class="text-uppercase">Nuevo servicio</label><br>
                <input type="text" placeholder="Ingrese el servicio" class="form-control" name="servicio">
                <small class="text-danger">{{ $errors->first('servicio') }}</small>
            </div><br>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label class="text-uppercase">Precio del Servicio</label><br>
                <input type="number" placeholder="precio del servicio" class="form-control" name="precio">
                <small class="text-danger">{{ $errors->first('precio') }}</small>
            </div><br>

            <div class="col-md-6 col-lg-6 col-sm-12 p-3">
                <label class="text-uppercase">Fotografia</label><br>
                <span class="btn btn-secondary btn-file">
                    <i class="far fa-images"></i> <input accept="image/*" onchange="vistaPrevia(event)" type="file">
                </span>
                <input type="text" placeholder="Ingrese link de la foto" class="form-control" name="foto">
                <small class="text-danger">{{ $errors->first('foto') }}</small>
            </div><br>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label class="text-uppercase">Seleccione Sitio</label><br>

                <select name="sitio_id" class="form-control">
                    <option selected="true" disabled="disable">Seleccione sitio </option>
                    @foreach ($sitios as $sitio)
                        <option value="{{ $sitio->id }}">{{ $sitio->municipio}}</option>
                    @endforeach
                </select>
                <small class="text-danger">{{ $errors->first('sitio') }}</small>
            </div><br>

            <div class="imagen col-md-6 col-lg-6 col-sm-12">
                <label class="text-uppercase" for="">Vista previa</label><br>
                <img src="" id="img-foto" alt="">
            </div>

            <div class=" col-md-12 mt-4 text-center">
                <button type="submit" class="btn btn-secondary">Guardar</button>


                @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" arialabel="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
        </section>
       
    </form>



@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style type="text/css">
        .btn-file {
            position: relative;
            overflow: hidden;
            width: 100px;
        }

        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }

        .btn-file i {
            font-size: 23px;
        }

        .imagen img {
            max-width: 100%;
            max-height: 50vh;
        }
    </style>
@stop

@section('js')
    <script>
        function ocultarAlerta() {
            document.querySelector(".alert").style.display = 'none';
        }
        setTimeout(ocultarAlerta, 3000);

        // vista previa de la imagen

        let vistaPrevia = () => {
            let leerImg = new FileReader();
            let id_img = document.getElementById('img-foto');

            leerImg.onload = () => {
                if (leerImg.readyState == 2) {
                    id_img.src = leerImg.result;
                }
            }

            leerImg.readAsDataURL(event.target.files[0])
        }
    </script>
@stop
