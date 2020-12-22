@extends('backend.master')



@section('content')

<div class="row">
  <div class="col-6">
    <div class="card card-secondary">
      <div class="card-header">
        <h3 class="card-title">Create Category</h3>
      </div>

      <form action="{{ route('admin.categories.store) }}" method="POST">
      @csrf 

        <div class="card-body">
          <div class="form-group">
            <label for="category_name">Category Name</label>
            <input type="text" id="category_name" name="name" class="form-control" placeholder="Enter Category Name">
          </div>

          <div class="form-group">
            <label>Publication Status</label>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio1" name="status" value="1" class="custom-control-input">
              <label class="custom-control-label" for="customRadio1">Published</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio2" name="status" value="0" class="custom-control-input">
              <label class="custom-control-label" for="customRadio2">Unpublished</label>
            </div>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm btn-block">Submit</button>
          </div>
        </div>
      </form>

    </div>		
  </div>
</div>

@endsection