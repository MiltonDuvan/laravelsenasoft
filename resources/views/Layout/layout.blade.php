@extends('adminlte::page')

@section('title', 'Formulario para sitios')

@section('content_header')
    <h1>Registro Sitios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="" enctype="multipart/form-data" method="Post"></form>
            @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('message')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        
                @endif
            
        </div>
        {{-- <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">
            <label for="">Municipio:</label>
            <input type="text" placeholder="Ingrese el nombre del
            municipio..." class="form-control" name="municipio">
            <small class="text-danger">{{$errors-
            >first('municipio')}}</small>
            </div>
    </div> --}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop