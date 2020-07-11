@extends('backend.master')



@section('content')

	<div class="row">
		<div class="col-12">
			<div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">Create Post</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{ route('admin.posts.store') }}">
        	@csrf 

          <div class="card-body">
            <div class="form-group">
              <label for="title">Post Title</label>
              <input type="text" name="title" class="form-control" id="title" placeholder="Enter Post Title">
            </div>

            <div class="form-group">
              <label for="body">Post Body</label>
              <textarea rows="5" name="body" class="textarea" id="body" placeholder="Enter Post Body"></textarea>
            </div>

            <div class="form-group">
              <label for="exampleInputFile">Post Image input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
            </div>
	
            <div class="form-group">
            	<label for="status">Publication Status</label>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="status">
                <label class="form-check-label" name="status" for="status">Published</label>
              </div>                  		
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
		</div>
	</div>

@endsection