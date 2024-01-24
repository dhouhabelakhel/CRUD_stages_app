<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<style>


table {
    width: 50%;

}

td {
    padding: 2%;
}

tr {
    margin: 1%;
}

p {
    font-weight: bold;
}

.logout-form {
    margin-top: 10px;
}


</style>
@include('adminNavbar')
<div class="container-fluid" >
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
                <td colspan="2">
                    <form action="{{ route('logout') }}" method="post" class="logout-form">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Déconnecter" class="btn btn-primary">
                    </form>
                    <a href="{{route('modifierprofil')}}">
                        <input type="button" value="Modifier Profile" class="btn btn-secondary">
                    </a>

                </td>
            </tr>

        </table>
    @endauth
</div>
