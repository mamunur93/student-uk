@extends('layouts.main')

@section('title','User Role')

@section('content')

	 <!-- Content Wrapper. Contains page content -->
  
    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Manage User Permission </h3>
                  @if ($errors->any())
			        <div class="alert alert-danger">
			            <strong>Whoops!</strong> There were some problems with your input.<br><br>
			            <ul>
			                @foreach ($errors->all() as $error)
			                    <li>{{ $error }}</li>
			                @endforeach
			            </ul>
			        </div>
    				@endif
              </div>

             <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                  	@foreach($user as $row)
                  <tr>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>
                    	@if($row->role=="1")
                    	{{"Admin"}}
                    	@elseif($row->role=="2")
                    	{{"Agent"}}
                    	@else
                    	{{"Studen"}}
                    	@endif


                    </td>
                 
                    <td>
                    	<a href="{{url('admin/editrole/'.$row->id)}}" class="btn btn-warning">Edit</a>
                    </td>
                  </tr>
                 @endforeach
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
             
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection