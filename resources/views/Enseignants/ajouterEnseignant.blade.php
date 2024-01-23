<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<title>Ajout d'un enseignant</title>
@include('adminNavbar')

<div class="container mt-4">
    <h1>Création d'un enseignant</h1>
    @if ($errors->has('constraint'))
<div class="alert alert-danger">{{$errors->first('constraint')}}</div>
    @endif
<form action="{{route('ajouterEnsg')}}" method="post">
    @csrf
    @method('post')
    <div class="form-group">
        <label for="matricule">Matricule</label>
    <input type="text" name="matricule" class="form-control" value="{{old('matricule')}}">
    @error('matricule')
    <small class="text-danger">{{$message}}</small>
    @enderror
    </div>
    <div class="form-group">
    <label for="nom_ensg">Nom</label>
    <input type="text" name="nom_ensg" class="form-control" value="{{old('nom_ensg')}}">
    @error('nom_ensg')
<small class="text-danger">{{$message}}</small>
    @enderror
    </div>
    <div class="form-group">
    <label for="prenom_ensg">Prenom</label>
    <input type="text" name="prenom_ensg" class="form-control" value="{{old('prenom_ensg')}}">
    @error('prenom_ensg')
<small class="text-danger">{{$message}}</small>
    @enderror
</div>
    <input type="submit" value ="add" class="btn btn-primary">

</form>
