<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .data{
display:flex;
flex-direction:row;
justify-content:space-between
    }
    .item{
        margin:10%;
        padding:5%;
        width:25rem;
        background: #ca450e;
    transition: all 0.5s ease;
    border-radius: 8px;
    font-weight: bold;
    font-size: 8em;
    color: #fff;
    padding: 10px;
    display: flex;
    flex-direction:column;
    align-items: center;
    justify-content:center;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }
    .item:hover{
        background:rgb(67, 91, 103) ;
    }
</style>
@include('adminNavbar')
<div>
    <h1><a href="{{route ('addAdmin')}}">Ajouter admin</a> </h1>
</div>
<div class="data">
    <div class="item">
        <i class="fas fa-graduation-cap"></i>
        {{ App\Models\etudiant::count() }}
    </div>
    <div class="item">
        <i class="fas fa-chalkboard-teacher"></i>
        {{ App\Models\enseignant::count() }}
    </div>
</div>
