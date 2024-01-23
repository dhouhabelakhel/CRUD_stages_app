<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <title>Création d'un étudiant</title>


    @include('adminNavbar')

    <div class="container mt-4">
        <h1>Création d'un étudiant</h1>
        @if ($errors->has('constraint'))
        <div class="alert alert-danger">{{$errors->first('constraint')}}</div>
        @endif
        <form action="{{ route('add') }}" method="post">
            @csrf
            @method('post')

            <div class="form-group">
                <label for="NCE">NCE :</label>
                <input type="text" class="form-control" id="NCE" name="NCE" value="{{old('NCE')}}">
                @error('NCE')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

            </div>

            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" value='{{old('nom')}}'>
                @error('nom')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value='{{old('prenom')}}'>
                @error('prenom')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="classe">Classe :</label>
                <input type="text" class="form-control" id="classe" name="classe" value ="{{old('classe')}}">
                @error('classe')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>



