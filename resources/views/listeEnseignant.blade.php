
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .edit{
        color:black;
    }
</style>
<body>
@include('adminNavbar')
<a href="{{route('addEnsg')}}">Ajouter</a>
<div class="container">

  <h2>Enseignant</h2>
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Matricule</th>
        <th>Nom</th>
        <th>prenom</th>
       
<th colspan="2">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach($ensg as $E)

      <tr>
        <td>{{$E->id}}</td>
        <td>{{$E->matricule}}</td>
        <td> {{$E->nom_ensg}}</td>
        <td>{{$E->prenom_ensg}} </td>
        <td><a href="{{route('updateEnsg',['enseignant'=>$E])}}" class="edit">Modifier</a></td>
        <td>
        <form action="{{route('deleteEnsg',['enseignant'=>$E])}}" method="post">
          @csrf
          @method('delete')
        
         <a ><input type="submit" value="Supprimer"></a> 
          </form></td>
      </tr>
  
      @endforeach

    </tbody>
  </table>
</div>


</body>
</html>
