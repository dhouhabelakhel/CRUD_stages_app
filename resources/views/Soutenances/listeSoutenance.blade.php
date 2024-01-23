

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

@include('adminNavbar')
<a href="{{route('addSoutanance')}}" style="color:black">Ajouter</a>
<div class="container">


  <h2>Soutenances</h2>
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Date</th>
        <th>Note</th>
        <th>Enseiganant</th>
        <th>Etudiant</th>
        <th colspan="2" >Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach($soutenances as $S)

      <tr>
        <td>{{$S->id}}</td>
        <td>{{$S->datesoutenance}}</td>
        <td> {{$S->note}}</td>
        <td>
        {{App\Models\enseignant::find($S->enseg_id)->nom_ensg}}
        {{App\Models\enseignant::find($S->enseg_id)->prenom_ensg}}         </td>
        <td> {{App\Models\etudiant::find($S->student_id)->nom}}
        {{App\Models\etudiant::find($S->student_id)->prenom}}
        </td>
        <td><a href="{{route('updateSoutenance',['soutenance'=> $S])}}" style="color:black">Modifier</a></td>
        <td>
        <form action="{{route('deleteS',['soutenance'=>  $S])}}" method="post">
          @csrf
          @method('delete')

         <a ><input type="submit" value="Supprimer"></a>
          </form></td>
      </tr>

      @endforeach

    </tbody>
  </table>
</div>


