@extends('adminlte::page')

@section('title', 'Blog admin')

@section('content_header')
    <h1>Editar detalle de etiqueta</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($tag, ['route'=>['admin.tags.update', $tag],'method'=>'put']) !!}

                @include('admin.tags.partials.form')

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
