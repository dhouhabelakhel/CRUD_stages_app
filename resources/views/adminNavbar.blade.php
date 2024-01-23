<style>

  nav{
    overflow: hidden;
  display: flex;
    align-items: center;
    font-weight: bold;
    height: 5rem;
  justify-content: space-around;
    background: rgb(67, 91, 103);
    border-top: 3px solid #FFC107;
  color:white;
    inset:0%
  }
 .sideitems{
  display: flex;
  flex-direction:row;
  justify-content:center;
  align-items:center;
 }
 li{
  margin-top:5%;
  padding:10%;
  list-style:none
 }
 a {
  color:white;
  text-decoration: none;
 }
 .services {
    display: none;
    flex-direction: column;
    position: absolute;
    z-index: 1;
    padding-top:1%
  }
   .services a{
    text-decoration: none;
    color: rgb(67, 91, 103);

  }
  .service:hover .services {
    display: flex;
  }
  ul li{
    cursor:pointer;
  }
  img{
    margin-bottom:2%
  }
</style>
<header>
<img src="{{ asset('isetlogo.jpg') }}" alt="Description de l'image">
<div>

 
 
</div>
<nav>
  <div>
<h1>Institut Supérieur des Etudes Technologiques de Charguia</h1>
  </div>
  <div >
    <ul class="sideitems">
      <li><a href="{{route('adminhome')}}">Acceuil</a></li>
      <li class="service"><a >Services</a>
    <ul class="services">
      <li><a href="{{route('students')}}">Etudiants</a></li>
      <li><a href="{{route('teachers')}}">Enseignants</a></li>
      <li><a href="{{route('listeS')}}">Soutenances</a></li>
    </ul>
    </li>
      <li><a >A propos</a></li>
      <li><a href="{{route('profile')}}">Profile</a></li>
    </ul>
  </div>
</nav>

</header>