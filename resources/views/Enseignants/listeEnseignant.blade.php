
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<style>
    .edit{
        color:black;
    }
</style>

@include('adminNavbar')

<div >
<a href="{{route('addEnsg')}}" style="color:black">Ajouter</a>
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
</div>


