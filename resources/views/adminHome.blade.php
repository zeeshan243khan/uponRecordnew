
@extends('layouts.master')

@section('content')
<section class="main_content dashboard_part large_header_bg " style="background-color: #fff;">
 

    <div class="card-box pd-20 height-100-p mb-30">
      <div class="row d-flex align-items-center gap-1">
        <div class="col-md-4">
          <img class="img-fluid" src="{{asset('img/banner-img.png')}}" alt="">
        </div>
        <div class="col-md-7">
          <h4 class="font-20 weight-500 mb-10 text-capitalize">
            Welcome back <div class="weight-600 font-30 text-blue">Johnny Brown!</div>
          </h4>
          <p class="font-18 max-width-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde hic non
            repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure fugiat, veniam non
            quaerat mollitia animi error corporis.</p>
        </div>
      </div>
    </div>
    <form action="{{ route('release.create.step.one.post') }}" method="POST">
                @csrf
                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
    <!-- model start from here -->

   
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
      style="top: 20%;">
      <div class="modal-dialog">
        <div class="modal-content" id="page-1" style="display: block;">
          <div class="modal-header">
            <h5 class="modal-title">1/3
              New release</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <!-- model page one start -->
        
          <div class="modal-body">
            <h6 class="py-4">What is the type of your new release?</h6>
            <!-- Email input -->
            <div class="px-4">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="media_type" id="audio" value="Audio">
                <label class="form-check-label" for="audio">
                  Audio
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="media_type" id="video" value="Video" checked>
                <label class="form-check-label" for="video">
                  Video
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="media_type" id="ringtoon" value="Ringtoon" checked>
                <label class="form-check-label" for="ringtoon">
                  Ringtoon
                </label>
              </div>
            </div>

            <div class="modal-footer mt-4">
              <button id="cancelBtn" type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
              <button type="button" class="btn btn-primary nextBtn-page-1">NEXT</button>
            </div>
          </div>


        </div>


    

        <!-- model page second start  -->
        <div class="modal-content" id="page-2" style="display: none;">
          <div class="modal-header">
            <h5 class="modal-title">2/3
              New audio release</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <!-- model page one start -->
          <div class="modal-body">
            <h6 class="py-4">What is the genre of your new audio release?</h6>
            <p class="info">Releases of Western Classical or Jazz genre require different informations</p>
            <!-- Email input -->
            <div class="check">
              <div>
                <input type="checkbox" id="vehicle1" name="genre" value="Any genre" />
                <label for="vehicle1">&nbsp; &nbsp; &nbsp; Any genre</label>
              </div>
              <div>
                <input type="checkbox" id="vehicle2" name="genre" value="Western classical" />
                <label for="vehicle2">&nbsp; &nbsp; &nbsp; Western classical</label>
              </div>
              <div>
                <input type="checkbox" id="vehicle3" name="genre" value="Jazz" />
                <label for="vehicle3">&nbsp; &nbsp; &nbsp; Jazz</label><br /><br />
              </div>
            </div>

            <div class="modal-footer">
              <button id="cancelBtn" type="button" class="btn btn-secondary" data-bs-dismiss="modal">BACK</button>
              <button type="button" class="btn btn-primary nextBtn-page-1">NEXT</button>
            </div>
          </div>
        </div>

        <!-- model page second end  -->

        <!-- model page third start  -->
       
        <div class="modal-content" id="page-3" style="display: none;">
          <div class="modal-header">
            <h5 class="modal-title">3/3
              New audio release</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <!-- model page one start -->
          <div class="modal-body">
            <h6 class="py-4">What is the title of your new release?</h6>
            <!-- Email input -->
            <div class="check">
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="title" placeholder="Fill in your release title" aria-label="Username"
                  aria-describedby="basic-addon1">
              </div>
              <div>
                <input type="checkbox" id="title"  value="true" />
                <label for="title">&nbsp; &nbsp; &nbsp; Contains at least one track already existing within my
                  catalog</label><br /><br />
              </div>
            </div>

            <div class="modal-footer">
              <button id="cancelBtn" type="button" class="btn btn-secondary" data-bs-dismiss="modal">BACK</button>
              <button type="submit" class="btn btn-primary nextBtn-page-1">NEXT</button>
            </div>
          </div>
        </div>
      </div>
      <!-- model page third end  -->
    </div>
    <!-- model page one end -->
</form>
  </section>
@endsection