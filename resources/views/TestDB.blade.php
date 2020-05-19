@extends('Template')
@section('menu')
<h1>Test MYSQL DB</h1>
@foreach($users as $item)
<a href="{{route('TestDB',$item)}}") class="h4 text-danger">{{$item}}</a><br>
@endforeach
@if(!empty($nombre))
<br>
@switch($nombre)
@case ($nombre=='Pepito1')
<h2>El nombre es: {{$nombre}}:</h2>
<p>Bienvenido {{$nombre}} esto es una prueba de Julian Castellanos y el nombre es {{$nombre}}*********************************************************************</p>
@break
@case ($nombre=='Pepito2')
<h2>El nombre es: {{$nombre}}:</h2>
<p>Bienvenido {{$nombre}} esto es una prueba de Julian Castellanos y el nombre es {{$nombre}}---------------------------------------------------------------------------</p>
@break
@case ($nombre=='Pepito3')
<h2>El nombre es: {{$nombre}}:</h2>
<p>Bienvenido {{$nombre}} esto es una prueba de Julian Castellanos y el nombre es {{$nombre}}////////////////////////////////////////////////////////////////////////////</p>
@break


@endswitch
@endif
<HTMl:5>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID Estudiante</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">EMAIL</th>
      <th scope="col">Telefono</th>
      <th scope="col">Programa</th>
    </tr>
  </thead>
  <tbody>
  @foreach($Estudiantes as $Estudiante)
    <tr>
      <th scope="row">{{$Estudiante->id}}</th>
      <td>{{$Estudiante->Nombre}}</td>
      <td>{{$Estudiante->Apellidos}}</td>
      <td>{{$Estudiante->Email}}</td>
      <td>{{$Estudiante->Telefono}}</td>
      <td>{{$Estudiante->Programa}}</td>
    </tr>
 @endforeach()
  </tbody>
</table>
</HTMl:5>
@endsection