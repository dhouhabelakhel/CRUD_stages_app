
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<a href="{{route('addSoutanance')}}">Ajouter</a>
<div class="container">
  <h2>Soutenances</h2>
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Date</th>
        <th>Note</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    @foreach($soutenances as $S)

      <tr>
        <td>{{$S->id}}</td>
        <td>{{$S->datesoutenance}}</td>
        <td> {{$S->note}}</td>
        <td>john@example.com</td>
      </tr>
  
      @endforeach

    </tbody>
  </table>
</div>


</body>
</html>
