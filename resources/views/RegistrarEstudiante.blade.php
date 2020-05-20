@extends('Template')
@section('menu')
<font color="#f2652f">La educación que necesitas para mejorar habilidades que te permitan <br>construir tu camino
    profesional y laboral, pero lo más importante: <br>Cumplir tus sueños</font>
<br>¡Regístrate ahora o llámanos al 2120282!
<h1>INSCRÍBETE AHORA</h1>
@if (session('alerta'))
<div class="alert alert-success">
    {{session('alerta')}}
</div>
@endif
<form action="{{route('Save.Student')}}" method="POST">
    @csrf
    @error('TxtNombre')
    <div class="alert alert-danger">
        El Nombre es obligatorio
    </div>
    @enderror
    @error('TxtApellidos')
    <div class="alert alert-danger">
        El Apellido es obligatorio
    </div>
    @enderror
    @error('TxtEmail')
    <div class="alert alert-danger">
        Debe ingresar un email
    </div>
    @enderror
    @error('TxtTelefono')
    <div class="alert alert-danger">
        Debe ingresar un número de Telefono
    </div>
    @enderror
    @error('CntrolPrograma')
    <div class="alert alert-danger">
        Debe seleccionar un programa a cursar
    </div>
    @enderror
    <input type="text" name="TxtNombre" placeholder="Nombre" class="form-control mb-2" value="{{old('TxtNombre')}}">
    <input type="text" name="TxtApellidos" placeholder="Apellidos" class="form-control mb-2"
        value="{{old('TxtApellidos')}}">
    <input type="text" name="TxtEmail" placeholder="Email" class="form-control mb-2" value="{{old('TxtEmail')}}">
    <input type="text" name="TxtTelefono" placeholder="Telefono" class="form-control mb-2"
        value="{{old('TxtTelefono')}}">
    <div class="form-group">
        <label for="exampleFormControlSelect1">Quiero estudiar</label>
        <select class="form-control" name="CntrolPrograma" id="exampleFormControlSelect1">
            <option>Ingles</option>
            <option>Bachillerato</option>
            <option>Preicfes</option>
            <option>Otro</option>
        </select>
    </div>
    <br>
    <button class="btn btn-primary btn-block" type="submit">Me quiero inscribir</button>
    <br>
    <br>
</form>
@endsection