<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<title>Modification d'une soutenance</title>
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
<div class="alert alert-danger">{{$errors->first('constraint')}}</div>
        @endif
        <table class='styled-table'>
     @if($soutenance)



   <form action="{{ route('updateS', ['soutenance' => $soutenance]) }}" method="post">

@csrf
@method('put')
<tr>
    <th>Num jury</th>
    <td>
        <input type="text" value="{{$soutenance->numjury}}" name="numjury" class="form-control">
@error('numjury')
<small class="text-danger">
    {{$message}}
</small>

@enderror
    </td>
</tr>
<tr>
    <th> Date soutenance</th>
    <td>
        <input type="date" value="{{$soutenance->datesoutenance}}" name="datesoutenance" class="form-control">
@error('datesoutenance')
<small class="text-danger">
    {{$message}}
</small>
@enderror
    </td>
</tr>
<tr>
    <th>Note</th>
    <td>
        <input type="text" value="{{$soutenance->note}}" name="note" class="form-control">
        @error('note')
        <small class="text-danger">
            {{$message}}
        </small>
        @enderror</td>
</tr>
<tr>
    <th>Etudiant</th>
    <td>
        <select name="student_id" class="form-control" >
            <option ></option>
            @foreach(\App\Models\Etudiant::all() as $student)
            <option value="{{$student->id}}" {{ $student->id == $soutenance->student_id ? 'selected' : '' }}>{{$student->nom}} {{$student->prenom}}</option>
            @endforeach
        </select>
        @error('student_id')
        <small class="text-danger">
            {{$message}}
        </small>

        @enderror
    </td>
</tr>
<tr>
    <th>Enseignant</th>
    <td>
        <select name="enseg_id" class="form-control" >
            <option value=""></option>
            @foreach(\App\Models\enseignant::all() as $ensg)
            <option value="{{$ensg->id}}" {{ $ensg->id == $soutenance->enseg_id ? 'selected' : '' }}>{{$ensg->nom_ensg}} {{$ensg->prenom_ensg}}</option>
            @endforeach
        </select>
        @error('enseg_id')
        <small class="text-danger">
            {{$message}}
        </small>

        @enderror
    </td>
</tr>
<tr>
    <td colspan="2">

        <input type="submit" value="modifier" class="btn btn-primary">
        <input type="reset" value="anuller" class="btn btn-secondary">
    </td>
</tr>

   </form>
   @endif
</table>
</div>
