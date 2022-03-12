

<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
                                                                
<div class="container-fluid">
  
    <a class="navbar-brand" href="javascript:void(0)">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('productList')}}">Product List</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('productCreate')}}">Add Product</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('help')}}">Help</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('profile')}}">Profile</a>
        </li>


      </ul>
      
      <form class="d-flex">
        <input class="form-control me-2" type="text" size="60" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>

    </div>
  </div>
</nav>



