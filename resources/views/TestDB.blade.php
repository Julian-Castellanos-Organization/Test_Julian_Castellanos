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

@endsection