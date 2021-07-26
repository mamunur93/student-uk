@extends('author.layout')

@section('title','Student Profile')

@section('content')


<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            <!-- Profile Image -->
            <div class="card card-primary ">
              <div class="card-header">
                <h3 class="card-title">Personal Information</h3>
              </div>
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('image')}}/{{$student->photos}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$student->fname}} {{$student->lname}}</h3>

                <p class="text-muted text-center">{{$student->birth}}</p>


                <ul class="list-group list-group-unbordered mb-3"> 
                  <li class="list-group-item">
                    <b>Language</b> <a class="float-right">{{$student->lang}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Citizenship</b> <a class="float-right">{{$student->citizenship}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Name Change</b> <a class="float-right">{{$student->namechange}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Passport Number</b> <a class="float-right">{{$student->passportnumber}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Date of Births</b> <a class="float-right">{{$student->dob}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Gender</b> <a class="float-right">{{$student->gender}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Marital Status</b> <a class="float-right">{{$student->marital}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Skype</b> <a class="float-right">{{$student->skype}}</a>
                  </li>
                </ul>

               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Address</strong>

                <p class="text-muted">
                 {{$student->address}}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> City</strong>

                <p class="text-muted"> {{$student->city}}</p>

                <hr>
                 <strong><i class="fas fa-map-marker-alt mr-1"></i> State</strong>

                <p class="text-muted"> {{$student->state}}</p>

                <hr>
                 <strong><i class="fas fa-map-marker-alt mr-1"></i> post</strong>

                <p class="text-muted"> {{$student->post}}</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Country</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">{{$student->country}}</span>
                  
                </p>
                <hr>
                 <strong><i class="fas fa-map-marker-alt mr-1"></i> Mobile Number</strong>

                <p class="text-muted"> {{$student->mobile}}</p>
                <hr>

                <strong><i class="far fa-email mr-1"></i> Email</strong>

                <p class="text-muted">{{$student->email}}</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
               
                <h3 class="card-title">Education</h3>
              
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        
                        <span class="username">
                          ENGLISH PROFICIENCY LEVEL
                          
                        </span>
                        
                      </div>
                      <!-- /.user-block -->
                      <p>
                        {{$student->englishlevel}}
                      </p>
                      <hr>
                      <strong><i class="far fa-email mr-1"></i>Total Score</strong>

                      <p class="text-muted">{{$student->score}}</p>
                      <hr>
                      <strong><i class="far fa-email mr-1"></i>Written Score</strong>

                      <p class="text-muted">{{$student->written}}</p>
                      <hr>
                      <strong><i class="far fa-email mr-1"></i>Reading Score</strong>

                      <p class="text-muted">{{$student->reading}}</p>
                      <hr>
                      <strong><i class="far fa-email mr-1"></i>Spoken Score</strong>

                      <p class="text-muted">{{$student->spoken}}</p>
                      <hr>
                      <strong><i class="far fa-email mr-1"></i>Listening Score</strong>

                      <p class="text-muted">{{$student->listen}}</p>
                      <hr>

                      <div class="user-block">
                        
                        <span class="username">
                          Latest Education
                          
                        </span>
                        </div>
                      
                        <strong><i class="far fa-email mr-1"></i>Height Education</strong>

                      <p class="text-muted">{{$student->heightleveledu}}</p>
                      <hr>
                      <strong><i class="far fa-email mr-1"></i>Grading scheme</strong>

                      <p class="text-muted">{{$student->gradingscheme}}</p>
                      <hr>

                      <strong><i class="far fa-email mr-1"></i>Grade Scale (out of)</strong>

                      <p class="text-muted">{{$student->gradeoutof}}</p>
                      <hr>
                      <strong><i class="far fa-email mr-1"></i>Graduated from most recent school</strong>

                      <p class="text-muted">{{$student->edulevel}}</p>
                     
                      
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        
                        <span class="username">
                         SSC Results Details
                        
                        </span>
                       
                      </div>
                      <!-- /.user-block -->
                      <strong><i class="far fa-email mr-1"></i>Institute Name</strong>
                      <p>
                        {{$student->sscinst}}
                      </p>
                      <hr>

                      <strong><i class="far fa-email mr-1"></i>Passing Year</strong>
                      <p>
                        {{$student->sscyear}}
                      </p>
                      <hr>
                      <strong><i class="far fa-email mr-1"></i>SSC Group/Major</strong>
                      <p>
                        {{$student->sscgroup}}
                      </p>
                      <hr>
                      <strong><i class="far fa-email mr-1"></i>Result</strong>
                      <p>
                        {{$student->sscresult}}
                      </p>
                       <div class="user-block">
                        
                        <span class="username">
                         HSC Results Details
                        
                        </span>
                        </div>
                       <strong><i class="far fa-email mr-1"></i>Institute Name</strong>
                      <p>
                        {{$student->hscinst}}
                      </p>
                      <hr>
                      <strong><i class="far fa-email mr-1"></i>Passing Year</strong>
                      <p>
                        {{$student->hscyear}}
                      </p>
                      <hr>

                      <strong><i class="far fa-email mr-1"></i>HSC Group/Major</strong>
                      <p>
                        {{$student->hscgroup}}
                      </p>
                      <hr>
                       <strong><i class="far fa-email mr-1"></i>Result</strong>
                      <p>
                        {{$student->hscresult}}
                      </p>
                     
                      
                    </div>
                    <!-- /.post -->

                  </div>
                  <!-- /.tab-pane -->
               

                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->




          <div class="col-md-6">
            <div class="card card-primary ">
              <div class="card-header">
                <h3 class="card-title">Latest Education</h3>
              </div>
              <div class="card-body box-profile">
                <h3></h3>
                <ul class="list-group list-group-unbordered mb-3"> 
                  <li class="list-group-item">
                    <b> Country of instuituting</b> <a class="float-right"> {{$student->countryins}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Name of Institution</b> <a class="float-right">{{$student->institute}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Primary language of Institution</b> <a class="float-right"> {{$student->primarylanguage}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Attended Institution from</b> <a class="float-right">{{$student->attendedfrom}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Attended Institution To</b> <a class="float-right">{{$student->attendedto}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Degree Awarded</b> <a class="float-right">{{$student->degreeaward}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Institute Address , State / City</b> <a class="float-right">{{$student->instituteaddress}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Institute Country</b> <a class="float-right"> {{$student->inscountry}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Institute Zip Code</b> <a class="float-right"> {{$student->instzip}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Institute Town</b> <a class="float-right"> {{$student->insttown}}</a>
                  </li>
                </ul>

               
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div class="col-md-6">
           
            <div class="card card-primary ">
              <div class="card-header">
                <h3 class="card-title">Certificates</h3>
              </div>
              <div class="card-body ">
             
           
                  <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                     
                      <strong><i class="far fa-email mr-1"></i>Have you refused a visa from Canada, United Kingdom, New Zelend or Australia</strong>
                      <p>
                        {{$student->refused}}
                      </p>
                      <hr>
                      </div>

                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="{{asset('public/image')}}/{{$student->passport}}" alt="passport">
                        </div>
                         <div class="col-sm-6">
                          <img class="img-fluid" src="{{asset('public/image')}}/{{$student->cv}}" alt="cv">
                        </div>
                         <div class="col-sm-6">
                          <img class="img-fluid" src="{{asset('public/image')}}/{{$student->ref1}}" alt="ref1">
                        </div>
                         <div class="col-sm-6">
                          <img class="img-fluid" src="{{asset('public/image')}}/{{$student->ref2}}" alt="ref2">
                        </div>
                         <div class="col-sm-6">
                          <img class="img-fluid" src="{{asset('public/image')}}/{{$student->ssccer}}" alt="ssccer">
                        </div>
                         <div class="col-sm-6">
                          <img class="img-fluid" src="{{asset('public/image')}}/{{$student->ssctrans}}" alt="ssctrans">
                        </div>
                         <div class="col-sm-6">
                          <img class="img-fluid" src="{{asset('public/image')}}/{{$student->hsccer}}" alt="hsccer">
                        </div>
                         <div class="col-sm-6">
                          <img class="img-fluid" src="{{asset('public/image')}}/{{$student->hsctrns}}" alt="hsctrns">
                        </div>
                         <div class="col-sm-6">
                          <img class="img-fluid" src="{{asset('public/image')}}/{{$student->sop}}" alt="sop">
                        </div>
                         <div class="col-sm-6">
                          <img class="img-fluid" src="{{asset('public/image')}}/{{$student->sign}}" alt="sign">
                        </div>
                         <div class="col-sm-6">
                          <img class="img-fluid" src="{{asset('public/image')}}/{{$student->photos}}" alt="Photo">
                        </div>
                         <div class="col-sm-6">
                          <img class="img-fluid" src="{{asset('image')}}/{{$student->status}}" alt="status">
                        </div>

                        <!-- /.col -->
                        
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                     
                    </div>
               
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection