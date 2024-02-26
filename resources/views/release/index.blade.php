@extends('layouts.master')

@section('content')


   
      

        <div class="main_content_iner">
            <div class="container-fluid p-0 sm_padding_15px">
                <div class="row justify-content-center">
                    <div class="col-lg-12                                  ">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_body">
                                <div class="card-body">
                                    <form>
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <input type="email" class="form-control" id="inputEmail4"
                                                    placeholder="Search" />
                                            </div>
                                            <div class="col-md-8 d-flex justify-content-between btn-box">
                                                <div class="d-flex gap-2 flex-wrap ">
                                                    <button class="text-white search-btn px-3 py-2">
                                                        <i class="fa-solid fa-magnifying-glass"
                                                            style="color: #ffffff"></i>
                                                        Search
                                                    </button>

                                                    
                                                </div>
                                                <div>
                                                   <!--  <button class="export-btn px-3 py-2">Export</button> -->
                                                </div>
                                            </div>


                                            <div class="collapse mt-4" id="collapseAdvance">
                                                <div class="">
                                                    <div class="">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                                <div class="row">
                                                                    <p class="mini-heading pt-4">PRODUCT INFORMATION</p>
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class=" p-md-0 p-sm-0">
                                                                            <p class="heading-p py-2">Products</p>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="" id="music">
                                                                                <label class="form-check-label"
                                                                                    for="music">
                                                                                    Music
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="ringtoon">
                                                                                <label class="form-check-label"
                                                                                    for="ringtoon">
                                                                                    Ringtoon
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 mt-md-4 mt-sm-4">
                                                                        <div>
                                                                            <p class="heading-p py-2">Status</p>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="delivered">
                                                                                <label class="form-check-label"
                                                                                    for="delivered">
                                                                                    Delivered
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="guidlines">
                                                                                <label class="form-check-label"
                                                                                    for="guidlines">
                                                                                    This product is being reviewed by
                                                                                    our content compliance team. In case
                                                                                    of compliance
                                                                                    issues with stores guidelines, we
                                                                                    will contact you for resolution.
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="corretion_requested">
                                                                                <label class="form-check-label"
                                                                                    for="corretion_requested">
                                                                                    Correction Requested
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="drafts">
                                                                                <label class="form-check-label"
                                                                                    for="drafts">
                                                                                    Drafts
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="unsellable">
                                                                                <label class="form-check-label"
                                                                                    for="unsellable">
                                                                                    Unsellable
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div>
                                                                    <p class="mini-heading py-2">PERIOD</p>
                                                                    <label class="form-check-label pt-2"
                                                                        for="exampleRadios1">
                                                                        Pre-defined period:
                                                                    </label>
                                                                    <select class="form-select"
                                                                        aria-label="Default select example">

                                                                        <option selected>Open this select menu</option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <div class="row my-1 py-1">
                                                                        <label class="form-check-label py-1"
                                                                            for="exampleRadios1">
                                                                            Period from:
                                                                        </label>
                                                                        <div class="col-6">
                                                                            <input class="form-control" type="date"
                                                                                placeholder="Disabled input"
                                                                                aria-label="Disabled input example">

                                                                        </div>
                                                                        To
                                                                        <div class="col-6">
                                                                            <input class="form-control" type="date"
                                                                                placeholder="Disabled input"
                                                                                aria-label="Disabled input example">
                                                                        </div>
                                                                        <div class="col-12 py-2">
                                                                            <label class="form-check-label py-1"
                                                                                for="exampleRadios1">
                                                                                On:
                                                                            </label>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckChecked" checked>
                                                                                <label class="form-check-label"
                                                                                    for="flexCheckChecked">
                                                                                    Release Date
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckChecked" checked>
                                                                                <label class="form-check-label"
                                                                                    for="flexCheckChecked">
                                                                                    Creation Date
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="p-4">
                                                                            <p class="mini-heading py-2">SORT BY</p>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio" name="sortby"
                                                                                    id="release_title" value="option1"
                                                                                    checked>
                                                                                <label class="form-check-label"
                                                                                    for="release_title">
                                                                                    Release Title
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio" name="sortby"
                                                                                    id="artist" value="option2">
                                                                                <label class="form-check-label"
                                                                                    for="artist">
                                                                                    Artist
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio" name="sortby"
                                                                                    id="label" value="option1" checked>
                                                                                <label class="form-check-label"
                                                                                    for="label">
                                                                                    Label
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio" name="sortby"
                                                                                    id="creation_date" value="option2">
                                                                                <label class="form-check-label"
                                                                                    for="creation_date">
                                                                                    Creation Date
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio" name="sortby"
                                                                                    id="release_date" value="option2">
                                                                                <label class="form-check-label"
                                                                                    for="release_date">
                                                                                    Release Date
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="px-1 pb-4">
                                                                    <label class="form-check-label py-1"
                                                                        for="exampleRadios1">
                                                                        Label:
                                                                    </label>
                                                                    <select class="form-select"
                                                                        aria-label="Default select example">
                                                                        <option selected>Open this select menu</option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <label class="form-check-label py-1"
                                                                        for="exampleRadios1">
                                                                        Artist:
                                                                    </label>
                                                                    <select class="form-select"
                                                                        aria-label="Default select example">
                                                                        <option selected>Open this select menu</option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div>
                                                                    <p class="mini-heading py-2">SOURCE</p>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="" id="believe_digital">
                                                                        <label class="form-check-label"
                                                                            for="believe_digital">
                                                                            Believe Digital<i
                                                                                style="color: blue; cursor: pointer;"
                                                                                class="ms-3 fa-solid fa-circle-question"></i>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="" id="catalog_transfer">
                                                                        <label class="form-check-label"
                                                                            for="catalog_transfer">
                                                                            Catalog Transfer<i
                                                                                style="color: blue; cursor: pointer;"
                                                                                class="ms-3 fa-solid fa-circle-question"></i>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="" id="direct_upload_yt">
                                                                        <label class="form-check-label"
                                                                            for="direct_upload_yt">
                                                                            Direct upload on YouTube<i
                                                                                style="color: blue; cursor: pointer;"
                                                                                class="ms-3 fa-solid fa-circle-question"></i>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-center mb-4 gap-2">
                                                            <button class="btn-btn">Cancel</button>
                                                            <button class="btn-btn">Apply filter</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <hr />
                                <!-- result section start  -->
                                <div>
                                    <p class="fs-5 text-dark my-4"> </p>
                                </div>
                                <!-- result section end  -->

                                <!-- table section start  -->
                                <div style="overflow-x: scroll;">
                                @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
                                    <table class="table align-middle mb-0 bg-white mt-4">
                                        <thead class="bg-white">
                                            <tr>
                                                <th>Type</th>
                                                <th>image</th>
                                                <th>Audio</th>
                                                <th>Title/Artist</th>
                                                <th>Label</th>
                                                <th>Release date / hour / Time zone</th>
                                                
                                                <th>UPC / Catalog Number</th>
                                               
                                                <!-- <th>Delivered Territories & Stores</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($release as $rel)
                                            <tr>
                                                <td>
                                                    <i class="fa-solid fa-compact-disc">{{ $rel->media_type }}</i>
                                                </td>
                                                <td>
                                                
                                                    <div class="d-flex align-items-center gap-2">
                                                        <i class="fa-solid fa-chart-area"></i>
                                                        <img src="/images/{{ $rel->image }}" width="100px">
                                                    </div>
                                                </td>
                                                <td>
                                                
                                                <div class="d-flex align-items-center gap-2">
                                                    <i class="fa-solid fa-chart-area"></i>
                                                    <img src="/audio/{{ $rel->audio }}" width="100px">
