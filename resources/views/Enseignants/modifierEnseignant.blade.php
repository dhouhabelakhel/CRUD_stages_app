@include('adminNavbar')
<table class='styled-table'>

@if($ensg)

<form action="{{route('updateEnsg',['enseignant'=>$ensg])}}" method="post" >
   @csrf 
   @method('put')
    <input type="text" value="{{$ensg->matricule}}" name="matricule">
    <input type="text" value="{{$ensg->nom_ensg}}" name="nom_ensg">
    <input type="text" value="{{$ensg->prenom_ensg}}" name="prenom_ensg">
<input type="submit" value="modifier">
<input type="reset" value="annuler">
</form>

@else 
<div class='no-found'><h1>Error</h1></div>
@endif
</table>