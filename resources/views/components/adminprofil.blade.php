
<style>
body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
}

.container {
    background-color: #f5f5f5;
    padding: 10%;
    border: 1px solid #ccc;
    border-radius: 2%;
    margin-top: 10%;
    width: 50%;
    margin-left: 17%;
}

table {
    width: 100%;
}

td {
    padding: 5%;
}

tr {
    margin: 2%;
}

p {
    font-weight: bold;
}

.logout-form {
    margin-top: 10px;
}

.logout-btn {
    background-color: #dc3545;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 3px;
    height:150%;
    width:150%;
    margin-left:60%;
}

</style>
@include('adminNavbar')
<div class="container" >
    @auth
         <table>
            <tr>
                <td><h1> Admin  :</h1></td>
                <td><p>{{ \Illuminate\Support\Facades\Auth::user()->name }}</p></td>
            </tr>
            <tr>
                <td><h1>Email :</h1></td>
                <td><p>{{ \Illuminate\Support\Facades\Auth::user()->email }}</p></td>
            </tr>
            <tr>
                <td>
                    <form action="{{ route('logout') }}" method="post" class="logout-form">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Déconnecter" class="logout-btn">
                    </form>
                </td>
            </tr>
        </table>
    @endauth
</div>
