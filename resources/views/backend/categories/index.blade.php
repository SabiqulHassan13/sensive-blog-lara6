@extends('backend.master')



@section('content')

	<div class="row">
		<div class="col-12">
			<div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">Category List</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="">
        	@csrf 

          <div class="card-body">
            <div class="form-group">
              <label for="name">Category Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Enter Category Name">
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