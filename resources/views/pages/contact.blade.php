@extends('layouts.main')

@section('pagename', 'Contáctanos')

@section('content')
<form>
    <div>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" placeholder="Nombre" required>
    </div>
    <div>
        <label for="surname">Apellido:</label>
        <input type="text" id="surname" name="surname" placeholder="Apellido" required>
    </div>
    <div>
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" placeholder="Correo Electrónico" required>
    </div>
    <div>
        <label for="nutritionist">Nutricionistas:</label>
        <select name="nutritionist" id="nutritionist">
            <option>Sellecione su nutricionista</option>
            <option value="Cecilia Retamozo">Cecilia Retamozo</option>
            <option value="Paula Frette"></option>
            <option value="Agustina Dalle Rive"></option>
            <option value="Alejandra Rigoni"></option>
            <option value="Florencia López"></option>
        </select>
    </div>
    <div>
        <label for="message">Mensaje:</label>
        <textarea id="message" name="message" placeholder="Contanos cuál es tu consulta" required></textarea>
    </div>
    <div>
        <input class="botton" type="submit" value="Enviar">  
    </div> 
</form>
@endsection
