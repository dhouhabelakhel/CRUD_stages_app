<div class="login_container">
    <form action="{{route ('auth')}}" method="post">
        @csrf
        @method('post')
        <label for="login ">Email</label>
        <input type="email" name="login" >
        <label for="password"></label>
        <input type="password" name="password" >
        <input type="submit" value="Se connecter">
    </form>

</div>