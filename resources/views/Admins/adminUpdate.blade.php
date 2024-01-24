<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <title>Modification d'un admin</title>
    @include('adminNavbar')
    @if ($admin)
    <div class="container mt-4">
        <form action="{{route('modifierAdminInfos',['admin'=>$admin])}}" method="post">
            @csrf
            @method('put')
    <div class="form-group">
    <label for="name">
        Nom
    </label>
    <input type="text" name="name" class="form-control" value="{{$admin->name}}" >
    @error('name')
    <small class="text-danger">
{{$message}}
    </small>

    @enderror
    </div>
    <div class="form-group">
        <label for="email">
           Email
        </label>
        <input type="text" name="email" class="form-control" value="{{$admin->email}}">
        @error('email')
        <small class="text-danger">
    {{$message}}
        </small>
        @enderror
        </div>
        <div class="form-group">
            <input type="submit" value="Modifier" class="btn btn-primary">
            <input type="reset" value="Annuler" class="btn btn-secondary">
        </div>
    </form>
    </div>
    @endif

