@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Usuarios</h1>
@stop

@section('content')
    @if(session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Correo electrónico</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $use)
                    <tr>
                        <td>{{$use->name}}</td>
                        <td>{{$use->email}}</td>
                        <td width='10px'>
                            <form action="{{ route('admin.users.index', $use) }}" method="POST">
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
