<h1>Gestion des spécialités</h1>

<p>.....</p>

<h2>Liste spécialités</h2>
<ul>
@if(isset($listeSpecialites) && $listeSpecialites != null)
@foreach($listeSpecialites as $spec)
	<li>Id: {{$spec['id']}} Nom: {{$spec['nom']}}</li>
@endforeach
@else
	<li>Pas de spécialités enregistrées!</li>
@endif
</ul>