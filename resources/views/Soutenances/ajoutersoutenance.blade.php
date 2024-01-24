<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<title>Ajout Soutenance</title>
@include('adminNavbar')
<div class="container mt-4">
    <h1>Ajout Soutenance</h1>
    @if ($errors->has('constraint'))
    <div class="alert alert-danger">
        {{$errors->first('constraint')}}
    </div>

    @endif
   <form action="{{route('addS')}} "method="post">
    @csrf
    @method('post')
    <div class="form-group">
        <label for="numjury">Num Jury</label>
        <input type="number" name="numjury" class="form-control">
        @error('numjury')
        <small class="text-danger">
{{$message}}
        </small>
        @enderror

    </div>
    <div class="form-group">
        <label for="datesoutenance">Date Soutenance</label>
        <input type="date" name="datesoutenance" class="form-control">
        @error('datesoutenance')
        <small class="text-danger">
{{$message}}
        </small>
        @enderror
    </div>
    <div class="form-group">
        <label for="note">Note</label>
    <input type="text" name="note" class="form-control">
    @error('note')
    <small class="text-danger">
{{$message}}
    </small>
    @enderror
    </div>
    <div class="form-group">
        <label for="enseg_id">Enseignant</label>
    <select name="enseg_id" class="form-control">
        <option></option>
        @foreach($ensg as $ens)
        <option  value="{{$ens->id}}">{{$ens->nom_ensg}} {{$ens->prenom_ensg}}</option>
        @endforeach
    </select>
    @error('enseg_id')
    <small class="text-danger">
        {{$message}}
    </small>

    @enderror
</div>
<div class="form-group">
    <label for="student_id">Etudiant</label>
    <select name="student_id" class="form-control">
        <option value="" ></option>
        @foreach($etudiants as $e)
        <option value="{{$e->id}}">{{$e->nom}} {{$e->prenom}}</option>
        @endforeach
    </select>
    @error('student_id')
    <small class="text-danger">
        {{$message}}
    </small>

    @enderror
</div>
   <input type="submit" value="ajouter" class="btn btn-primary">
   </form>
</div>
