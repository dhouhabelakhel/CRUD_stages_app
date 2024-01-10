<style>
    .styled-table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

.styled-table th {
    background-color: #3498db;
    color: white;
    font-weight: bold;
}

.styled-table td, .styled-table th {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.styled-table tr:nth-child(even) {
    background-color: #f9f9f9;
}

.styled-table a {
    color: #e67e22;
    text-decoration: none;
}
.styled-link {
    color: white; 
    text-decoration: none; 
    padding: 5px 10px; 
    border-radius: 4px; 
    background-color: #3498db; 
    display: inline-block;
}
.no-found {
    background-color: #f9f9f9;
    padding: 20px;
    text-align: center;
    margin: 20px;
}

.no-found h1 {
    color: #3498db;
    font-size: 24px;
}
</style>
@include('adminNavbar')
<a  class='styled-link' href="{{route('add student')}}">Ajouter</a>


@if($etudiant && count($etudiant) > 0)
<table class='styled-table'>
<tr>
<th>NCE</th>
<th>nom</th>
<th>prenom</th>
<th>classe</th>
<th colspan=2>Actions</th>
</tr>
@foreach ($etudiant as $e)
<tr>
<td>{{$e->NCE}}</td>
<td>{{$e->nom}}</td><td>{{$e->prenom}}</td><td>{{$e->classe}}</td>
<td><a href="{{route('update',['etudiant'=>$e])}}">modifier</a></td>
<td><form action="{{route('delete',['etudiant'=>$e])}}" method="post">
    @csrf
    @method('delete')
    <a ><input type="submit" value="supprimer"></a>
</form>

</td></tr>

@endforeach
@else 
<div class='no-found'><h1>Aucun etudiant trouvée pour le moment</h1></div>
@endif
</table>
