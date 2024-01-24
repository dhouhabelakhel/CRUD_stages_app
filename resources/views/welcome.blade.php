<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">
    <h1 style="text-align: center">Se Connecter</h1>
    <form action="{{route ('auth')}}" method="post" >
        @csrf
        @method('post')
        <div class="form-group">
        <label for="login ">Email</label>
        <input type="email" name="email" class="form-control" >
        @error("email")
        <small class="text-danger">
                   {{$message}}
        </small>
        @enderror
    </div>
        <div class="form-group">


        <label for="password">Password</label>
        <input type="password" name="password" class="form-control">
        @error("password")
        <small class="text-danger">
                   {{$message}}
        </small>
                @enderror
            </div>
        <input type="submit" value="Se connecter" class="btn btn-primary" style="margin-top: 5%; margin-left:40%">
    </form>
</div>

