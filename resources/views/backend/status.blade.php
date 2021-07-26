
@extends('layouts.main')

@section('title','Student Registration Details')
@push('css')

@endpush
@section('content')
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
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
    			<form class="form-horizontal" action="{{route('student.store')}}" method="POST">
    			@csrf
            <!-- Horizontal Form -->
            <div class="card card-secondary">
              
              	
              	<div class="card-header">
               		 <h3 class="card-title">Personal Information</h3>
              	</div>

              	<div class="card-body">

                  <div class="row">
                  	<div class="col-lg-6">
                  		<div class="form-group row">
                  			<label for="fname" class="col-sm-4 col-form-label">First Name <span style="color: red;">*</span></label>
		                    <div class="col-sm-8">
		                      <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
		                    </div>
                  		</div>	
                  		
                  		<div class="form-group row">
                  			<label for="status" class="col-sm-4 col-form-label">Status <span style="color: red;">*</span></label>
		                    <div class="col-sm-8">
		               
		                      <select class="form-control" name="status" id="status">
												    <option value="Received">Received </option>
												    <option value="Document Need">Document Need</option>
												    <option value="Under Review">Under Review</option>
												    <option value="Submited to university">Submited to university</option>
												    <option value="Congratulation">Congratulation</option>
												    
												</select>
		                    </div>
                  		</div>
                  	
                  		
                  	
                  </div>


                  	<div class="col-lg-6">
                  		<div class="form-group row">
                  			<label for="lname" class="col-sm-3 col-form-label">last Name</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" id="lname" name="lname" placeholder="last Name">
		                    </div>
                  		</div>	
                  			
                  		
                  		
                  	

                  	</div>
                    
                  </div>
              	</div>
           

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Sign in</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
             
            </div>
            <!-- /.card -->
             </form>
          </div>
          <!--/.col (left) -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
