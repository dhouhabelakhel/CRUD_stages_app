<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

@include('adminNavbar')
<div class="container mt-4">
    @if ($errors->has('constraint'))
<div class="alert alert-danger">
    {{$errors->first('constraint')}}
</div>
    @endif
<form action="{{route('modifierUser')}}" method="post">
    @method('put')
    @csrf
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" class="form-control">
    @error('name')
<small class="text-danger">
    {{$message}}
</small>
    @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" class="form-control">
        @error('email')
        <small class="text-danger">
            {{$message}}
        </small>
            @enderror
    </div>
    <div class="form-group">
        <label for="password">Enter votre mot de passe</label>
        <input type="password" name="password" class="form-control" >
        @error('password')
        <small class="text-danger">
            {{$message}}
        </small>
            @enderror
    </div>
    <div class="form-group">

        <input type="submit" value="Modifier" class="btn btn-primary">

    </div>
</form>
</div>
