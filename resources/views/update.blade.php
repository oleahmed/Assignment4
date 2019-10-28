
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 mx-auto">
			@include('error.errors')

		<form action="{{ route('update.form',[$data->id]) }}" method="POST" enctype="multipart/form-data">
			{{csrf_field()}}

  			<div class="form-group">
    		<label for="exampleInputName1">Name</label>
    		<input type="text" class="form-control" id="exampleInputName1" name="name" value="{{ $data->name}}" placeholder="Enter name">
     		</div>
   			<div class="form-group">
    		<label for="exampleFormControlTextarea1">Textarea</label>
   			 <textarea class="form-control" id="exampleFormControlTextarea1" name="task" placeholder="Write something here">{{ $data->task}}</textarea>
  			</div>

   			<div class="form-group">
        <label for="exampleFormControlFile1">File input</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
        </div>
  			<input type="submit" class="btn btn-primary" name="submit" value="Add">

			</form>
    </div>
  </div>
</div>