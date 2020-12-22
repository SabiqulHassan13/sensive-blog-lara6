@extends('backend.master')



@section('content')

	<div class="row">
		<div class="col-12">           
            <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">DataTable with Post List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Tag</th>
                  <th>Body</th>
                  <th>Posted By</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Like</th>
                  <th>Dislike</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($posts as $post)
                <tr>
                  <td>{{ $post->id }}</td>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->category_id }}</td>
                  <td>{{ $post->tag_id }}</td>
                  <td>{{ $post->body }}</td>
                  <td>{{ $post->user_id }}</td>
                  <td><img src="{{ $post->image }}" width="100" height="100"></td>
                  <td>{{ $post->status }}</td>
                  <td>{{ $post->likes }}</td>
                  <td>{{ $post->dislikes }}</td>
                  <td>{{ $post->created_at }}</td>
                  <td>{{ $post->updated_at }}</td>
                  <td>
                    <a href="" class="btn btn-sm btn-info" title="show post"><i class="fa fa-eye"></i></a>
                    <a href="" class="btn btn-sm btn-warning" title="edit post"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-sm btn-danger"title="delete post"><i class="fa fa-trash"></i></a>                    
                  </td>
                </tr>
                @endforeach
                </tbody>

                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Tag</th>
                  <th>Body</th>
                  <th>Posted By</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Like</th>
                  <th>Dislike</th>
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