@extends('app')

@section('content')
    <h1>Agregar Perro</h1>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('dogs.add') }}" method="POST">
        @csrf
        <label for="breed_name">Nombre de la Raza:</label>
        <input type="text" name="breed_name" required>
        <br>

        <label for="size">Tamaño:</label>
        <input type="text" name="size" required>
        <br>

        <label for="hair_color">Color de Pelo:</label>
        <input type="text" name="hair_color" required>
        <br>

        <button type="submit">Guardar</button>
    </form>

    <h1>Listado de Perros</h1>

    <ul>
        @foreach ($dogs as $dog)
            <li>{{ $dog->breed_name }} - {{ $dog->size }} - {{ $dog->hair_color }}</li>
        @endforeach
    </ul>
@endsection
