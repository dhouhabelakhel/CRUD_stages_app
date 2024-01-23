<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<title>Modification d'un enseignant</title>

<style>
    .styled-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .styled-table th, .styled-table td {
        padding: 10px;
        border: 1px solid #ddd;
    }

    .styled-table th {
        background-color: #f2f2f2;
    }

</style>
@include('adminNavbar')
<div class="container">
    @if ($errors->has('constraint'))
<div class="alert alert-danger">
    {{$errors->first('constraint')}}
</div>
    @endif
<table class='styled-table'>

@if($ensg)

<form action="{{route('updateEnsg',['enseignant'=>$ensg])}}" method="post" >
   @csrf
   @method('put')
   <tr>
    <th>Matricule</th>
    <td>
    <input type="text" value="{{$ensg->matricule}}" name="matricule" class="form-control">
    @error('matricule')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</td>
   </tr>
<tr>
    <th>Nom</th>
    <td>
        <input type="text" value="{{$ensg->nom_ensg}}" name="nom_ensg" class="form-control">
@error('nom_ensg')
<small class="text-danger">{{ $message }}</small>

@enderror
    </td>
</tr>
<tr>
    <th>Prenom</th>
    <td>
    <input type="text" value="{{$ensg->prenom_ensg}}" name="prenom_ensg" class="form-control">
    @error('prenom_ensg')
<small class="text-danger">{{$message}}</small>
    @enderror
</td>
</tr>
<tr>
    <td colspan="2">
<input type="submit" value="modifier" class="btn btn-primary">
<input type="reset" value="annuler" class="btn btn-secondary">
    </td>
</tr>
</form>
@else
<div class='no-found'>
    <h1>Error</h1>
</div>
@endif


</table>
</div >
