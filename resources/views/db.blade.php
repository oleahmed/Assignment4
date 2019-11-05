<!DOCTYPE html>
<html>
<head>
	<title>To do form</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body style="background-color: #ACCDFC">


<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 mx-auto">
      <h3>Welcome <i>{{ $username }}</i>(<a href="{{ url('/logout')}}">Logout</a>)</h3>
			@include('error.errors')
      

		<form action="{{route('submit')}}" method="POST" enctype="multipart/form-data">
			{{csrf_field()}}

  			<div class="form-group">
    		<label for="exampleInputName1">Name</label>
    		<input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Enter name">
     		</div>
   			<div class="form-group">
    		<label for="exampleFormControlTextarea1">Address</label>
   			 <textarea class="form-control" id="exampleFormControlTextarea1" name="task" placeholder="Write something here"></textarea>
  			</div>

   			<div class="form-group">
    		<label for="exampleFormControlFile1">File input</label>
    		<input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  			</div>
  			<input type="submit" class="btn btn-primary" name="submit" value="Add">

			</form>

			@if(session('updatesuccess'))
			{{ session('updatesuccess') }}
			@endif

			<table class="table" border="1px solid white" style="background-color: white">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Task</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@forelse($allData as $data)
    <tr>
      <td>{{$data->name}}</td>
      <td>{{$data->task}}</td>
      <td>
      	@if ($data->image == null)
      		<p>Image not found</p>
      	@else
      	<img src="{{ asset('photos/'.$data->image) }}" alt="" width="100px">
      	@endif
      </td>
     <td>
     	<a href="{{ route('edit.form',[$data->id]) }}">Edit</a>||<a onclick="return confirm('Really??')" href="{{ route('delete.form',[$data->id]) }}">Delete</a>
     </td>
    </tr>
    @empty
    <tr><td colspan="4">Nothing to show</td></tr>
   @endforelse
    
  </tbody>
</table>

		</div>
	</div>
</div>


{{-- <div class="container-fluid">
			<div class="row">
				<div class='col-md-4 mx-auto'>
					<form action="" method="" enctype="">
				  <div class="form-group">
				    <label for="exampleInputName1">Name</label>
				    <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Enter name">
				     </div>
				   <div class="form-group">
				    <label for="exampleFormControlTextarea1">Textarea</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" name="task" placeholder="Write something here"></textarea>
				  </div>

				   <div class="form-group">
				    <label for="exampleFormControlFile1">File input</label>
				    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
				  </div>
				  <input type="submit" class="btn btn-primary" name="submit" value="Add">
				</form>
				</div>
			</div>
		</div> --}}


<script type="text/javascript" src="js/app.js"></script>

</body>
</html>