</td>
                                                <td>{{ $rel->title }}</td>
                                                <td>{{ $rel->label_name }}</td>
                                                <td>{{ $rel->release_date }}</td>
                                             
                                                <td>
                                                    <span>{{ $rel->upc }}</span>
                                                  
                                                </td>
                                               
                                              
                                            <!--         <div class="d-flex gap-4 align-items-center">
                                                        <div class="d-flex flex-column gap-1">
                                                            <button data-bs-toggle="modal"
                                                                data-bs-target="#staticBackdrop" type="button"
                                                                class="table-btn delivered-btn-table">
                                                                <i class="fa-solid fa-earth-americas"> </i>
                                                                &nbsp; &nbsp; 240 terrs
                                                            </button>
                                                            <button class="table-btn delivered-btn-table">
                                                                <i class="fa-solid fa-earth-americas"> </i>
                                                                &nbsp; &nbsp; 0 stores
                                                            </button>
                                                        </div>
</td>
<td>
                                                        <div> -->
                                                            
                            <!-- <form action="{{ route('release.destroy',$rel->id) }}" method="POST">
     

     <a class="btn btn-primary" href="{{ route('release.edit',$rel->id) }}">Edit</a>

     @csrf
     @method('DELETE')

     <button type="submit" class="btn btn-danger">Delete</button>
 </form> -->
 <td>
 <form action="{{ route('release.destroy',$rel->id) }}" method="POST">
 @csrf
     @method('DELETE')
 <a  href="{{ route('release.edit',$rel->id) }}"> <button type="button" class="btn btn-success btn-sm px-2">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
</a>
                                                    <button type="submit" class="btn btn-danger btn-sm px-2">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                    </form> 
                                                </td>
                              
                           
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {!! $release->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
      
        <!-- allowed-territories-model-content end here  -->

        <!-- delete model start from here  -->

      
        <!-- delete model end from here  -->


  @endsection