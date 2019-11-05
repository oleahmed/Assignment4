<!DOCTYPE html>
<html>
<head>
	<title>Register form</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body style="background-color: #ACCDFC">


<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 mx-auto">
			@include('error.errors')

		<form action="{{route('register.form')}}" method="POST" enctype="multipart/form-data">
			{{csrf_field()}}

  			<div class="form-group">
    		<label for="exampleInputName1">Name</label>
    		<input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Enter name" value="{{old('name')}}">
     		</div>

        <div class="form-group">
        <label for="exampleInputName1">Email</label>
        <input type="email" class="form-control" id="exampleInputName1" name="email" placeholder="Enter Email" value="{{old('email')}}">
        </div>

        <div class="form-group">
        <label for="exampleInputName1">Password</label>
        <input type="Password" class="form-control" id="exampleInputName1" name="password" placeholder="Enter password">
        </div>

         <div class="form-group">
        <label for="exampleInputName1">Confirm Password</label>
        <input type="Password" class="form-control" id="exampleInputName1" name="password_confirmation" placeholder="Enter confirm password">
        </div>
   		
  			<input type="submit" class="btn btn-primary" name="submit" value="register">

			</form>
    </div>
  </div>
</div>
</body>
</html>