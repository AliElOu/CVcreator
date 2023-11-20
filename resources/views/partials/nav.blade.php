<head>
  <link rel="stylesheet" href="{{ asset('styles/navbar.css') }}">
</head>

<nav>
  <div class="nav-content">
    <div class="logo">
      <a href="{{ route("home") }}">CVcreator.</a>
    </div>
    <div class="row">
      <ul class="nav-links col-sm mt-2">
        <li><a href="{{ route("home") }}">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Skills</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>    
      </ul> 
      <div class="vertical-line col-sm"></div>
      <a class="button-23 col-sm" href="{{ route('auth.logout') }}" role="button">Profile</a>
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

