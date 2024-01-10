@include('adminNavbar')
<div>
   <form action="{{route('addS')}} "method="post">
    @csrf
    @method('post')
    <input type="number" name="numjury" id="">
    <input type="date" name="datesoutenance">
    <input type="text" name="note">
    <select name="enseg_id" id="">
        @foreach($ensg as $ens)
        <option  value="{{$ens->id}}">{{$ens->nom_ensg}} {{$ens->prenom_ensg}}</option>
        @endforeach
    </select>
    <select name="student_id" id="">
        @foreach($etudiants as $e)
        <option value="{{$e->id}}">{{$e->nom}} {{$e->prenom}}</option>
        @endforeach
    </select>
   <input type="submit" value="ajouter">
   </form>
</div>
