 <nav class="navbar navbar-expand-md navbar-dark bg-dark p-4 fixed-top" aria-label="Fourth navbar example">
     <div class="container-fluid container">
         <a class="navbar-brand" href="{{ url('/') }}">African Choice Holdings ltd</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
             aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarsExample04">
             <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ url('/#about-us') }}">About us</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ url('/#products') }}">Products</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ url('/#services') }}">Services</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ url('/gallery') }}">Gallery</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ url('/#contact') }}">Contact Us</a>
                 </li>
                 {{-- <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown"
                         aria-expanded="false">Dropdown</a>
                     <ul class="dropdown-menu" aria-labelledby="dropdown04">
                         <li><a class="dropdown-item" href="#">Action</a></li>
                         <li><a class="dropdown-item" href="#">Another action</a></li>
                         <li><a class="dropdown-item" href="#">Something else here</a></li>
                     </ul>
                 </li> --}}
             </ul>
         </div>
     </div>
 </nav>
