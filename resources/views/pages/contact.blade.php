@extends('layouts.main')

@section('pagename', 'Contáctanos')

@section('content')
<form>
    <div>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="surname">Apellido:</label>
        <input type="text" id="surname" name="surname">
    </div>
    <div>
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email">
    </div>
</form>
@endsection
