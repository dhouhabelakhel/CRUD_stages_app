<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

@include('adminNavbar')
<div class="container mt-4">
<form action="{{route ('addAdmin')}}" method="post">
        @csrf
        @method('post')
        <div class="form-group">
            <label for="name">Email</label>
            <input type="text" name="name" class="form-control" >
        </div>
<div class="form-group">
    <label for="email ">Email</label>
    <input type="email" name="email" class="form-control" >
</div>
<div class="form-group">
    <label for="password">password</label>
        <input type="password" name="password" class="form-control">
</div>

        <input type="submit" value="Ajouter" class="btn btn-primary">
    </form>
</div>
