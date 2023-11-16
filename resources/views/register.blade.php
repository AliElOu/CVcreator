<x-master title="Register" style="{{ asset('styles/registerStyle.css') }}">



	@section('main')


    <body>
  

        <div class="d-md-flex half register">
          <div class="bg" style="background-image: url('images/bg_1.jpg');"></div>
          <div class="contents">
      
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-md-12 my-5">
                  <div class="form-block mx-auto">
                    <div class="text-center mb-5">
                    <h3>Register to <strong>CVcreator</strong></h3>
                    <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                    </div>
                    <form action="{{ route("register.action") }}" method="post">
                    @csrf
                      <div class="form-group first">
                        <label>Username</label>
                        <input type="text" name="username" placeholder="Username" class="form-control" value="{{ old("username") }}">
                        @error('username')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>
                        
                      <div class="form-group first">
                        <label>E-mail</label>
                        <input  placeholder="example@hotmail.com" name="email" class="form-control" value="{{ old("email") }}">
                        @error('email')
                            <div class="text-danger">{{$message}}</div>
                        @enderror 
                    </div>
                                           
                      <div class="form-group last mb-3">
                        <label>Password</label>
                        <input type="password" placeholder="Your Password" name="password" class="form-control">
                        @error('password')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                      
                      <div class="form-group first">
                        <label>E-mail</label>
                        <input type="password" placeholder="Confirm Your Password" name="password_confirmation" class="form-control">
                        @error('password_confirmation')
                      <div class="text-danger">{{$message}}</div>
                  @enderror
                    </div>
                         <br>        
                      <input type="submit" name="register" value="Register" class="btn btn-block btn-primary">
                      <div class="d-sm-flex mt-3 align-items-center">
                        <span><a href="{{ route("login.show") }}" class="Not_a_member">Already member? Log In!</a></span> 
                      </div>						
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
          
        </div>
          
          
      
         
        </body>





            {{-- <div class="logo">
                <h1>QUICK<span> CV<span></h1>	
                <p>Signup and create your CV</p>
                </div>
                
            
            
                <div id="showRegForm" class="formDiv">
                    <p style="color:white; font-size: 30px; "><strong>Register</strong></p><br>
                    <form class="logIcon" method="POST" action="{{ route("register.action") }}">
                        @csrf
                        <span class="fas fa-user-tie"></span>
                        <input type="text" placeholder="Username" name="username"><br>
                        @error('username')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        <span class="fas fa-envelope"></span>
                        <input type="email" placeholder="Your Email" name="email"><br>
                        @error('email')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        <span class="fas fa-key"></span>
                        <input type="password" placeholder="Your Password" name="password"><br>
                        @error('password')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        <span class="fas fa-key"></span>
                        <input type="password" placeholder="Confirm Password" name="password_confirmation"><br>
                        @error('password_confirmation')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        <br>
                        <button class="logbttn" name="sign">SIGN UP</button>
                        <p style="text-decoration: underline; ">
                            <a id="showLog" style="color: white;font-size: 16px;" href=" {{ route("login.show") }} ">Already member? Log In!</a>
                        </p>
                    </form>
                </div> --}}
    @endsection
	
</x-master>

