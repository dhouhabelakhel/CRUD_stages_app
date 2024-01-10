@include('adminNavbar')
<div>
     @if($soutenance)
   <form action="{{ route('updateS', ['soutenance' => $soutenance]) }}" method="post">

@csrf
@method('put')
<input type="text" value="{{$soutenance->numjury}}" name="numjury">
<input type="date" value="{{$soutenance->datesoutenance}}" name="datesoutenance">
<input type="text" value="{{$soutenance->note}}" name="note">
<select name="student_id" >
    @foreach(\App\Models\Etudiant::all() as $student)
    <option value="{{$student->id}}" {{ $student->id == $soutenance->student_id ? 'selected' : '' }}>{{$student->nom}} {{$student->prenom}}</option>
    @endforeach
</select>
<select name="enseg_id" >
    @foreach(\App\Models\enseignant::all() as $ensg)
    <option value="{{$ensg->id}}" {{ $ensg->id == $soutenance->enseg_id ? 'selected' : '' }}>{{$ensg->nom_ensg}} {{$ensg->prenom_ensg}}</option>
    @endforeach
</select>

<input type="submit" value="modifier">
<input type="reset" value="annuller">
   </form>
   @endif
</div>
