<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Ji5WPI5G+C49M6d5X5jpNQ1ciR" crossorigin="anonymous">

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