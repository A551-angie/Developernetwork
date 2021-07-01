@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

    @if (Auth::user()->hasRole('Developers'))
       
       <div class="text-center">
        <h1 class="text-3xl text-gray-700 mb-2 uppercase">Bienvenido</h1>
       </div>
       
       <div class="container-fluid">
        <livewire:vacancies-list>
      </div>


    @elseif (Auth::user()->hasRole('Recruiter'))
       <div class="text-center">
        <h1 class="text-3xl text-gray-700 mb-2 uppercase ">Bienvenido</h1>
       </div>
       <div class="container-fluid">
        <livewire:vacancies-list>
      </div>

        

        {{-- <footer class="w-full ">
            <x-footer />
        </footer> --}}
    
    @elseif (Auth::user()->hasRole('Admin'))
        <div class="text-center">
            <h1 class="text-3xl text-gray-700 mb-2 uppercase">Bienvenido administrador</h1>
        </div>
        <livewire:vacancies-list>

        {{-- <livewire:vacancie-list> --}}
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
@stop

@section('js')
    <script>
    console.log('Hi!');
    </script>
@stop