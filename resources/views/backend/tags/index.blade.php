@extends('backend.master')



@section('content')

	<div class="row">
		<div class="col-12">           
            <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">DataTable with Tag List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Tag Name</th>
                  <th>Tag Slug</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($tags as $tag)
                <tr>
                  <td>{{ $tag->id }}</td>
                  <td>{{ $tag->name }}</td>
                  <td>{{ $tag->slug }}</td>
                  <td>{{ $tag->created_at }}</td>
                  <td>{{ $tag->updated_at }}</td>
                  <td>
                    <a href="" class="btn btn-sm btn-info" title="show tag"><i class="fa fa-eye"></i></a>
                    <a href="" class="btn btn-sm btn-warning" title="edit tag"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-sm btn-danger"title="delete tag"><i class="fa fa-trash"></i></a>                    
                  </td>
                </tr>
                @endforeach
                </tbody>

                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Tag Name</th>
                  <th>Tag Slug</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->	
		</div>
	</div>

@endsection