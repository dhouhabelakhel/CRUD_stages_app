@include('adminNavbar')
<table class='styled-table'>

@if($e)

<form action="{{route('updateE',['etudiant'=>$e])}}" method="post" >
   @csrf 
   @method('put')
    <input type="text" value="{{$e->NCE}}" name="NCE">
    @error('NCE')
            {{$message}}
            @enderror
    <input type="text" value="{{$e->nom}}" name="nom">
    @error('nom')
            {{$message}}
            @enderror
    <input type="text" value="{{$e->prenom}}" name="prenom">
    @error('prenom')
        {{$message}} 
            @enderror
    <input type="text" value="{{$e->classe}}" name="classe">
    @error('classe')
            {{$message}}
            @enderror
<input type="submit" value="modifier">
<input type="reset" value="annuler">
</form>

@else 
<div class='no-found'><h1>Error</h1></div>
@endif
</table>