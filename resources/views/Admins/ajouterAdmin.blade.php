@include('adminNavbar')
<div>
<form action="{{route ('addAdmin')}}" method="post">
        @csrf
        @method('post')
        <label for="name">Email</label>
        <input type="text" name="name" >
        <label for="email ">Email</label>
        <input type="email" name="email" >
        <label for="password">password</label>
        <input type="password" name="password" >
        <input type="submit" value="Ajouter">
    </form>
</div>
