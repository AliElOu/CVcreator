<x-master title="Login" style="{{ asset('styles/registerStyle.css') }}">

	
		@section('main')
				

		<body>
  

			<div class="d-md-flex half">
			  <div class="bg" style="background-image: url('images/bg_1.jpg');"></div>
			  <div class="contents">	  
				<div class="container">
				  <div class="row align-items-center justify-content-center">
					<div class="col-md-12">
					  <div class="form-block mx-auto">
						<div class="text-center mb-5">
						<h3>Login to <strong>CVcreator</strong></h3>
						<!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
						</div>
						<form action="{{ route("login.action") }}" method="post">
						@csrf
						  <div class="form-group first">
							<label>E-mail</label>
							<input type="email" placeholder="example@hotmail.com" name="email" class="form-control" value="{{ old("email") }}">
						  </div>
						  <div class="form-group last mb-3">
							<label	>Password</label>
							<input type="password" placeholder="Your Password" name="password" class="form-control">
							@error('login')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						  </div>
						  
						  <div class="d-sm-flex mb-4 align-items-center">
							<span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
						  </div>
		  
						  <input type="submit" name="login" value="Log In" class="btn btn-block btn-primary">
						  <div class="d-sm-flex mt-3 align-items-center">
							<span><a href="{{ route("register.show") }}" class="Not_a_member">Not a member? SIGN UP!</a></span> 
						  </div>						
						</form>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
		  
			  
			</div>
			
			</body>


		@endsection
	

</x-master>

