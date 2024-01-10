<div class="login_container">
    <form action="{{route ('auth')}}" method="post">
        @csrf
        @method('post')
        <label for="login ">Email</label>
        <input type="email" name="email" >
        @error("email")
        {{$message}}
        @enderror
        <label for="password"></label>
        <input type="password" name="password" >
        @error("password")
        {{$message}}
        @enderror
        <input type="submit" value="Se connecter">
    </form>

</div>