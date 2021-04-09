@extends('adminlte::page')

@section('title', 'Blog admin')

@section('content_header')
    <h1>Lista de categorías</h1>
@stop

@section('content')

    {{-- Alerta de mensaje session --}}
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">

        {{-- Crear nueva categoría --}}
        <div class="card-header">
            <a class="btn btn-secondary" href="{{route('admin.categories.create')}}">Agregar categoría</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                {{-- Cabecera de la tabla --}}
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                {{-- Contenido de la tabla --}}
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.categories.edit', $category)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

