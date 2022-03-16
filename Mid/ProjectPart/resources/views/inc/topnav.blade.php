

<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
                                                                
<div class="container-fluid">
  

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">


        <li class="nav-item">
          <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('help')}}">Help</a>
        </li>

         <li class="nav-item">
          <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
        </li> 

        <li class="nav-item">
          <a class="nav-link" href="{{route('addproduct')}}">Add Product</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="{{route('productlist')}}">Product List</a>
        </li>

     
      </ul>
      
      {{-- <form class="d-flex">
        <input class="form-control me-2" type="text" size="60" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form> --}}

    </div>
  </div>
</nav>



