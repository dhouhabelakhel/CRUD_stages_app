
<table class='styled-table'>

@if($e)

<form action="{{route('updateE',['etudiant'=>$e])}}" method="post" >
   @csrf 
   @method('put')
    <input type="text" value="{{$e->NCE}}">
    <input type="text" value="{{$e->nom}}">
    <input type="text" value="{{$e->prenom}}">
    <input type="text" value="{{$e->classe}}">
<input type="submit" value="modifier">
</form>

@else 
<div class='no-found'><h1>Error</h1></div>
@endif
</table>