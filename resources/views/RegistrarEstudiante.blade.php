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
<input type="text" name= "TxtNombre" placeholder="Nombre" class="form-control mb-2">
<input type="text" name= "TxtApellidos" placeholder="Apellidos" class="form-control mb-2">
<input type="text" name= "TxtEmail" placeholder="Email" class="form-control mb-2">
<input type="text" name= "TxtTelefono" placeholder="Telefono" class="form-control mb-2">
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