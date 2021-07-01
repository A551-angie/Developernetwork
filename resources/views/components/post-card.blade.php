<div>
    <article class=" bg-blue-100 bg-opacity-25 mb-5 bg-teal-100 border border-gray-800 rounded shadow-md mt-4 ">
        <div class="bg-two shadow-lg rounded-lg text-center px-4 py-6">
            <img src="{{ $vacancy->user->avatar }}" class="rounded-full mx-auto h-16 w-16">
            <h2 class="tracking-wide text-azul text-lg">{{ $vacancy->name }}</h2>
            <p class="font-bold">Experiencia</p>
            <p>{{ $vacancy->experience->experience }}</p>
            <p class="font-bold">Sueldo</p>
            <p>{{ $vacancy->salary->salary }}</p>
            <p class="font-bold">país</p>
            <p>{{ $vacancy->country->long_description }}</p>
            <p class="font-bold">Fecha fin de la vacante</p>
            <p>{{ $vacancy->end }}</p>
        </a>
    </div>
        <button
            class='mx-auto bg-blue-800 text-white rounded ml-auto flex items-center gap-1 sm:text-lg  border border-gray-300 px-3 py-1  hover:bg-blue-600 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500 mb-2'>
            <a href="{{ route ('vacancy', $vacancy->id) }}">
                <span>Ver vacante</span>
            </a>
        </button>

    </article>
  
</div>
        
    


<link rel="stylesheet" href="{{asset('css/app.css')}}">