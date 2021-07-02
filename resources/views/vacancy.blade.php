<div class="bg-blue-600 py-10">
   <div class="text-center">
      <h1 class="tracking-wide text-3xl text-one mb-2 font-bold pt-10">Detalle de la vacante</h1>
   </div>
   <div class="bg-blue-400 rounded py-8 mt-8 mx-20 pb-10 w-50">
            
      <img src="{{ $vacancy->user->avatar }}" class="rounded-full mr-2 h-14 w-14 mb-6 mt-8">
      <h1 class="text-azul text-2xl mb-8">{{ $vacancy->name }}</h1>
      <div class="mb-6">
         <p class="font-bold font-sans ">Experiencia requerida </p>
         {{ $vacancy->experience->experience }}
      </div>
      <div class="mb-6">
         <p class="font-bold font-sans ">Rango salarial </p>
         {{ $vacancy->salary->salary }}
      </div>
      <div class="mb-6">
         <p class="font-bold font-sans">Descripción de la vacante </p>
         {{ $vacancy->description }}
      </div>           
      <div class="mb-6">
         <p class="font-bold font-sans">Tecnologías requeridas </p>
         @foreach($vacancy->tecnologies as $tecnology)
            <a class="inline-block px-3 h-6 bg-blue-600 text-white rounded-full">{{$tecnology->name}}</a>
         @endforeach
      </div>
      <div class="mb-6">
         <p class="font-bold font-sans ">Ubicación </p>
         {{ $vacancy->country->long_description}}
      </div>
      <div class="mb-6">
         <p class="font-bold font-sans ">Fecha límite </p>
         {{ $vacancy->end }}
      </div>
      
      @auth
              
         <button class="bg-blue-600 mx-auto lg:mx-0 bg-three text-white font-sans rounded-lg my-6 py-4 px-8 shadow-lg focus:outline-none">
            Aplicar
         </button>
      @else
         <a href="{{ url('login') }}">
            <button class="bg-blue-600 mx-auto lg:mx-0 bg-three text-white font-sans rounded-lg my-6 py-4 px-8 shadow-lg focus:outline-none">
               Inicia sesión para aplicar.
            </button>
         </a>
      @endauth        

   </div>

</div>
<x-footer />
<link rel="stylesheet" href="{{asset('css/app.css')}}">
