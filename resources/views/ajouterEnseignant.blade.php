<form action="{{route('ajouterEnsg')}}" method="post">
    @csrf
    @method('post')
    <input type="text" name="matricule">
    <input type="text" name="nom_ensg">
    <input type="text" name="prenom_ensg">
    <input type="submit" value ="add">
</form>