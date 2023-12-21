<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
</head>
<style>

</style>
<body>

<nav class="navbar">
  <a class="navbar-brand" href="#">Mon Site</a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('adminhome') }}">Accueil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">À propos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link menu-container">Services
        <ul class="menubar">
          <li><a href="{{ route('students') }}">Etudiants</a></li>
          <li><a href="{{ route('addEnsg') }}">Enseignants</a></li>
          <li><a href="{{ route('listeS') }}">Soutenances</a></li>
        </ul>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact</a>
    </li>
  </ul>
</nav>


</body>
</html>
