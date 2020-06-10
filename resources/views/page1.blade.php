@extends('layout')

@section('titre')
Site HOC - Page1
@endsection

@section('contenu')
<h1>Page1</h1>

<?php 
  $local = 1;
?>

<p>Local = {{ $local }}</p>
<p>Var 1 = {{ $var1 }}</p>
<p>Var 2 = {{ $var2 }}</p>

@if(isset($listeJours) && $listeJours != null)
	
	@foreach($listeJours as $jour)
		<li>{{ $jour }}</li>
	@endforeach
	
@else
	
	<p><em>La liste est vide !</em></p>
	
@endif

@for ($i = 0; $i < 10; $i++)
    <p>La valeur de i est {{ $i }}</p>
@endfor

@endsection