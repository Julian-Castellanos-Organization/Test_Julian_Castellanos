@extends('Template')
@section('menu')
<h1>Registro de Estudiantes Kuepa</h1>
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
<input type="text" name= "TxtNombre" placeholder="Nombre" class="form-control mb-2" value="{{old('TxtNombre')}}">
<input type="text" name= "TxtApellidos" placeholder="Apellidos" class="form-control mb-2"value="{{old('TxtApellidos')}}">
<input type="text" name= "TxtEmail" placeholder="Email" class="form-control mb-2"value="{{old('TxtEmail')}}">
<input type="text" name= "TxtTelefono" placeholder="Telefono" class="form-control mb-2"value="{{old('TxtTelefono')}}">
<div class="form-group">
    <label for="exampleFormControlSelect1">Seleccionar Programa</label>
    <select class="form-control" name = "CntrolPrograma" id="exampleFormControlSelect1">
      <option>INGLES</option>
      <option>BACHILLERATO</option>
      <option>PRE ICFES</option>
      <option>OTRO</option>
    </select>
  </div>
<br>
<button class="btn btn-primary btn-block" type ="submit">Agregar Estudiante</button>
<br>
<br>
</form>
@endsection