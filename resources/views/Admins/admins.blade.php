<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

@include('adminNavbar')


<a style="color: black" href="{{route('addAdmin')}}"  >Ajouter</a>

<div class="container" >
    @if($admins)
        <table class='table'>
            <thead>
                <th>Id</th>
                <th>Nom</th>
                <th>Email</th>
                <th colspan=2>Actions</th>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
                    <tr>
                        <td>{{ $admin->id }}</td>

                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td><a style="color: black" href="{{route('modifierAdmin',["admin"=>$admin])}}">modifier</a></td>
                        <td>
                            <form  method="post" action="{{route('deleteAdmin',['admin'=>$admin])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="supprimer">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @endif
