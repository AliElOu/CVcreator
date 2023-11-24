<head>
  <link rel="stylesheet" href="{{ asset('styles/navbar.css') }}">
</head>

<nav>
  <div class="nav-content">
    <div class="logo">
      <a href="{{ route("home") }}">CVcreator.</a>
    </div>
    <div class="row">   
      <a class="button-23 col-sm me-3" href="{{ route('resumes.show') }}" role="button">MyResumes</a>
      <button onclick="window.location.href='{{ route('auth.logout') }}'" class="btn btn-outline-danger col-sm"><i class="bi bi-box-arrow-left"></i></button>
    </div>
  </div>
</nav>


<script>
  let nav = document.querySelector("nav");
    window.onscroll = function() {
      if(document.documentElement.scrollTop > 20){
        nav.classList.add("sticky");
      }else {
        nav.classList.remove("sticky");
      }
    }
  </script>

