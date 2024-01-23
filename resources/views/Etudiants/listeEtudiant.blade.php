<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<style>
    .edit {
        color: black;
    }

    .no-found {
        background-color: #f9f9f9;
        padding: 20px;
        text-align: center;
        margin: 20px;
    }

    .no-found h1 {
        color: #3498db;
        font-size: 24px;
    }
</style>

@include('adminNavbar')

<a style="color: black" href="{{ route('add student') }}">Ajouter</a>

<div class="container" >
    @if($etudiant && count($etudiant) > 0)
        <table class='table'>
            <thead>
                <th>NCE</th>
                <th>nom</th>
                <th>prenom</th>
                <th>classe</th>
                <th colspan=2>Actions</th>
            </thead>
            <tbody>
                @foreach ($etudiant as $e)
                    <tr>
                        <td>{{ $e->NCE }}</td>
                        <td>{{ $e->nom }}</td>
                        <td>{{ $e->prenom }}</td>
                        <td>{{ $e->classe }}</td>
                        <td><a href="{{ route('update',['etudiant'=>$e]) }}" class="edit">modifier</a></td>
                        <td>
                            <form action="{{ route('delete',['etudiant'=>$e]) }}" method="post">
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
    @else
        <div class='no-found'>
            <h1>Aucun étudiant trouvé pour le moment</h1>
        </div>
    @endif
