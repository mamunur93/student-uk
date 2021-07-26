@extends('layouts.main')

@section('title','Student Status update')

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
                <h3 class="card-title">Student Status update </h3>
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
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST" action="{{ route('status.update',$students->id) }}">

              	@csrf
      		
                <div class="card-body">
                	<div class="form-group">
                    <label for="name"> Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $students->fname }} {{ $students->lname }}" readonly="">
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ $students->email }}" readonly="">
                  </div>
                 

                 <div class="form-group">
                  <label>Status</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="status">
                    
                    <option data-select2-id="30" value="Submited">Submited</option>
                    <option data-select2-id="31" value="Document Require">Document Require</option>
                    <option data-select2-id="31" value="Under Review">Under Review</option>
                    <option data-select2-id="32" value="Submited to University">Submited to University</option>
                    <option data-select2-id="32" value="Congratulation">Congratulation</option>
                    
                  </select>


                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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