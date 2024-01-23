
    <title>Modification d'un étudiant</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .styled-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .styled-table th, .styled-table td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        .styled-table th {
            background-color: #f2f2f2;
        }

    </style>
</head>
<body>
    @include('adminNavbar')

    <div class="container">
        @if ($errors->has('constraint'))
<div class="alert alert-danger">{{$errors->first('constraint')}}</div>

@endif
        <table class='styled-table'>
            @if($e)
                <form action="{{ route('updateE', ['etudiant' => $e]) }}" method="post">
                    @csrf
                    @method('put')
                    <tr>
                        <th>NCE</th>
                        <td>
                            <input type="text" value="{{ $e->NCE }}" name="NCE" class="form-control">
                            @error('NCE')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>
                            <input type="text" value="{{ $e->nom }}" name="nom" class="form-control">
                            @error('nom')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th>Prénom</th>
                        <td>
                            <input type="text" value="{{ $e->prenom }}" name="prenom" class="form-control">
                            @error('prenom')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th>Classe</th>
                        <td>
                            <input type="text" value="{{ $e->classe }}" name="classe" class="form-control">
                            @error('classe')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Modifier" class="btn btn-primary">
                            <input type="reset" value="Annuler" class="btn btn-secondary">
                        </td>
                    </tr>
                </form>
            @else
                <div class='no-found'>
                    <h1>Error</h1>
                </div>
            @endif
        </table>
    </div>


