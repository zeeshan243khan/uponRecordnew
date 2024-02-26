@extends('layouts.master')

@section('content')

    <div class="container mt-3">
        <!-- tab section start form here -->
        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="pill" href="#release_information">Release Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#upload">Upload</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#tracks">Tracks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#price">Price</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#territories">Territories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#release-date">Release Date</a>
            </li>
          
            
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#submission">Submission</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <!-- relese content start  -->
            <div id="release_information" class="container tab-pane active"><br>
                <div class="row">
                    <!-- column first start  -->
                    <div class="col-lg-2 text-center mb-4">
                        <button class="mt-4 upload-btn-audio d-flex align-items-center py-2 btn-outline-primary btn"
                            data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                class="fa-solid fa-cloud-arrow-up fs-5 me-2"></i>
                            Upload cover</button>
                    </div>
                    <!-- column first end  -->

                    <!-- column second start  -->

                    <div class="col-lg-10">
                        <!-- form start  -->
                        <div style="overflow-x: scroll;">
                                @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
</div>
                        <form action="{{ route('release.update',$release->id) }}" class="row g-3 needs-validation d-flex align-items-center" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
                            <!-- release date input start -->
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label required">Release title<i
                                        class="fa-solid fa-circle-question ps-2"
                                        style="color: #0860f7;"></i></label>
                                <input type="text" class="form-control" id="validationCustom01" name="title" required value="{{$release->title}}">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <!-- release date input end  -->

                            <!-- version subtitle input start  -->
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Version/Subtitle<i
                                        class="fa-solid fa-circle-question ps-2"
                                        style="color: #0860f7;"></i></label>
                                <input type="text" class="form-control" id="validationCustom02"  name="version_subtitle" value="{{$release->version_subtitle}}" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <!-- version subtitle input end  -->

                            <!-- primary artist input start  -->
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label required">Primary artist<i
                                        class="fa-solid fa-circle-question ps-2"
                                        style="color: #0860f7;"></i></label>
                                <input type="text" class="form-control" id="validationCustom02"  name="primary_artist" value="{{$release->primary_artist}}" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <!-- primary artist input end  -->

                            <!-- featuring input start  -->
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Featuring</label>
                                <input type="text" class="form-control" id="validationCustom02" required name="featur" value="{{$release->featur}}">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <!-- featuring input end  -->

                            <!-- various artist chekbox start  -->
                            <div class="col-md-4 d-flex align-items-center justify-content-center">
                                <input type="checkbox" name="checkbox-artist" id="checkbox-artist" value="checkbox-artist" required>
                                &nbsp;
                                &nbsp; Various
                                Artists /
                                Compilation
                            </div>
                            <!-- various artist chekbox end  -->

                            <!-- genre input start  -->
                            <div class="col-md-4" id="hello">
        <label for="validationCustom04" class="form-label required">Genre</label>
        <select required id="mainGenre" class="form-select" name="genre" tabindex="6" >
        <option value="{{$release->genre}}" selected>{{$release->genre}}</option>
            <option value="">- Select a genre -</option>
            <option value="African">African</option>
            <option value="Alternative">Alternative</option>
            <option value="Arabic">Arabic</option>
            <option value="Asian">Asian</option>
            <option value="Blues">Blues</option>
            <option value="Brazilian">Brazilian</option>
            <option value="Children Music">Children Music</option>
            <option value="Christian Gospel">Christian &amp; Gospel</option>
            <option value="Classical">Classical</option>
            <option value="Country">Country</option>
            <option value="Dance">Dance</option>
            <option value="Easy Listening">Easy Listening</option>
            <option value="Electronic">Electronic</option>
            <option value="Folk">Folk</option>
            <option value="Hip Hop/Rap">Hip Hop/Rap</option>
            <option value="Indian">Indian</option>
            <option value="Jazz">Jazz</option>
            <option value="Latin">Latin</option>
            <option value="Metal">Metal</option>
            <option value="Pop">Pop</option>
            <option value="R B/Soul">R&amp;B/Soul</option>
            <option value="Reggae">Reggae</option>
            <option value="Relaxation">Relaxation</option>
            <option value="Rock">Rock</option>
            <option value="Various">Various</option>
            <option value="World Music / Regional Folklore">World Music / Regional
                Folklore</option>
        </select>
    </div>

                            <!-- genre input end  -->

                            <!-- subgenre input start  -->
                            <div class="col-md-4">
        <label for="validationCustom04" class="form-label required">Subgenre</label>
        <select id="subgenre" class="form-select" name="subgenre" tabindex="7">
        <option value="{{$release->subgenre}}" selected>{{$release->subgenre}}</option>
        </select>
        
    </div>
                            <!-- subgenre input end  -->

                            <!-- label name input start  -->
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label required">Label name<i
                                        class="fa-solid fa-circle-question ps-2"
                                        style="color: #0860f7;"></i></label>
                                <select class="form-select" id="validationCustom04" required name="label_name">
                                   <!--  <option selected disabled value="">Choose a label</option> -->
                                   <option value="{{$release->label_name}}" selected>{{$release->label_name}}</option>
                                    <option value="Spring City Records">Spring City Records</option>
                                </select>
                            </div>
                            <!-- label name input end  -->

                            <!-- format input start  -->
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label required">Format<i
                                        class="fa-solid fa-circle-question ps-2"
                                        style="color: #0860f7;"></i></label>
                                <select class="form-select" id="validationCustom04" required name="format">
                                    
                               
            <option value="{{$release->format}}" selected>{{$release->format}}</option>
           
                                   

                                    <option value="Single">Single</option>
                                            <option value="EP">EP</option>
                                            <option value="Album">Album</option>
                                        
                                </select>
                            </div>
                            <!-- format input end  -->

                            <!-- physical/original input start  -->
                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label required">Physical/Original
                                    release
                                    date<i class="fa-solid fa-circle-question ps-2"
                                        style="color: #0860f7;"></i></label>
                        <input type="date" class="form-control" id="validationCustom03" required 
                        name="release_date" value="{{$release->release_date}}">
                            </div>
                            <!-- physical/original input end  -->

                            <!-- line input start  -->
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label required"><i
                                        class="fa-brands fa-product-hunt pe-1"></i>Line1<i
                                        class="fa-solid fa-circle-question ps-2"
                                        style="color: #0860f7;"></i></label>
                                <input type="text" name="line1" class="form-control" id="validationCustom02" required value="{{$release->line1}}">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <!-- line input end  -->

                            <!-- line input start  -->
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label required"><i
                                        class="fa-solid fa-copyright pe-1"></i>Line2<i
                                        class="fa-solid fa-circle-question ps-2"
                                        style="color: #0860f7;"></i></label>
                                <input type="text" name="line2"class="form-control" id="validationCustom02" required value="{{$release->line2}}">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <!-- line input end  -->

                            <!-- production year input start -->
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label required">Production Year<i
                                        class="fa-solid fa-circle-question ps-2"
                                        style="color: #0860f7;"></i></label>
                                
                                <select class="form-select" name="production_year" required
                                            id="easyEntryEditForm-productionYear-0" tabindex="16">
                                            <option value="{{$release->production_year}}" selected>{{$release->production_year}}</option>

                                            <option value="">- Select a year -</option>
                                            <option value="2025">2025</option>
                                            <option value="2024">2024</option>
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                            <option value="1999">1999</option>
                                            <option value="1998">1998</option>
                                            <option value="1997">1997</option>
                                            <option value="1996">1996</option>
                                            <option value="1995">1995</option>
                                            <option value="1994">1994</option>
                                            <option value="1993">1993</option>
                                            <option value="1992">1992</option>
                                            <option value="1991">1991</option>
                                            <option value="1990">1990</option>
                                            <option value="1989">1989</option>
                                            <option value="1988">1988</option>
                                            <option value="1987">1987</option>
                                            <option value="1986">1986</option>
                                            <option value="1985">1985</option>
                                            <option value="1984">1984</option>
                                            <option value="1983">1983</option>
                                            <option value="1982">1982</option>
                                            <option value="1981">1981</option>
                                            <option value="1980">1980</option>
                                            <option value="1979">1979</option>
                                            <option value="1978">1978</option>
                                            <option value="1977">1977</option>
                                            <option value="1976">1976</option>
                                            <option value="1975">1975</option>
                                            <option value="1974">1974</option>
                                            <option value="1973">1973</option>
                                            <option value="1972">1972</option>
                                            <option value="1971">1971</option>
                                            <option value="1970">1970</option>
                                            <option value="1969">1969</option>
                                            <option value="1968">1968</option>
                                            <option value="1967">1967</option>
                                            <option value="1966">1966</option>
                                            <option value="1965">1965</option>
                                            <option value="1964">1964</option>
                                            <option value="1963">1963</option>
                                            <option value="1962">1962</option>
                                            <option value="1961">1961</option>
                                            <option value="1960">1960</option>
                                            <option value="1959">1959</option>
                                            <option value="1958">1958</option>
                                            <option value="1957">1957</option>
                                            <option value="1956">1956</option>
                                            <option value="1955">1955</option>
                                            <option value="1954">1954</option>
                                            <option value="1953">1953</option>
                                            <option value="1952">1952</option>
                                            <option value="1951">1951</option>
                                            <option value="1950">1950</option>
                                            <option value="1949">1949</option>
                                            <option value="1948">1948</option>
                                            <option value="1947">1947</option>
                                            <option value="1946">1946</option>
                                            <option value="1945">1945</option>
                                            <option value="1944">1944</option>
                                            <option value="1943">1943</option>
                                            <option value="1942">1942</option>
                                            <option value="1941">1941</option>
                                            <option value="1940">1940</option>
                                            <option value="1939">1939</option>
                                            <option value="1938">1938</option>
                                            <option value="1937">1937</option>
                                            <option value="1936">1936</option>
                                            <option value="1935">1935</option>
                                            <option value="1934">1934</option>
                                            <option value="1933">1933</option>
                                            <option value="1932">1932</option>
                                            <option value="1931">1931</option>
                                            <option value="1930">1930</option>
                                            <option value="1929">1929</option>
                                            <option value="1928">1928</option>
                                            <option value="1927">1927</option>
                                            <option value="1926">1926</option>
                                            <option value="1925">1925</option>
                                            <option value="1924">1924</option>
                                            <option value="1923">1923</option>
                                            <option value="1922">1922</option>
                                            <option value="1921">1921</option>
                                            <option value="1920">1920</option>
                                            <option value="1919">1919</option>
                                            <option value="1918">1918</option>
                                            <option value="1917">1917</option>
                                            <option value="1916">1916</option>
                                            <option value="1915">1915</option>
                                            <option value="1914">1914</option>
                                            <option value="1913">1913</option>
                                            <option value="1912">1912</option>
                                            <option value="1911">1911</option>
                                            <option value="1910">1910</option>
                                            <option value="1909">1909</option>
                                            <option value="1908">1908</option>
                                            <option value="1907">1907</option>
                                            <option value="1906">1906</option>
                                            <option value="1905">1905</option>
                                            <option value="1904">1904</option>
                                            <option value="1903">1903</option>
                                            <option value="1902">1902</option>
                                            <option value="1901">1901</option>
                                            <option value="1900">1900</option>
                                        </select>
                            </div>
                            <!-- production year input end -->

                            <!-- UPC/EAN input start  -->
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">UPC/EAN<i
                                        class="fa-solid fa-circle-question ps-2"
                                        style="color: #0860f7;"></i></label>
                                <input type="text" name="upc" class="form-control" id="validationCustom02" required value="{{$release->upc}}">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <!-- UPC/EAN input end  -->

                            <!-- Producer catalogue number input start  -->
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Producer catalogue
                                    number</label>
                                <input type="text" class="form-control" id="validationCustom02" required name="producer_catalogue_number" value="{{$release->	producer_catalogue_number}}">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="d-flex justify-content-between py-2">
            <p style="font-size: 20px; color: #000;"></p>
            <button type="submit" class="upload-btn-audio px-4 py-1">save</button> 
        </div>
                            <!-- Producer catalogue number input end  -->

                        </form>
                        <!-- form end  -->
                    </div>
                    <!-- column second start  -->
                </div>

                <!-- model for upload cover start  -->
               
                <!-- model for upload cover end  -->
            </div>
            <!-- release content end  -->

            <!-- upload content start  -->
            <div id="upload" class="container tab-pane fade"><br>
                <div class="row">
                    <div class="col-lg-2">
                        <p class="text-dark text-center">Upload audio file
                        </p>
</div>
                        <!-- tab navigation start  -->
                      
                        <!-- uploader file -->
                        <div class="col-lg-2 text-center mb-4">
                        <button class="mt-4 upload-btn-audio d-flex align-items-center py-2 btn-outline-primary btn"
                            data-bs-toggle="modal" data-bs-target="#staticlaunchdrop"><i
                                class="fa-solid fa-cloud-arrow-up fs-5 me-2"></i>
                            Upload audio</button>
                    </div>
                   <!-- upload audio -->
               
                               
           
               
             
                <!-- uploader model start  -->

                <div class="modal fade" id="staticlaunchdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen" style="width: 60%; height: 60%; left: 10%;">
                        <div class="modal-content text-center m-5">
                            <div style="display: flex; justify-content: flex-end;">
                                <button data-bs-dismiss="modal" aria-label="Close"
                                    style="border: none; padding-right: 10px; padding-left: 10px; background-color: transparent;">X</button>
                            </div>
                            <div class="col-md-6">
                           
                            <audio controls>
  <source src="/audio/{{$release->audio}}" type="audio/mpeg"> 
  </audio>
            
</div>

                    <form action="{{ route('release.update',$release->id) }}"  method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
           
        <div class="row"> <br>   
                    <div class="col-md-6">
                        
                    <h5 class="modal-title" id="">upload audio file</h5>
                        <input type="file" name="audio" class="form-control" required>
                    </div>     
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>     
                </div>
            </form> 
                           
                       
                        </div>
                    </div>
                </div>
                <!-- uploader model end  -->

  <!-- uploader audio model start  -->


                <!-- uploader model end  -->

            </div>
</div>
            <!-- upload content end  -->

            <!-- tracks content start  -->
            
            <div id="tracks" class="container tab-pane fade"><br>
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center">
                        <p class="me-5">Volume 1</p>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#trackUploadModel" class="ftp-import-btn px-4 py-2
                        px-4 py-2
                        px-4 py-2"><i class="fa-solid fa-plus pe-1"></i>Add track</button>
                    </div>
                    <div class="row my-5">
                        <div class="col-lg-6 d-flex align-items-center ">
                            <div class="me-5">
                                <i class="fa-solid fa-arrows-up-down-left-right me-2"></i>
                                <i class="fa-solid fa-music"></i>
                            </div>
                            <div>
                                <p>1. New track</p>
                            </div>
                        </div>
             
        
 
                        <div class="col-lg-6">
                            <button class="ftp-import-btn px-4 py-2"><i
                                    class="fa-solid fa-pen-to-square pe-1"></i>Edit</button>
                            <button data-bs-toggle="modal" data-bs-target="#deleteModal"
                                class="ftp-import-btn px-4 py-2"><i
                                    class="fa-solid fa-pen-to-square pe-1"></i>Delete</button>
                         
                        </div> 
                    </div>
                    <hr>
                </div>
               
                        
                   
               
                    <!-- Button trigger modal -->


                    <!-- Modal -->
                    

                    <div class="modal fade" id="trackUploadModel" tabindex="-1" aria-labelledby="trackUploadModelLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="trackUploadModelLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

    <form action="{{ route('track.store') }}" method="POST" enctype="multipart/form-data">

    @csrf
                            
                                <div class="modal-body ">
                                   
                                        <div class="row">
                                            <div class="col-lg-12 d-flex align-items-center flex-wrap gap-1">
                                                <p>Content type:</p>
                                                <div>
                                                    <input class=" form-check-input" type="radio" name="content_type"
                                                        id="audio" value="audio">
                                                    <label class="form-check-label" for="audio">
                                                        Audeo
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" type="radio" name="content_type"
                                                        id="video" value="video">
                                                    <label class="form-check-label" for="video">
                                                        Video
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 d-flex align-items-center flex-wrap gap-1">
                                                <p>Primary track type:</p>
                                                <div>
                                                    <input class=" form-check-input" type="radio" value="Music" name="primary_track_type" id="music">
                                                    <label class="form-check-label" for="music">
                                                        Music
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 d-flex align-items-center flex-wrap gap-1">
                                                <p>Secondary track type:</p>
                                                <div>
                                                    <input class=" form-check-input" type="radio"
                                                        name="secondary_track_type" value="Orginal" id="original">
                                                    <label class="form-check-label" for="original">
                                                        Orginal
                                                    </label>
                                                </div>

                                                <div>
                                                    <input class=" form-check-input" type="radio"
                                                        name="secondary_track_type" id="karaoke" value="Karaoke">
                                                    <label class="form-check-label" for="karaoke">
                                                        Karaoke
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class=" form-check-input" type="radio"
                                                        name="secondary_track_type" id="medley" value="Medley">
                                                    <label class="form-check-label" for="medley">
                                                        Medley
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class=" form-check-input" type="radio"
                                                        name="secondary_track_type" id="cover" value="cover">
                                                    <label class="form-check-label" for="cover">
                                                        Cover
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class=" form-check-input" type="radio"
                                                        name="secondary_track_type" id="cover_by_cover_band" value="Cover by cover band">
                                                    <label class="form-check-label" for="cover_by_cover_band">
                                                        Cover by cover band
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 d-flex align-items-center flex-wrap gap-1">
                                                <p>Instrumental:</p>
                                                <div>
                                                    <input class=" form-check-input" type="radio" name="instrumental"
                                                        id="yes" value="yes">
                                                    <label class="form-check-label" for="yes">
                                                        Yes
                                                    </label>
                                                </div>

                                                <div>
                                                    <input class=" form-check-input" type="radio" name="instrumental"
                                                        id="no" value="no">
                                                    <label class="form-check-label" for="no">
                                                        No
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- for title  -->
                                      

                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                                                    <label for="validationCustom02"
                                                        class="form-label required pe-2">Title<i
                                                            class="fa-solid fa-circle-question "
                                                            style="color: #0860f7;"></i></label>
                                                            <input type="text" name="track_title"  class="form-control" placeholder="track_title">
                                                   

                                                </div>

                                            </div>
                                        </div>

                                        <!-- for version title -->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                                                    <label for="validationCustom02" class="form-label pe-2">Version /
                                                        Subtitle<i class="fa-solid fa-circle-question "
                                                            style="color: #0860f7;"></i></label>
                                                    <input type="text" class="form-control"
                                                        aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-sm" name="version_subtitle">

                                                </div>

                                            </div>
                                        </div>
                                        <!-- for primary artist  -->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                                                    <label for="validationCustom02"
                                                        class="form-label required pe-2">Primary
                                                        artist<i class="fa-solid fa-circle-question "
                                                            style="color: #0860f7;"></i></label>
                                                    <input type="text" class="form-control"
                                                        aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-sm" name="primary_artist">

                                                </div>

                                            </div>
                                        </div>
                                        <!-- for featuring  -->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                                                    <label for="validationCustom02"
                                                        class="form-label  pe-2">Featuring</label>
                                                    <input type="text" class="form-control"
                                                        aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-sm" name="feature">
                                                </div>

                                            </div>
                                        </div>
                                        <!-- for remixer -->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                                                    <label for="validationCustom02"
                                                        class="form-label pe-2">Remixer</label>
                                                    <select data-tags="true" class="form-select" name="remixer"
                                                        id="easyEntryEditForm-remixer-0"
                                                        data-select2-id="easyEntryEditForm-remixer-0" tabindex="15"
                                                        aria-hidden="true" >
                                                        <option value="" data-select2-id="2">Please select...</option>
                                                        <option value="Bijit Kalita" data-select2-id="6">Bijit Kalita
                                                        </option>
                                                        <option value="Nayan Baruwa" data-select2-id="7">Nayan Baruwa
                                                        </option>
                                                        <option value="Akash Choudhury" data-select2-id="8">Akash
                                                            Choudhury
                                                        </option>
                                                        <option value="Alay Chaudang" data-select2-id="9">Alay Chaudang
                                                        </option>
                                                        <option value="Angad Chauhan Anjana" data-select2-id="10">Angad
                                                            Chauhan
                                                            Anjana</option>
                                                        <option value="Dhananjay Dhakad" data-select2-id="11">Dhananjay
                                                            Dhakad
                                                        </option>
                                                        <option value="Introniumz" data-select2-id="12">Introniumz
                                                        </option>
                                                        <option value="Mrs. Ananya" data-select2-id="13">Mrs. Ananya
                                                        </option>
                                                        <option value="Nazmul Hoque" data-select2-id="14">Nazmul Hoque
                                                        </option>
                                                        <option value="Projuri Ghosh" data-select2-id="15">Projuri Ghosh
                                                        </option>
                                                        <option value="Radhika Yadav" data-select2-id="16">Radhika Yadav
                                                        </option>
                                                        <option value="Sanjit roy" data-select2-id="17">Sanjit roy
                                                        </option>
                                                        <option value="Amlan Saharia" data-select2-id="18">Amlan Saharia
                                                        </option>
                                                        <option value="Jyoti Sharma" data-select2-id="19">Jyoti Sharma
                                                        </option>
                                                        <option value="Rajan Bedardi" data-select2-id="20">Rajan Bedardi
                                                        </option>
                                                        <option value="Zubeen Garg" data-select2-id="21">Zubeen Garg
                                                        </option>
                                                        <option value="Ravi Raja" data-select2-id="22">Ravi Raja
                                                        </option>
                                                        <option value="LiZA" data-select2-id="23">LiZA</option>
                                                        <option value="Sanjit Ray" data-select2-id="24">Sanjit Ray
                                                        </option>
                                                        <option value="Antra Singh Priyanka" data-select2-id="25">Antra
                                                            Singh
                                                            Priyanka</option>
                                                        <option value="Deeplina Deka" data-select2-id="26">Deeplina Deka
                                                        </option>
                                                        <option value="Aparajita Chakraborty" data-select2-id="27">
                                                            Aparajita
                                                            Chakraborty</option>
                                                        <option value="Anjali" data-select2-id="28">Anjali</option>
                                                        <option value="Mohan Raj" data-select2-id="29">Mohan Raj
                                                        </option>
                                                        <option value="Hridoy" data-select2-id="30">Hridoy</option>
                                                        <option value="Akhlima" data-select2-id="31">Akhlima</option>
                                                        <option value="Reema Bharti" data-select2-id="32">Reema Bharti
                                                        </option>
                                                        <option value="Yogesh" data-select2-id="33">Yogesh</option>
                                                        <option value="Rup Choudhury" data-select2-id="34">Rup Choudhury
                                                        </option>
                                                        <option value="Saddam Hussain" data-select2-id="35">Saddam
                                                            Hussain
                                                        </option>
                                                        <option value="Niraj Raja" data-select2-id="36">Niraj Raja
                                                        </option>
                                                        <option value="Abdul Halim" data-select2-id="37">Abdul Halim
                                                        </option>
                                                        <option value="Faruk" data-select2-id="38">Faruk</option>
                                                        <option value="Anil Sahni" data-select2-id="39">Anil Sahni
                                                        </option>
                                                        <option value="Deepak Dilwar" data-select2-id="40">Deepak Dilwar
                                                        </option>
                                                        <option value="Sanjeev Raj" data-select2-id="41">Sanjeev Raj
                                                        </option>
                                                        <option value="Ajit Raj" data-select2-id="42">Ajit Raj</option>
                                                        <option value="Satish Tiwari" data-select2-id="43">Satish Tiwari
                                                        </option>
                                                        <option value="Chayanika Bhuyan" data-select2-id="44">Chayanika
                                                            Bhuyan
                                                        </option>
                                                        <option value="Subasana Dutta" data-select2-id="45">Subasana
                                                            Dutta
                                                        </option>
                                                        <option value="Kamlesh Sahani" data-select2-id="46">Kamlesh
                                                            Sahani
                                                        </option>
                                                        <option value="Papori Gogoi" data-select2-id="47">Papori Gogoi
                                                        </option>
                                                        <option value="Rajashree Saikia" data-select2-id="48">Rajashree
                                                            Saikia
                                                        </option>
                                                        <option value="Rakesh Reeyan" data-select2-id="49">Rakesh Reeyan
                                                        </option>
                                                        <option value="Ailita Kashyap" data-select2-id="50">Ailita
                                                            Kashyap
                                                        </option>
                                                        <option value="Deep Raaj" data-select2-id="51">Deep Raaj
                                                        </option>
                                                        <option value="Vishal Babu" data-select2-id="52">Vishal Babu
                                                        </option>
                                                        <option value="Santosh Raj" data-select2-id="53">Santosh Raj
                                                        </option>
                                                        <option value="Kuldeep Kamal" data-select2-id="54">Kuldeep Kamal
                                                        </option>
                                                        <option value="Abhishek Bhojpuriya" data-select2-id="55">
                                                            Abhishek
                                                            Bhojpuriya
                                                        </option>
                                                        <option value="Rohit Bhojpuriya" data-select2-id="56">Rohit
                                                            Bhojpuriya
                                                        </option>
                                                        <option value="Aarti Bhardwaj" data-select2-id="57">Aarti
                                                            Bhardwaj
                                                        </option>
                                                        <option value="Arti Bhardwaj" data-select2-id="58">Arti Bhardwaj
                                                        </option>
                                                        <option value="Amin" data-select2-id="59">Amin</option>
                                                        <option value="Ravindra Raj" data-select2-id="60">Ravindra Raj
                                                        </option>
                                                        <option value="Sunny Raj" data-select2-id="61">Sunny Raj
                                                        </option>
                                                        <option value="Anil Sahani" data-select2-id="62">Anil Sahani
                                                        </option>
                                                        <option value="Vicky Vishal" data-select2-id="63">Vicky Vishal
                                                        </option>
                                                        <option value="Suraj Sawariya" data-select2-id="64">Suraj
                                                            Sawariya
                                                        </option>
                                                        <option value="Nisha Raj" data-select2-id="65">Nisha Raj
                                                        </option>
                                                        <option value="Rishu Raj" data-select2-id="66">Rishu Raj
                                                        </option>
                                                        <option value="Dependra Lahiri" data-select2-id="67">Dependra
                                                            Lahiri
                                                        </option>
                                                        <option value="Rahul Deewana" data-select2-id="68">Rahul Deewana
                                                        </option>
                                                        <option value="Sagar Premi" data-select2-id="69">Sagar Premi
                                                        </option>
                                                        <option value="Sujit Deewana" data-select2-id="70">Sujit Deewana
                                                        </option>
                                                        <option value="Pradeep Sahani" data-select2-id="71">Pradeep
                                                            Sahani
                                                        </option>
                                                        <option value="Amit Sahani" data-select2-id="72">Amit Sahani
                                                        </option>
                                                        <option value="Babu Baruah" data-select2-id="73">Babu Baruah
                                                        </option>
                                                        <option value="Shikha Sahani" data-select2-id="74">Shikha Sahani
                                                        </option>
                                                        <option value="Jiya Jigar" data-select2-id="75">Jiya Jigar
                                                        </option>
                                                        <option value="Rupa Raj" data-select2-id="76">Rupa Raj</option>
                                                        <option value="Naina Malhotra" data-select2-id="77">Naina
                                                            Malhotra
                                                        </option>
                                                        <option value="Amita Rani" data-select2-id="78">Amita Rani
                                                        </option>
                                                        <option value="Sanjeev Premi" data-select2-id="79">Sanjeev Premi
                                                        </option>
                                                        <option value="Baby Raj" data-select2-id="80">Baby Raj</option>
                                                        <option value="Ramashankar ray" data-select2-id="81">Ramashankar
                                                            ray
                                                        </option>
                                                        <option value="Bhushan Bihari" data-select2-id="82">Bhushan
                                                            Bihari
                                                        </option>
                                                        <option value="Sapna Kashyap" data-select2-id="83">Sapna Kashyap
                                                        </option>
                                                        <option value="Mousumi Kakoty" data-select2-id="84">Mousumi
                                                            Kakoty
                                                        </option>
                                                        <option value="Ajay Raj Balamua" data-select2-id="85">Ajay Raj
                                                            Balamua
                                                        </option>
                                                        <option value="Jonab Ali" data-select2-id="86">Jonab Ali
                                                        </option>
                                                        <option value="Krishna Rajbhar" data-select2-id="87">Krishna
                                                            Rajbhar
                                                        </option>
                                                        <option value="Kakumoni Saikia" data-select2-id="88">Kakumoni
                                                            Saikia
                                                        </option>
                                                        <option value="Nishu Arya" data-select2-id="89">Nishu Arya
                                                        </option>
                                                        <option value="Archana Raj" data-select2-id="90">Archana Raj
                                                        </option>
                                                        <option value="Nirmali Das" data-select2-id="91">Nirmali Das
                                                        </option>
                                                        <option value="Anand Bihari" data-select2-id="92">Anand Bihari
                                                        </option>
                                                        <option value="Kajal Kashyap" data-select2-id="93">Kajal Kashyap
                                                        </option>
                                                        <option value="Amir H" data-select2-id="94">Amir H</option>
                                                        <option value="Dharmendra Nirala" data-select2-id="95">
                                                            Dharmendra
                                                            Nirala
                                                        </option>
                                                        <option value="Surekha Chhetri" data-select2-id="96">Surekha
                                                            Chhetri
                                                        </option>
                                                        <option value="Ujala Sahani" data-select2-id="97">Ujala Sahani
                                                        </option>
                                                        <option value="Bidhan Laskar" data-select2-id="98">Bidhan Laskar
                                                        </option>
                                                        <option value="Pompi Pallavi" data-select2-id="99">Pompi Pallavi
                                                        </option>
                                                        <option value="Pradeep Chauhan" data-select2-id="100">Pradeep
                                                            Chauhan
                                                        </option>
                                                        <option value="Riya Yadav" data-select2-id="101">Riya Yadav
                                                        </option>
                                                        <option value="Mukesh Rajbhar" data-select2-id="102">Mukesh
                                                            Rajbhar
                                                        </option>
                                                        <option value="Gudiya Raj" data-select2-id="103">Gudiya Raj
                                                        </option>
                                                        <option value="Kallol Roy" data-select2-id="104">Kallol Roy
                                                        </option>
                                                        <option value="Bilkis Inam" data-select2-id="105">Bilkis Inam
                                                        </option>
                                                        <option value="Prabir Sarkar" data-select2-id="106">Prabir
                                                            Sarkar
                                                        </option>
                                                        <option value="Monowar Hussain" data-select2-id="107">Monowar
                                                            Hussain
                                                        </option>
                                                        <option value="Sanghati Das" data-select2-id="108">Sanghati Das
                                                        </option>
                                                        <option value="Joymoti Roy" data-select2-id="109">Joymoti Roy
                                                        </option>
                                                        <option value="Mofizur Rahman" data-select2-id="110">Mofizur
                                                            Rahman
                                                        </option>
                                                        <option value="Anamika Roy" data-select2-id="111">Anamika Roy
                                                        </option>
                                                        <option value="Rimal Daimari" data-select2-id="112">Rimal
                                                            Daimari
                                                        </option>
                                                        <option value="Manash Hazarika" data-select2-id="113">Manash
                                                            Hazarika
                                                        </option>
                                                        <option value="Gautam Roy" data-select2-id="114">Gautam Roy
                                                        </option>
                                                        <option value="Anurupa Roy" data-select2-id="115">Anurupa Roy
                                                        </option>
                                                        <option value="Zubeen Hussain" data-select2-id="116">Zubeen
                                                            Hussain
                                                        </option>
                                                        <option value="Karabi Roy" data-select2-id="117">Karabi Roy
                                                        </option>
                                                        <option value="Monika Debi" data-select2-id="118">Monika Debi
                                                        </option>
                                                        <option value="Ramkrishna Bhakat" data-select2-id="119">
                                                            Ramkrishna
                                                            Bhakat
                                                        </option>
                                                        <option value="Srimanta Mondal" data-select2-id="120">Srimanta
                                                            Mondal
                                                        </option>
                                                        <option value="Anuwar Hussain" data-select2-id="121">Anuwar
                                                            Hussain
                                                        </option>
                                                        <option value="Kandarpa Roy" data-select2-id="122">Kandarpa Roy
                                                        </option>
                                                        <option value="Joyshree" data-select2-id="123">Joyshree</option>
                                                        <option value="Zehi Islam" data-select2-id="124">Zehi Islam
                                                        </option>
                                                        <option value="Mallika Saikia" data-select2-id="125">Mallika
                                                            Saikia
                                                        </option>
                                                        <option value="Manjusree Das" data-select2-id="126">Manjusree
                                                            Das
                                                        </option>
                                                        <option value="Palash Choudhury" data-select2-id="127">Palash
                                                            Choudhury
                                                        </option>
                                                        <option value="Mausam Baruah" data-select2-id="128">Mausam
                                                            Baruah
                                                        </option>
                                                        <option value="Riyan Saikia" data-select2-id="129">Riyan Saikia
                                                        </option>
                                                        <option value="Hiron Hazarika" data-select2-id="130">Hiron
                                                            Hazarika
                                                        </option>
                                                        <option value="Anusuya Das" data-select2-id="131">Anusuya Das
                                                        </option>
                                                        <option value="Nibedita Roy" data-select2-id="132">Nibedita Roy
                                                        </option>
                                                        <option value="Kriti Kashyap" data-select2-id="133">Kriti
                                                            Kashyap
                                                        </option>
                                                        <option value="Rebojit Raj" data-select2-id="134">Rebojit Raj
                                                        </option>
                                                        <option value="Gitali Devi" data-select2-id="135">Gitali Devi
                                                        </option>
                                                        <option value="Bebilon Rabha" data-select2-id="136">Bebilon
                                                            Rabha
                                                        </option>
                                                        <option value="Renita Rabha" data-select2-id="137">Renita Rabha
                                                        </option>
                                                        <option value="Nituron Gogoi" data-select2-id="138">Nituron
                                                            Gogoi
                                                        </option>
                                                        <option value="Vishal R Yadav" data-select2-id="139">Vishal R
                                                            Yadav
                                                        </option>
                                                        <option value="Shahrukh Prayash" data-select2-id="140">Shahrukh
                                                            Prayash
                                                        </option>
                                                        <option value="Dharitri Ray" data-select2-id="141">Dharitri Ray
                                                        </option>
                                                        <option value="Gunja Gagan" data-select2-id="142">Gunja Gagan
                                                        </option>
                                                        <option value="Amites" data-select2-id="143">Amites</option>
                                                        <option value="Samir Sinmoy" data-select2-id="144">Samir Sinmoy
                                                        </option>
                                                        <option value="Jeet Koch" data-select2-id="145">Jeet Koch
                                                        </option>
                                                        <option value="Gitika Barman" data-select2-id="146">Gitika
                                                            Barman
                                                        </option>
                                                        <option value="Pranjal Medhi" data-select2-id="147">Pranjal
                                                            Medhi
                                                        </option>
                                                        <option value="Pranjit Borpatra" data-select2-id="148">Pranjit
                                                            Borpatra
                                                        </option>
                                                        <option value="Bassthetic" data-select2-id="149">Bassthetic
                                                        </option>
                                                        <option value="Sabin Barman" data-select2-id="150">Sabin Barman
                                                        </option>
                                                        <option value="Majoni Barman" data-select2-id="151">Majoni
                                                            Barman
                                                        </option>
                                                        <option value="Various Artists" data-select2-id="152">Various
                                                            Artists
                                                        </option>
                                                        <option value="Hamen Ray" data-select2-id="153">Hamen Ray
                                                        </option>
                                                        <option value="Monika Roy" data-select2-id="154">Monika Roy
                                                        </option>
                                                        <option value="Kishori Mauryavanshi" data-select2-id="155">
                                                            Kishori
                                                            Mauryavanshi</option>
                                                        <option value="HIROK" data-select2-id="156">HIROK</option>
                                                        <option value="Parikkhit Barman" data-select2-id="157">Parikkhit
                                                            Barman
                                                        </option>
                                                        <option value="Sujan Khan" data-select2-id="158">Sujan Khan
                                                        </option>
                                                        <option value="Guddu Babu" data-select2-id="159">Guddu Babu
                                                        </option>
                                                        <option value="Arvind Lakhimpuriya" data-select2-id="160">Arvind
                                                            Lakhimpuriya</option>
                                                        <option value="Priti Singh Akshara" data-select2-id="161">Priti
                                                            Singh
                                                            Akshara</option>
                                                        <option value="Amit Sahni" data-select2-id="162">Amit Sahni
                                                        </option>
                                                        <option value="Vicky Kalita" data-select2-id="163">Vicky Kalita
                                                        </option>
                                                        <option value="Shweta Bhardwaj" data-select2-id="164">Shweta
                                                            Bhardwaj
                                                        </option>
                                                        <option value="Sant Ji Sharma" data-select2-id="165">Sant Ji
                                                            Sharma
                                                        </option>
                                                        <option value="Ayub Khan" data-select2-id="166">Ayub Khan
                                                        </option>
                                                        <option value="Happy Chetia" data-select2-id="167">Happy Chetia
                                                        </option>
                                                        <option value="Nituron" data-select2-id="168">Nituron</option>
                                                        <option value="Indrani Talukdar" data-select2-id="169">Indrani
                                                            Talukdar
                                                        </option>
                                                        <option value="Uma Singh Chauhan" data-select2-id="170">Uma
                                                            Singh
                                                            Chauhan
                                                        </option>
                                                        <option value="Vivek Shakya" data-select2-id="171">Vivek Shakya
                                                        </option>
                                                        <option value="Hasan (Twenty2)" data-select2-id="172">Hasan
                                                            (Twenty2)
                                                        </option>
                                                        <option value="Channel Mix ZaMaN" data-select2-id="173">Channel
                                                            Mix
                                                            ZaMaN
                                                        </option>
                                                        <option value="Arijit Nath" data-select2-id="174">Arijit Nath
                                                        </option>
                                                        <option value="Ladi Singh Chauhan" data-select2-id="175">Ladi
                                                            Singh
                                                            Chauhan
                                                        </option>
                                                        <option value="Nitin Sahani" data-select2-id="176">Nitin Sahani
                                                        </option>
                                                        <option value="Zaman" data-select2-id="177">Zaman</option>
                                                        <option value="Sunita Sawri" data-select2-id="178">Sunita Sawri
                                                        </option>
                                                        <option value="Rohit Nishad" data-select2-id="179">Rohit Nishad
                                                        </option>
                                                        <option value="Khushboo Pandey" data-select2-id="180">Khushboo
                                                            Pandey
                                                        </option>
                                                        <option value="Aamin Khan" data-select2-id="181">Aamin Khan
                                                        </option>
                                                        <option value="Mosharaf Hossain" data-select2-id="182">Mosharaf
                                                            Hossain
                                                        </option>
                                                        <option value="Atique Islam" data-select2-id="183">Atique Islam
                                                        </option>
                                                        <option value="Sahid Vai" data-select2-id="184">Sahid Vai
                                                        </option>
                                                        <option value="Bharat Bedardi" data-select2-id="185">Bharat
                                                            Bedardi
                                                        </option>
                                                        <option value="Nilam Niranjan" data-select2-id="186">Nilam
                                                            Niranjan
                                                        </option>
                                                        <option value="Samir Barman" data-select2-id="187">Samir Barman
                                                        </option>
                                                        <option value="Arvind Gold" data-select2-id="188">Arvind Gold
                                                        </option>
                                                        <option value="Shahid Bhai" data-select2-id="189">Shahid Bhai
                                                        </option>
                                                        <option value="Saniya Sangam" data-select2-id="190">Saniya
                                                            Sangam
                                                        </option>
                                                        <option value="Preetyrekha Borah" data-select2-id="191">
                                                            Preetyrekha
                                                            Borah
                                                        </option>
                                                        <option value="Dharitri Sharma" data-select2-id="192">Dharitri
                                                            Sharma
                                                        </option>
                                                        <option value="Imran Hussain" data-select2-id="193">Imran
                                                            Hussain
                                                        </option>
                                                        <option value="Babon Bornil" data-select2-id="194">Babon Bornil
                                                        </option>
                                                        <option value="Rinkumoni kalita" data-select2-id="195">Rinkumoni
                                                            kalita
                                                        </option>
                                                        <option value="Parbin Sultana" data-select2-id="196">Parbin
                                                            Sultana
                                                        </option>
                                                        <option value="Mohibul Khan" data-select2-id="197">Mohibul Khan
                                                        </option>
                                                        <option value="Razibul Mollah" data-select2-id="198">Razibul
                                                            Mollah
                                                        </option>
                                                        <option value="Vikas Deewana" data-select2-id="199">Vikas
                                                            Deewana
                                                        </option>
                                                        <option value="Majoni Das" data-select2-id="200">Majoni Das
                                                        </option>
                                                        <option value="Gibchhi Bharti" data-select2-id="201">Gibchhi
                                                            Bharti
                                                        </option>
                                                        <option value="Vicky Nishad" data-select2-id="202">Vicky Nishad
                                                        </option>
                                                        <option value="Kriti Raj" data-select2-id="203">Kriti Raj
                                                        </option>
                                                        <option value="Kiran Rani" data-select2-id="204">Kiran Rani
                                                        </option>
                                                        <option value="Chandan Lal Bedardi" data-select2-id="205">
                                                            Chandan
                                                            Lal
                                                            Bedardi</option>
                                                        <option value="Atul Barman" data-select2-id="206">Atul Barman
                                                        </option>
                                                        <option value="Rp Singh Kishan" data-select2-id="207">Rp Singh
                                                            Kishan
                                                        </option>
                                                        <option value="Jalandhar Premi" data-select2-id="208">Jalandhar
                                                            Premi
                                                        </option>
                                                        <option value="Rashid Rajdhani" data-select2-id="209">Rashid
                                                            Rajdhani
                                                        </option>
                                                        <option value="Aar Yes Sharma" data-select2-id="210">Aar Yes
                                                            Sharma
                                                        </option>
                                                        <option value="Monirul Islam" data-select2-id="211">Monirul
                                                            Islam
                                                        </option>
                                                        <option value="Hasan Twenty2" data-select2-id="212">Hasan
                                                            Twenty2
                                                        </option>
                                                        <option value="Rahul Garg" data-select2-id="213">Rahul Garg
                                                        </option>
                                                        <option value="Suman Suhana" data-select2-id="214">Suman Suhana
                                                        </option>
                                                        <option value="Nirbhita Borah" data-select2-id="215">Nirbhita
                                                            Borah
                                                        </option>
                                                        <option value="Jayanta Neog" data-select2-id="216">Jayanta Neog
                                                        </option>
                                                        <option value="Tinku Khan" data-select2-id="217">Tinku Khan
                                                        </option>
                                                        <option value="Gudiya Rai" data-select2-id="218">Gudiya Rai
                                                        </option>
                                                        <option value="Kushal Badyakar" data-select2-id="219">Kushal
                                                            Badyakar
                                                        </option>
                                                        <option value="Niranjana Hazarika" data-select2-id="220">
                                                            Niranjana
                                                            Hazarika
                                                        </option>
                                                        <option value="Nandita Hajong" data-select2-id="221">Nandita
                                                            Hajong
                                                        </option>
                                                        <option value="Neha Raj" data-select2-id="222">Neha Raj</option>
                                                        <option value="Neky Bul" data-select2-id="223">Neky Bul</option>
                                                        <option value="Akhil Alen" data-select2-id="224">Akhil Alen
                                                        </option>
                                                        <option value="Rakhi Ray" data-select2-id="225">Rakhi Ray
                                                        </option>
                                                        <option value="Sikendra Yadav" data-select2-id="226">Sikendra
                                                            Yadav
                                                        </option>
                                                        <option value="Kolom Bhaari" data-select2-id="227">Kolom Bhaari
                                                        </option>
                                                        <option value="Deep" data-select2-id="228">Deep</option>
                                                        <option value="Navajit" data-select2-id="229">Navajit</option>
                                                        <option value="Dipjyoti Das" data-select2-id="230">Dipjyoti Das
                                                        </option>
                                                        <option value="Bandita Kashyap" data-select2-id="231">Bandita
                                                            Kashyap
                                                        </option>
                                                        <option value="Hasu Official" data-select2-id="232">Hasu
                                                            Official
                                                        </option>
                                                        <option value="Sourav Raag" data-select2-id="233">Sourav Raag
                                                        </option>
                                                        <option value="Spilina D Sangma" data-select2-id="234">Spilina D
                                                            Sangma
                                                        </option>
                                                        <option value="Umar Faruk" data-select2-id="235">Umar Faruk
                                                        </option>
                                                        <option value="Anindita Baruah Sharma" data-select2-id="236">
                                                            Anindita Baruah
                                                            Sharma</option>
                                                        <option value="Sohn Aelia" data-select2-id="237">Sohn Aelia
                                                        </option>
                                                        <option value="Kamal Ray" data-select2-id="238">Kamal Ray
                                                        </option>
                                                        <option value="Bongo Mental" data-select2-id="239">Bongo Mental
                                                        </option>
                                                        <option value="MC Freak" data-select2-id="240">MC Freak</option>
                                                        <option value="Fokkor" data-select2-id="241">Fokkor</option>
                                                        <option value="Lil Stuart" data-select2-id="242">Lil Stuart
                                                        </option>
                                                        <option value="YUNGXIETY" data-select2-id="243">YUNGXIETY
                                                        </option>
                                                        <option value="shine" data-select2-id="244">shine</option>
                                                        <option value="Mustak Hussain" data-select2-id="245">Mustak
                                                            Hussain
                                                        </option>
                                                        <option value="Nitish Masala" data-select2-id="246">Nitish
                                                            Masala
                                                        </option>
                                                        <option value="Arupom Bhat" data-select2-id="247">Arupom Bhat
                                                        </option>
                                                        <option value="Baul Sarowar" data-select2-id="248">Baul Sarowar
                                                        </option>
                                                        <option value="Debolina Adhikari" data-select2-id="249">Debolina
                                                            Adhikari
                                                        </option>
                                                        <option value="Nishantt" data-select2-id="250">Nishantt</option>
                                                        <option value="Nazib" data-select2-id="251">Nazib</option>
                                                        <option value="Tanmay Jadhav" data-select2-id="252">Tanmay
                                                            Jadhav
                                                        </option>
                                                        <option value="Aayush Karma" data-select2-id="253">Aayush Karma
                                                        </option>
                                                        <option value="Raju Thakur" data-select2-id="254">Raju Thakur
                                                        </option>
                                                        <option value="Soni Priyanka" data-select2-id="255">Soni
                                                            Priyanka
                                                        </option>
                                                        <option value="Mantu Hira" data-select2-id="256">Mantu Hira
                                                        </option>
                                                        <option value="Amir Raja" data-select2-id="257">Amir Raja
                                                        </option>
                                                        <option value="Sania Sangam" data-select2-id="258">Sania Sangam
                                                        </option>
                                                        <option value="Anisha Yadav" data-select2-id="259">Anisha Yadav
                                                        </option>
                                                        <option value="Dhadkan Yadav" data-select2-id="260">Dhadkan
                                                            Yadav
                                                        </option>
                                                        <option value="Mokaddes Ali" data-select2-id="261">Mokaddes Ali
                                                        </option>
                                                        <option value="AG Anjit" data-select2-id="262">AG Anjit</option>
                                                        <option value="Rohit Rasiya" data-select2-id="263">Rohit Rasiya
                                                        </option>
                                                        <option value="Tanu Janvi" data-select2-id="264">Tanu Janvi
                                                        </option>
                                                        <option value="Sonami singh" data-select2-id="265">Sonami singh
                                                        </option>
                                                        <option value="Rinku Rangeela" data-select2-id="266">Rinku
                                                            Rangeela
                                                        </option>
                                                        <option value="Mk Joy" data-select2-id="267">Mk Joy</option>
                                                        <option value="Kakali Das" data-select2-id="268">Kakali Das
                                                        </option>
                                                        <option value="Mim Hossain" data-select2-id="269">Mim Hossain
                                                        </option>
                                                        <option value="Projuri" data-select2-id="270">Projuri</option>
                                                        <option value="Akash Nitin Babu" data-select2-id="271">Akash
                                                            Nitin
                                                            Babu
                                                        </option>
                                                        <option value="Bacchan Bedardi" data-select2-id="272">Bacchan
                                                            Bedardi
                                                        </option>
                                                        <option value="Arohan Bordoloi" data-select2-id="273">Arohan
                                                            Bordoloi
                                                        </option>
                                                        <option value="Manakhjyoti" data-select2-id="274">Manakhjyoti
                                                        </option>
                                                        <option value="Ismail Mondal" data-select2-id="275">Ismail
                                                            Mondal
                                                        </option>
                                                        <option value="Chandan Raj" data-select2-id="276">Chandan Raj
                                                        </option>
                                                        <option value="Sabbu Sargam" data-select2-id="277">Sabbu Sargam
                                                        </option>
                                                        <option value="Rajaram Choudhary" data-select2-id="278">Rajaram
                                                            Choudhary
                                                        </option>
                                                        <option value="Putuli Brahma" data-select2-id="279">Putuli
                                                            Brahma
                                                        </option>
                                                        <option value="HD Sohel Vai" data-select2-id="280">HD Sohel Vai
                                                        </option>
                                                        <option value="Biki Kashyap" data-select2-id="281">Biki Kashyap
                                                        </option>
                                                        <option value="Badshah Bhai" data-select2-id="282">Badshah Bhai
                                                        </option>
                                                        <option value="Deba Geetz" data-select2-id="283">Deba Geetz
                                                        </option>
                                                        <option value="Sajan Suhana" data-select2-id="284">Sajan Suhana
                                                        </option>
                                                        <option value="Nuralom" data-select2-id="285">Nuralom</option>
                                                        <option value="Rakesh Yadav Monu" data-select2-id="286">Rakesh
                                                            Yadav
                                                            Monu
                                                        </option>
                                                        <option value="Arjun Nishad" data-select2-id="287">Arjun Nishad
                                                        </option>
                                                        <option value="Neep Jyoti" data-select2-id="288">Neep Jyoti
                                                        </option>
                                                        <option value="Arman Dewan" data-select2-id="289">Arman Dewan
                                                        </option>
                                                        <option value="Neel Sagar" data-select2-id="290">Neel Sagar
                                                        </option>
                                                        <option value="Dhanada Kunwar" data-select2-id="291">Dhanada
                                                            Kunwar
                                                        </option>
                                                        <option value="Biju Nath" data-select2-id="292">Biju Nath
                                                        </option>
                                                        <option value="Rakesh Rowdy" data-select2-id="293">Rakesh Rowdy
                                                        </option>
                                                        <option value="Angad Anjana" data-select2-id="294">Angad Anjana
                                                        </option>
                                                        <option value="Tulsi Raj" data-select2-id="295">Tulsi Raj
                                                        </option>
                                                        <option value="Diganta Dev Choudhury" data-select2-id="296">
                                                            Diganta
                                                            Dev
                                                            Choudhury</option>
                                                        <option value="Vineet Mallik" data-select2-id="297">Vineet
                                                            Mallik
                                                        </option>
                                                        <option value="Nazir Khan" data-select2-id="298">Nazir Khan
                                                        </option>
                                                        <option value="Sonia Acharya" data-select2-id="299">Sonia
                                                            Acharya
                                                        </option>
                                                        <option value="Angshuman Dewan" data-select2-id="300">Angshuman
                                                            Dewan
                                                        </option>
                                                        <option value="Mamuni" data-select2-id="301">Mamuni</option>
                                                        <option value="Deep Jyoti Deka" data-select2-id="302">Deep Jyoti
                                                            Deka
                                                        </option>
                                                        <option value="Sunita Raj" data-select2-id="303">Sunita Raj
                                                        </option>
                                                        <option value="Chandu Chanchal" data-select2-id="304">Chandu
                                                            Chanchal
                                                        </option>
                                                        <option value="Rubel" data-select2-id="305">Rubel</option>
                                                        <option value="Rohit Sawariya" data-select2-id="306">Rohit
                                                            Sawariya
                                                        </option>
                                                        <option value="Sunita Sawari" data-select2-id="307">Sunita
                                                            Sawari
                                                        </option>
                                                        <option value="Ishwar Chauhan" data-select2-id="308">Ishwar
                                                            Chauhan
                                                        </option>
                                                        <option value="Daroga Julmi Nishad" data-select2-id="309">Daroga
                                                            Julmi
                                                            Nishad</option>
                                                        <option value="Shashi Sona" data-select2-id="310">Shashi Sona
                                                        </option>
                                                        <option value="Ajay Nishad" data-select2-id="311">Ajay Nishad
                                                        </option>
                                                        <option value="Akhilesh Ahishak" data-select2-id="312">Akhilesh
                                                            Ahishak
                                                        </option>
                                                        <option value="Lalman Sahani" data-select2-id="313">Lalman
                                                            Sahani
                                                        </option>
                                                        <option value="Jakirul Hoque" data-select2-id="314">Jakirul
                                                            Hoque
                                                        </option>
                                                        <option value="Angad Anjana Chauhan" data-select2-id="315">Angad
                                                            Anjana
                                                            Chauhan</option>
                                                        <option value="Mollah Bhai" data-select2-id="316">Mollah Bhai
                                                        </option>
                                                        <option value="Mojaharul" data-select2-id="317">Mojaharul
                                                        </option>
                                                        <option value="ANTRA SHING" data-select2-id="318">ANTRA SHING
                                                        </option>
                                                        <option value="TAMIM" data-select2-id="319">TAMIM</option>
                                                        <option value="Anjit Raj" data-select2-id="320">Anjit Raj
                                                        </option>
                                                        <option value="Janam Hajong" data-select2-id="321">Janam Hajong
                                                        </option>
                                                        <option value="Sushinandan Hajong" data-select2-id="322">
                                                            Sushinandan
                                                            Hajong
                                                        </option>
                                                        <option value="Niraj Chanchal" data-select2-id="323">Niraj
                                                            Chanchal
                                                        </option>
                                                        <option value="Moner Ali" data-select2-id="324">Moner Ali
                                                        </option>
                                                        <option value="Seuj Kalita" data-select2-id="325">Seuj Kalita
                                                        </option>
                                                        <option value="Lasit Gupta" data-select2-id="326">Lasit Gupta
                                                        </option>
                                                        <option value="Kriti Kashayap" data-select2-id="327">Kriti
                                                            Kashayap
                                                        </option>
                                                        <option value="HIMANGSU BARO" data-select2-id="328">HIMANGSU
                                                            BARO
                                                        </option>
                                                        <option value="Nazmira Khatun" data-select2-id="329">Nazmira
                                                            Khatun
                                                        </option>
                                                        <option value="Dhananjay Deewana" data-select2-id="330">
                                                            Dhananjay
                                                            Deewana
                                                        </option>
                                                        <option value="Seju Kalita" data-select2-id="331">Seju Kalita
                                                        </option>
                                                        <option value="Mamuni Khatun" data-select2-id="332">Mamuni
                                                            Khatun
                                                        </option>
                                                        <option value="Bebilon Dangdong" data-select2-id="333">Bebilon
                                                            Dangdong
                                                        </option>
                                                        <option value="Pensy Dolpa" data-select2-id="334">Pensy Dolpa
                                                        </option>
                                                        <option value="Mainul Hoque" data-select2-id="335">Mainul Hoque
                                                        </option>
                                                        <option value="Rahul Rangeela" data-select2-id="336">Rahul
                                                            Rangeela
                                                        </option>
                                                        <option value="Nojrul Hoque" data-select2-id="337">Nojrul Hoque
                                                        </option>
                                                        <option value="Runu Rajbongshi" data-select2-id="338">Runu
                                                            Rajbongshi
                                                        </option>
                                                        <option value="Roshan Sahani" data-select2-id="339">Roshan
                                                            Sahani
                                                        </option>
                                                        <option value="Shukur Ali" data-select2-id="340">Shukur Ali
                                                        </option>
                                                        <option value="Ruchi Gorakhpuriya" data-select2-id="341">Ruchi
                                                            Gorakhpuriya
                                                        </option>
                                                        <option value="Hima" data-select2-id="342">Hima</option>
                                                        <option value="Rimli Das" data-select2-id="343">Rimli Das
                                                        </option>
                                                        <option value="Zahid Hussain" data-select2-id="344">Zahid
                                                            Hussain
                                                        </option>
                                                        <option value="Dhunu Dutta" data-select2-id="345">Dhunu Dutta
                                                        </option>
                                                        <option value="Mrigen Bornil" data-select2-id="346">Mrigen
                                                            Bornil
                                                        </option>
                                                        <option value="SYD Hasan" data-select2-id="347">SYD Hasan
                                                        </option>
                                                        <option value="Rukshana" data-select2-id="348">Rukshana</option>
                                                        <option value="Puhita Das" data-select2-id="349">Puhita Das
                                                        </option>
                                                        <option value="Aditya Tiger" data-select2-id="350">Aditya Tiger
                                                        </option>
                                                        <option value="Ravi Raja Bharti" data-select2-id="351">Ravi Raja
                                                            Bharti
                                                        </option>
                                                        <option value="BisWa" data-select2-id="352">BisWa</option>
                                                        <option value="Prativa Das Kalita" data-select2-id="353">Prativa
                                                            Das
                                                            Kalita
                                                        </option>
                                                        <option value="Rinki Das" data-select2-id="354">Rinki Das
                                                        </option>
                                                        <option value="Rahul Thakuria" data-select2-id="355">Rahul
                                                            Thakuria
                                                        </option>
                                                        <option value="DaX DiiiP" data-select2-id="356">DaX DiiiP
                                                        </option>
                                                        <option value="Sayeeda Begum" data-select2-id="357">Sayeeda
                                                            Begum
                                                        </option>
                                                        <option value="Sens3i" data-select2-id="358">Sens3i</option>
                                                        <option value="Sonali Chauhan" data-select2-id="359">Sonali
                                                            Chauhan
                                                        </option>
                                                        <option value="Pradeep Dulara" data-select2-id="360">Pradeep
                                                            Dulara
                                                        </option>
                                                        <option value="Jey Islam" data-select2-id="361">Jey Islam
                                                        </option>
                                                        <option value="Najmira Khatun" data-select2-id="362">Najmira
                                                            Khatun
                                                        </option>
                                                        <option value="Jolil Mollah" data-select2-id="363">Jolil Mollah
                                                        </option>
                                                        <option value="Ashique Zahan" data-select2-id="364">Ashique
                                                            Zahan
                                                        </option>
                                                        <option value="Nazibul Rahman" data-select2-id="365">Nazibul
                                                            Rahman
                                                        </option>
                                                        <option value="NJ HAQUE" data-select2-id="366">NJ HAQUE</option>
                                                        <option value="Trisha Talukdar" data-select2-id="367">Trisha
                                                            Talukdar
                                                        </option>
                                                        <option value="Bidur Mingma Chetree" data-select2-id="368">Bidur
                                                            Mingma
                                                            Chetree</option>
                                                        <option value="Bidur Mingam Chetree" data-select2-id="369">Bidur
                                                            Mingam
                                                            Chetree</option>
                                                        <option value="Anand Dehati" data-select2-id="370">Anand Dehati
                                                        </option>
                                                        <option value="Guddu Saj" data-select2-id="371">Guddu Saj
                                                        </option>
                                                        <option value="Yuvaraj Kashyap" data-select2-id="372">Yuvaraj
                                                            Kashyap
                                                        </option>
                                                        <option value="Meher Jamal" data-select2-id="373">Meher Jamal
                                                        </option>
                                                        <option value="Fulbar Khan" data-select2-id="374">Fulbar Khan
                                                        </option>
                                                        <option value="Bijuli Ray" data-select2-id="375">Bijuli Ray
                                                        </option>
                                                        <option value="DEEPAK LAL SINGHA." data-select2-id="376">DEEPAK
                                                            LAL
                                                            SINGHA.
                                                        </option>
                                                        <option value="Ab Siddique" data-select2-id="377">Ab Siddique
                                                        </option>
                                                        <option value="Sonu Premi Deewana" data-select2-id="378">Sonu
                                                            Premi
                                                            Deewana
                                                        </option>
                                                        <option value="Saiful Islam" data-select2-id="379">Saiful Islam
                                                        </option>
                                                        <option value="SAM Bangla" data-select2-id="380">SAM Bangla
                                                        </option>
                                                        <option value="BRO AR" data-select2-id="381">BRO AR</option>
                                                        <option value="HUNTER" data-select2-id="382">HUNTER</option>
                                                        <option value="Fayaz Khan" data-select2-id="383">Fayaz Khan
                                                        </option>
                                                        <option value="Sahidul Islam" data-select2-id="384">Sahidul
                                                            Islam
                                                        </option>
                                                        <option value="FUL DAS" data-select2-id="385">FUL DAS</option>
                                                        <option value="Samiksha Sharma" data-select2-id="386">Samiksha
                                                            Sharma
                                                        </option>
                                                        <option value="Ramesh Bhai" data-select2-id="387">Ramesh Bhai
                                                        </option>
                                                        <option value="Debjani Shil" data-select2-id="388">Debjani Shil
                                                        </option>
                                                        <option value="Jubi" data-select2-id="389">Jubi</option>
                                                        <option value="SK Dhubri" data-select2-id="390">SK Dhubri
                                                        </option>
                                                        <option value="Polash Gogoi" data-select2-id="391">Polash Gogoi
                                                        </option>
                                                        <option value="Nandita" data-select2-id="392">Nandita</option>
                                                        <option value="Raang Raang" data-select2-id="393">Raang Raang
                                                        </option>
                                                        <option value="Kolombhari" data-select2-id="394">Kolombhari
                                                        </option>
                                                        <option value="Kingdou" data-select2-id="395">Kingdou</option>
                                                        <option value="Atrayee" data-select2-id="396">Atrayee</option>
                                                        <option value="Aadrika" data-select2-id="397">Aadrika</option>
                                                        <option value="Himanshu Garg" data-select2-id="398">Himanshu
                                                            Garg
                                                        </option>
                                                        <option value="SM Indian Brother's" data-select2-id="399">SM
                                                            Indian
                                                            Brother's</option>
                                                        <option value="ABHIGYAN BASUMATARY" data-select2-id="400">
                                                            ABHIGYAN
                                                            BASUMATARY</option>
                                                        <option value="Satyajit Kalita" data-select2-id="401">Satyajit
                                                            Kalita
                                                        </option>
                                                        <option value="Kushal Dwivedi" data-select2-id="402">Kushal
                                                            Dwivedi
                                                        </option>
                                                        <option value="Sanjit Roy" data-select2-id="403">Sanjit Roy
                                                        </option>
                                                        <option value="Shorifa" data-select2-id="404">Shorifa</option>
                                                        <option value="Gyana Ranjan Parida" data-select2-id="405">Gyana
                                                            Ranjan
                                                            Parida</option>
                                                        <option value="Kabi Shahin Alam" data-select2-id="406">Kabi
                                                            Shahin
                                                            Alam
                                                        </option>
                                                        <option value="Sagar Pariyar" data-select2-id="407">Sagar
                                                            Pariyar
                                                        </option>
                                                        <option value="Girish Sahani" data-select2-id="408">Girish
                                                            Sahani
                                                        </option>
                                                        <option value="Shahin Nur" data-select2-id="409">Shahin Nur
                                                        </option>
                                                        <option value="Sahil Faruqi" data-select2-id="410">Sahil Faruqi
                                                        </option>
                                                        <option value="Rini Yoginaath" data-select2-id="411">Rini
                                                            Yoginaath
                                                        </option>
                                                        <option value="Asmit Babu" data-select2-id="412">Asmit Babu
                                                        </option>
                                                        <option value="Mofida Moon" data-select2-id="413">Mofida Moon
                                                        </option>
                                                        <option value="Mrigen Barnil" data-select2-id="414">Mrigen
                                                            Barnil
                                                        </option>
                                                        <option value="Manik Khan" data-select2-id="415">Manik Khan
                                                        </option>
                                                        <option value="Hemen Das" data-select2-id="416">Hemen Das
                                                        </option>
                                                        <option value="Pashan Ali" data-select2-id="417">Pashan Ali
                                                        </option>
                                                        <option value="Khanna Azamgarhiya" data-select2-id="418">Khanna
                                                            Azamgarhiya
                                                        </option>
                                                        <option value="Priyanka Nishad" data-select2-id="419">Priyanka
                                                            Nishad
                                                        </option>
                                                        <option value="Ajeet Sahani" data-select2-id="420">Ajeet Sahani
                                                        </option>
                                                        <option value="Pushpa Raj Dolly" data-select2-id="421">Pushpa
                                                            Raj
                                                            Dolly
                                                        </option>
                                                        <option value="Dharmendra Gond" data-select2-id="422">Dharmendra
                                                            Gond
                                                        </option>
                                                        <option value="Sudhir Sai" data-select2-id="423">Sudhir Sai
                                                        </option>
                                                        <option value="Abhishek Diljale" data-select2-id="424">Abhishek
                                                            Diljale
                                                        </option>
                                                        <option value="Ankita Sarkar" data-select2-id="425">Ankita
                                                            Sarkar
                                                        </option>
                                                        <option value="Bikash Deep" data-select2-id="426">Bikash Deep
                                                        </option>
                                                        <option value="Polash Fagun" data-select2-id="427">Polash Fagun
                                                        </option>
                                                        <option value="Monoj Monjit" data-select2-id="428">Monoj Monjit
                                                        </option>
                                                        <option value="Akash Rahul" data-select2-id="429">Akash Rahul
                                                        </option>
                                                        <option value="Neelabh Neehan" data-select2-id="430">Neelabh
                                                            Neehan
                                                        </option>
                                                        <option value="Bitupan Das" data-select2-id="431">Bitupan Das
                                                        </option>
                                                        <option value="Gaurav GV" data-select2-id="432">Gaurav GV
                                                        </option>
                                                        <option value="Papori" data-select2-id="433">Papori</option>
                                                        <option value="Sahil Faruqui" data-select2-id="434">Sahil
                                                            Faruqui
                                                        </option>
                                                        <option value="Romen Roy" data-select2-id="435">Romen Roy
                                                        </option>
                                                        <option value="Zakir H" data-select2-id="436">Zakir H</option>
                                                        <option value="Anupa Roy" data-select2-id="437">Anupa Roy
                                                        </option>
                                                        <option value="Zustin Gogoi" data-select2-id="438">Zustin Gogoi
                                                        </option>
                                                        <option value="Pandit Sagar Goswami" data-select2-id="439">
                                                            Pandit
                                                            Sagar
                                                            Goswami</option>
                                                        <option value="Dablu Najariya" data-select2-id="440">Dablu
                                                            Najariya
                                                        </option>
                                                        <option value="Muksut Musical" data-select2-id="441">Muksut
                                                            Musical
                                                        </option>
                                                        <option value="Ritam Deka" data-select2-id="442">Ritam Deka
                                                        </option>
                                                        <option value="Baby Rabha" data-select2-id="443">Baby Rabha
                                                        </option>
                                                        <option value="Utjwal Kyshap" data-select2-id="444">Utjwal
                                                            Kyshap
                                                        </option>
                                                        <option value="Abinash Gupta" data-select2-id="445">Abinash
                                                            Gupta
                                                        </option>
                                                        <option value="Arnab Krypton" data-select2-id="446">Arnab
                                                            Krypton
                                                        </option>
                                                        <option value="Muhammad Fazlul Korim" data-select2-id="447">
                                                            Muhammad
                                                            Fazlul
                                                            Korim</option>
                                                        <option value="Xewali Deka" data-select2-id="448">Xewali Deka
                                                        </option>
                                                        <option value="Biraj Roy" data-select2-id="449">Biraj Roy
                                                        </option>
                                                        <option value="Bikash Munda" data-select2-id="450">Bikash Munda
                                                        </option>
                                                        <option value="Nunusing Karmakar" data-select2-id="451">Nunusing
                                                            Karmakar
                                                        </option>
                                                        <option value="Jonab" data-select2-id="452">Jonab</option>
                                                    </select>

                                                </div>

                                            </div>
                                        </div>
                                        <!-- primary author  -->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                                                    <label for="validationCustom02"
                                                        class="form-label  pe-2">Author</label>
                                                    <input type="text" class="form-control"
                                                        aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-sm" name="author">

                                                </div>

                                            </div>
                                        </div>
                                        <!-- for composer  -->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                                                    <label for="validationCustom02"
                                                        class="form-label required pe-2">Composer<i
                                                            class="fa-solid fa-circle-question "
                                                            style="color: #0860f7;"></i></label>
                                                    <input type="text" class="form-control"
                                                        aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-sm" name="composer">

                                                </div>

                                            </div>
                                        </div>
                                        <!-- for arranger  -->
                                        <div class="row">
                                            <div class="col-md-4">

                                                <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                                                    <label for="validationCustom02"
                                                        class="form-label  pe-2">Arranger</label>
                                                    <input type="text" class="form-control"
                                                        aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-sm" name="arranger">

                                                </div>

                                            </div>
                                        </div>
                                        <!-- for pline-->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                                                    <label for="validationCustom02"
                                                        class="form-label pe-2">Pline</label>
                                                    <input type="text" class="form-control"
                                                        aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-sm" name="pline">

                                                </div>

                                            </div>
                                        </div>
                                        <!-- for production year  -->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                                                    <label for="validationCustom02"
                                                        class="form-label pe-2 required">Production
                                                        year<i class="fa-solid fa-circle-question "
                                                            style="color: #0860f7;"></i></label>
                                                    <select class="form-select" name="productionYear" required
                                                        id="easyEntryEditForm-productionYear-0" tabindex="16">
                                                        <option value="">- Select a year -</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2009">2009</option>
                                                        <option value="2008">2008</option>
                                                        <option value="2007">2007</option>
                                                        <option value="2006">2006</option>
                                                        <option value="2005">2005</option>
                                                        <option value="2004">2004</option>
                                                        <option value="2003">2003</option>
                                                        <option value="2002">2002</option>
                                                        <option value="2001">2001</option>
                                                        <option value="2000">2000</option>
                                                        <option value="1999">1999</option>
                                                        <option value="1998">1998</option>
                                                        <option value="1997">1997</option>
                                                        <option value="1996">1996</option>
                                                        <option value="1995">1995</option>
                                                        <option value="1994">1994</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1992">1992</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1990">1990</option>
                                                        <option value="1989">1989</option>
                                                        <option value="1988">1988</option>
                                                        <option value="1987">1987</option>
                                                        <option value="1986">1986</option>
                                                        <option value="1985">1985</option>
                                                        <option value="1984">1984</option>
                                                        <option value="1983">1983</option>
                                                        <option value="1982">1982</option>
                                                        <option value="1981">1981</option>
                                                        <option value="1980">1980</option>
                                                        <option value="1979">1979</option>
                                                        <option value="1978">1978</option>
                                                        <option value="1977">1977</option>
                                                        <option value="1976">1976</option>
                                                        <option value="1975">1975</option>
                                                        <option value="1974">1974</option>
                                                        <option value="1973">1973</option>
                                                        <option value="1972">1972</option>
                                                        <option value="1971">1971</option>
                                                        <option value="1970">1970</option>
                                                        <option value="1969">1969</option>
                                                        <option value="1968">1968</option>
                                                        <option value="1967">1967</option>
                                                        <option value="1966">1966</option>
                                                        <option value="1965">1965</option>
                                                        <option value="1964">1964</option>
                                                        <option value="1963">1963</option>
                                                        <option value="1962">1962</option>
                                                        <option value="1961">1961</option>
                                                        <option value="1960">1960</option>
                                                        <option value="1959">1959</option>
                                                        <option value="1958">1958</option>
                                                        <option value="1957">1957</option>
                                                        <option value="1956">1956</option>
                                                        <option value="1955">1955</option>
                                                        <option value="1954">1954</option>
                                                        <option value="1953">1953</option>
                                                        <option value="1952">1952</option>
                                                        <option value="1951">1951</option>
                                                        <option value="1950">1950</option>
                                                        <option value="1949">1949</option>
                                                        <option value="1948">1948</option>
                                                        <option value="1947">1947</option>
                                                        <option value="1946">1946</option>
                                                        <option value="1945">1945</option>
                                                        <option value="1944">1944</option>
                                                        <option value="1943">1943</option>
                                                        <option value="1942">1942</option>
                                                        <option value="1941">1941</option>
                                                        <option value="1940">1940</option>
                                                        <option value="1939">1939</option>
                                                        <option value="1938">1938</option>
                                                        <option value="1937">1937</option>
                                                        <option value="1936">1936</option>
                                                        <option value="1935">1935</option>
                                                        <option value="1934">1934</option>
                                                        <option value="1933">1933</option>
                                                        <option value="1932">1932</option>
                                                        <option value="1931">1931</option>
                                                        <option value="1930">1930</option>
                                                        <option value="1929">1929</option>
                                                        <option value="1928">1928</option>
                                                        <option value="1927">1927</option>
                                                        <option value="1926">1926</option>
                                                        <option value="1925">1925</option>
                                                        <option value="1924">1924</option>
                                                        <option value="1923">1923</option>
                                                        <option value="1922">1922</option>
                                                        <option value="1921">1921</option>
                                                        <option value="1920">1920</option>
                                                        <option value="1919">1919</option>
                                                        <option value="1918">1918</option>
                                                        <option value="1917">1917</option>
                                                        <option value="1916">1916</option>
                                                        <option value="1915">1915</option>
                                                        <option value="1914">1914</option>
                                                        <option value="1913">1913</option>
                                                        <option value="1912">1912</option>
                                                        <option value="1911">1911</option>
                                                        <option value="1910">1910</option>
                                                        <option value="1909">1909</option>
                                                        <option value="1908">1908</option>
                                                        <option value="1907">1907</option>
                                                        <option value="1906">1906</option>
                                                        <option value="1905">1905</option>
                                                        <option value="1904">1904</option>
                                                        <option value="1903">1903</option>
                                                        <option value="1902">1902</option>
                                                        <option value="1901">1901</option>
                                                        <option value="1900">1900</option>
                                                    </select>

                                                </div>

                                            </div>
                                        </div>
                                        <!-- for publisher  -->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                                                    <label for="validationCustom02"
                                                        class="form-label  pe-2">Publisher</label>
                                                    <input type="text" class="form-control"
                                                        aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-sm" name="publisher">

                                                </div>

                                            </div>
                                        </div>
                                        <!-- for ISRC  -->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                                                    <label for="validationCustom02" class="form-label  pe-2">ISRC<i
                                                            class="fa-solid fa-circle-question "
                                                            style="color: #0860f7;"></i></label>
                                                    <input type="text" class="form-control"
                                                        aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-sm" name="ISRC">

                                                </div>

                                            </div>
                                        </div>
                                        <!-- for ask to generate an isrc  -->
                                        <div class="row">
                                            <div class="col-lg-12 d-flex">
                                                <p>Ask to generate an ISRC:</p>
                                                <div>
                                                    <input class=" form-check-input" type="radio" name="generate_isrc"
                                                        id="yes" value="yes">
                                                    <label class="form-check-label" for="yes">
                                                        Yes
                                                    </label>
                                                </div>

                                                <div>
                                                    <input class=" form-check-input" type="radio" name="generate_isrc"
                                                        id="no" value="no">
                                                    <label class="form-check-label" for="no">
                                                        No
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- for production year  -->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                                                    <label for="validationCustom02"
                                                        class="form-label required pe-2">Title<i
                                                            class="fa-solid fa-circle-question "
                                                            style="color: #0860f7;"></i></label>
                                                    <input type="text" class="form-control"
                                                        aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-sm">

                                                </div>

                                            </div>
                                        </div>
                                        <!-- for genre  -->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                                                    <label for="validationCustom02"
                                                        class="form-label pe-2 required">Genre
                                                    </label>
                                                    <select required id="mainGenre" class="form-select" name="genre" tabindex="6" >
        
            <option value="">- Select a genre -</option>
            <option value="African">African</option>
            <option value="Alternative">Alternative</option>
            <option value="Arabic">Arabic</option>
            <option value="Asian">Asian</option>
            <option value="Blues">Blues</option>
            <option value="Brazilian">Brazilian</option>
            <option value="Children Music">Children Music</option>
            <option value="Christian Gospel">Christian &amp; Gospel</option>
            <option value="Classical">Classical</option>
            <option value="Country">Country</option>
            <option value="Dance">Dance</option>
            <option value="Easy Listening">Easy Listening</option>
            <option value="Electronic">Electronic</option>
            <option value="Folk">Folk</option>
            <option value="Hip Hop/Rap">Hip Hop/Rap</option>
            <option value="Indian">Indian</option>
            <option value="Jazz">Jazz</option>
            <option value="Latin">Latin</option>
            <option value="Metal">Metal</option>
            <option value="Pop">Pop</option>
            <option value="R B/Soul">R&amp;B/Soul</option>
            <option value="Reggae">Reggae</option>
            <option value="Relaxation">Relaxation</option>
            <option value="Rock">Rock</option>
            <option value="Various">Various</option>
            <option value="World Music / Regional Folklore">World Music / Regional
                Folklore</option>
        </select>

                                                </div>

                                            </div>
                                        </div>
                                        <!-- for subgenre  -->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                                                    <label for="validationCustom02"
                                                        class="form-label pe-2 required">Subgenre
                                                    </label>
                                                    <select id="subgenre" class="form-select" name="subgenre" tabindex="7">
        <option value="1"> select subgenere</option>
        <option value="2">  subgenere</option>
        </select>
                                                </div>

                                            </div>
                                          
                                        </div>

                                      
                                        <!-- for rice  -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                          
                                                <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                                                    <label for="validationCustom02"
                                                        class="form-label pe-2 required">Price<i
                                                            class="fa-solid fa-circle-question "
                                                            style="color: #0860f7;"></i>
                                                    </label>
                                                    <select class="form-select" required 
                                                        id="easyEntryEditForm-idSaleType-0" tabindex="30" name="track_price">
                                                        <option value="">Please select...</option>
                                                        <option value="Back : 9₹ / 0.69$ / 0.98Sg$">Back : 9₹ / 0.69$ / 0.98Sg$</option>
                                                        <option value="Mid : 12₹ / 0.99$ / 1.28Sg$">Mid : 12₹ / 0.99$ / 1.28Sg$</option>
                                                        <option selected="selected" value="Front : 15₹ / 1.29$ /
                                                            1.48Sg$">Front : 15₹ / 1.29$ /
                                                            1.48Sg$
                                                        </option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- for producer catalog number  -->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="input-group input-group-sm mb-3 d-f lex align-items-center">
                                                    <label for="validationCustom02" class="form-label  pe-2">Producer
                                                        catalog number</label>
                                                    <input type="text" class="form-control"
                                                        aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-sm" name="Producer_catalog_number">

                                                </div>

                                            </div>
                                        </div>

                                        <!-- for parental advisory  -->
                                        <div class="row">
                                            <div class="col-lg-12 d-flex">
                                                <p class="required">For parental advisory: <i
                                                        class="fa-solid fa-circle-question "
                                                        style="color: #0860f7;"></i>
                                                </p>
                                                <div>
                                                    <input class=" form-check-input" type="radio" name="advisory"
                                                        id="yes" value="yes">
                                                    <label class="form-check-label" for="yes">
                                                        Yes
                                                    </label>
                                                </div>

                                                <div>
                                                    <input class=" form-check-input" type="radio" name="advisory"
                                                        id="no" value="no">
                                                    <label class="form-check-label" for="no">
                                                        No
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class=" form-check-input" type="radio" name="advisory"
                                                        id="no">
                                                    <label class="form-check-label" for="no">
                                                        Cleaned
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- for preview start  -->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                                                    <label for="validationCustom02" class="form-label  pe-2">Preview
                                                        start<i class="fa-solid fa-circle-question "
                                                            style="color: #0860f7;"></i></label>
                                                    <input type="text" class="form-control"
                                                        aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-sm" name="preview_start">

                                                </div>

                                            </div>
                                        </div>
                                        <!-- for track title language  -->
                                        <div class="col-lg-12">

                                            <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                                                <label for="validationCustom02" class="form-label pe-2 required">Track
                                                    title
                                                    language<i class="fa-solid fa-circle-question "
                                                        style="color: #0860f7;"></i>
                                                </label>
                                                <select class="form-select" name="metadataLanguage"
                                                    id="easyEntryEditForm-metadataLanguage-0" tabindex="36">
                                                    <option value="">Please select...</option>
                                                    <option value="OM">(Afan) Oromo</option>
                                                    <option value="AB">Abkhazian</option>
                                                    <option value="AA">Afar</option>
                                                    <option value="AF">Afrikaans</option>
                                                    <option value="SQ">Albanian</option>
                                                    <option value="AM">Amharic</option>
                                                    <option value="AR">Arabic</option>
                                                    <option value="HY">Armenian</option>
                                                    <option value="AS">Assamese</option>
                                                    <option value="AY">Aymara</option>
                                                    <option value="AZ">Azerbaijani</option>
                                                    <option value="BM">Bambara</option>
                                                    <option value="BA">Bashkir</option>
                                                    <option value="EU">Basque</option>
                                                    <option value="BN">Bengali, Bangla</option>
                                                    <option value="H8">Bhojpuri</option>
                                                    <option value="DZ">Bhutani</option>
                                                    <option value="BH">Bihari</option>
                                                    <option value="BI">Bislama</option>
                                                    <option value="I8">Bodo</option>
                                                    <option value="BR">Breton</option>
                                                    <option value="BG">Bulgarian</option>
                                                    <option value="MY">Burmese</option>
                                                    <option value="BE">Byelorussian</option>
                                                    <option value="KM">Cambodian</option>
                                                    <option value="Z3">Cantonese</option>
                                                    <option value="CA">Catalan</option>
                                                    <option value="H6">Chhattisgarhi</option>
                                                    <option value="ZH">Chinese</option>
                                                    <option value="Z1">Chinese (Simplified)</option>
                                                    <option value="Z2">Chinese (Traditional)</option>
                                                    <option value="CO">Corsican</option>
                                                    <option value="HR">Croatian</option>
                                                    <option value="CS">Czech</option>
                                                    <option value="DA">Danish</option>
                                                    <option value="I1">Dogri</option>
                                                    <option value="H2">Dogri</option>
                                                    <option value="NL">Dutch</option>
                                                    <option value="EN">English</option>
                                                    <option value="EO">Esperanto</option>
                                                    <option value="ET">Estonian</option>
                                                    <option value="FO">Faroese</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FI">Finnish</option>
                                                    <option value="FR">French</option>
                                                    <option value="FY">Frisian</option>
                                                    <option value="GL">Galician</option>
                                                    <option value="H5">Garhwali</option>
                                                    <option value="I9">Garo</option>
                                                    <option value="KA">Georgian</option>
                                                    <option value="DE">German</option>
                                                    <option value="EL">Greek</option>
                                                    <option value="KL">Greenlandic</option>
                                                    <option value="GN">Guarani</option>
                                                    <option value="GU">Gujarati</option>
                                                    <option value="HT">Haitian</option>
                                                    <option value="H4">Haryanvi</option>
                                                    <option value="HA">Hausa</option>
                                                    <option value="HE">Hebrew</option>
                                                    <option value="HI">Hindi</option>
                                                    <option value="HU">Hungarian</option>
                                                    <option value="IS">Icelandic</option>
                                                    <option value="ID">Indonesian</option>
                                                    <option value="IA">Interlingua</option>
                                                    <option value="IE">Interlingue</option>
                                                    <option value="IU">Inuktitut</option>
                                                    <option value="IK">Inupiak</option>
                                                    <option value="GA">Irish</option>
                                                    <option value="IT">Italian</option>
                                                    <option value="JA">Japanese</option>
                                                    <option value="JV">Javanese</option>
                                                    <option value="KN">Kannada</option>
                                                    <option value="KS">Kashmiri</option>
                                                    <option value="KK">Kazakh</option>
                                                    <option value="I2">Khasi</option>
                                                    <option value="RW">Kinyarwanda</option>
                                                    <option value="KY">Kirghiz</option>
                                                    <option value="RN">Kirundi</option>
                                                    <option value="J1">Kok Borok</option>
                                                    <option value="I3">Konkani</option>
                                                    <option value="H7">Konkani</option>
                                                    <option value="KO">Korean</option>
                                                    <option value="KU">Kurdish</option>
                                                    <option value="J2">Kutchi</option>
                                                    <option value="LO">Laothian</option>
                                                    <option value="LA">Latin</option>
                                                    <option value="LV">Latvian, Lettish</option>
                                                    <option value="LN">Lingala</option>
                                                    <option value="LT">Lithuanian</option>
                                                    <option value="MK">Macedonian</option>
                                                    <option value="I4">Maithili</option>
                                                    <option value="MG">Malagasy</option>
                                                    <option value="MS">Malay</option>
                                                    <option value="ML">Malayalam</option>
                                                    <option value="MT">Maltese</option>
                                                    <option value="I5">Manipuri</option>
                                                    <option value="MI">Maori</option>
                                                    <option value="MR">Marathi</option>
                                                    <option value="I6">Mizo</option>
                                                    <option value="MO">Moldavian</option>
                                                    <option value="MN">Mongolian</option>
                                                    <option value="NA">Nauru</option>
                                                    <option value="NE">Nepali</option>
                                                    <option value="NO">Norwegian</option>
                                                    <option value="OC">Occitan</option>
                                                    <option value="OR">Oriya</option>
                                                    <option value="PS">Pashto, Pushto</option>
                                                    <option value="FA">Persian</option>
                                                    <option value="PL">Polish</option>
                                                    <option value="PT">Portuguese</option>
                                                    <option value="PA">Punjabi</option>
                                                    <option value="QU">Quechua</option>
                                                    <option value="H1">Rajasthani</option>
                                                    <option value="RC">Reunionese</option>
                                                    <option value="RM">Rhaeto-Romance</option>
                                                    <option value="RO">Romanian</option>
                                                    <option value="RU">Russian</option>
                                                    <option value="SM">Samoan</option>
                                                    <option value="SG">Sangho</option>
                                                    <option value="SA">Sanskrit</option>
                                                    <option value="I7">Santali</option>
                                                    <option value="GD">Scots Gaelic</option>
                                                    <option value="SR">Serbian</option>
                                                    <option value="SH">Serbo-Croatian</option>
                                                    <option value="ST">Sesotho</option>
                                                    <option value="TN">Setswana</option>
                                                    <option value="SN">Shona</option>
                                                    <option value="SD">Sindhi</option>
                                                    <option value="SI">Sinhalese</option>
                                                    <option value="SS">Siswati</option>
                                                    <option value="SK">Slovak</option>
                                                    <option value="SL">Slovenian</option>
                                                    <option value="SO">Somali</option>
                                                    <option value="ES">Spanish</option>
                                                    <option value="SU">Sundanese</option>
                                                    <option value="SW">Swahili</option>
                                                    <option value="SV">Swedish</option>
                                                    <option value="TL">Tagalog</option>
                                                    <option value="TG">Tajik</option>
                                                    <option value="TA">Tamil</option>
                                                    <option value="TT">Tatar</option>
                                                    <option value="TE">Telugu</option>
                                                    <option value="TH">Thai</option>
                                                    <option value="BO">Tibetan</option>
                                                    <option value="TI">Tigrinya</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TS">Tsonga</option>
                                                    <option value="J3">Tulu</option>
                                                    <option value="TR">Turkish</option>
                                                    <option value="TK">Turkmen</option>
                                                    <option value="TW">Twi</option>
                                                    <option value="UG">Uighur</option>
                                                    <option value="UK">Ukrainian</option>
                                                    <option value="UR">Urdu</option>
                                                    <option value="UZ">Uzbek</option>
                                                    <option value="H3">Varhadi-Nagpuri</option>
                                                    <option value="VI">Vietnamese</option>
                                                    <option value="VO">Volapuk</option>
                                                    <option value="CY">Welsh</option>
                                                    <option value="WO">Wolof</option>
                                                    <option value="XH">Xhosa</option>
                                                    <option value="YI">Yiddish</option>
                                                    <option value="YO">Yoruba</option>
                                                    <option value="ZA">Zhuang</option>
                                                    <option value="ZU">Zulu</option>
                                                </select>

                                            </div>

                                        </div>
                                        <!-- for lyrics language  -->
                                        <div class="col-lg-12">
                                            <label for="validationCustom02" class="form-label pe-2 required">Lyrics
                                                language<i class="fa-solid fa-circle-question "
                                                    style="color: #0860f7;"></i>
                                            </label>
                                            <select class="form-select" name="idLyricsSelect"
                                                id="easyEntryEditForm-idLyricsSelect-0" tabindex="37">
                                                <option value="">Please select...</option>
                                                <option value="85">(Afan) Oromo</option>
                                                <option value="2">Abkhazian</option>
                                                <option value="1">Afar</option>
                                                <option value="3">Afrikaans</option>
                                                <option value="107">Albanian</option>
                                                <option value="4">Amharic</option>
                                                <option value="5">Arabic</option>
                                                <option value="46">Armenian</option>
                                                <option value="6">Assamese</option>
                                                <option value="7">Aymara</option>
                                                <option value="8">Azerbaijani</option>
                                                <option value="140">Bambara</option>
                                                <option value="9">Bashkir</option>
                                                <option value="29">Basque</option>
                                                <option value="14">Bengali, Bangla</option>
                                                <option value="150">Bhojpuri</option>
                                                <option value="23">Bhutani</option>
                                                <option value="12">Bihari</option>
                                                <option value="13">Bislama</option>
                                                <option value="163">Bodo</option>
                                                <option value="16">Breton</option>
                                                <option value="11">Bulgarian</option>
                                                <option value="79">Burmese</option>
                                                <option value="10">Byelorussian</option>
                                                <option value="59">Cambodian</option>
                                                <option value="153">Cantonese</option>
                                                <option value="17">Catalan</option>
                                                <option value="148">Chhattisgarhi</option>
                                                <option value="138">Chinese</option>
                                                <option value="151">Chinese (Simplified)</option>
                                                <option value="152">Chinese (Traditional)</option>
                                                <option value="18">Corsican</option>
                                                <option value="44">Croatian</option>
                                                <option value="19">Czech</option>
                                                <option value="21">Danish</option>
                                                <option value="156">Dogri</option>
                                                <option value="143">Dogri</option>
                                                <option value="82">Dutch</option>
                                                <option value="25">English</option>
                                                <option value="26">Esperanto</option>
                                                <option value="28">Estonian</option>
                                                <option value="33">Faroese</option>
                                                <option value="32">Fiji</option>
                                                <option value="31">Finnish</option>
                                                <option value="34">French</option>
                                                <option value="35">Frisian</option>
                                                <option value="38">Galician</option>
                                                <option value="146">Garhwali</option>
                                                <option value="164">Garo</option>
                                                <option value="56">Georgian</option>
                                                <option value="22">German</option>
                                                <option value="24">Greek</option>
                                                <option value="58">Greenlandic</option>
                                                <option value="39">Guarani</option>
                                                <option value="40">Gujarati</option>
                                                <option value="155">Haitian</option>
                                                <option value="145">Haryanvi</option>
                                                <option value="41">Hausa</option>
                                                <option value="42">Hebrew</option>
                                                <option value="43">Hindi</option>
                                                <option value="45">Hungarian</option>
                                                <option value="51">Icelandic</option>
                                                <option value="48">Indonesian</option>
                                                <option value="47">Interlingua</option>
                                                <option value="49">Interlingue</option>
                                                <option value="53">Inuktitut</option>
                                                <option value="50">Inupiak</option>
                                                <option value="36">Irish</option>
                                                <option value="52">Italian</option>
                                                <option value="54">Japanese</option>
                                                <option value="55">Javanese</option>
                                                <option value="60">Kannada</option>
                                                <option value="62">Kashmiri</option>
                                                <option value="57">Kazakh</option>
                                                <option value="157">Khasi</option>
                                                <option value="96">Kinyarwanda</option>
                                                <option value="64">Kirghiz</option>
                                                <option value="93">Kirundi</option>
                                                <option value="165">Kok Borok</option>
                                                <option value="158">Konkani</option>
                                                <option value="149">Konkani</option>
                                                <option value="61">Korean</option>
                                                <option value="63">Kurdish</option>
                                                <option value="166">Kutchi</option>
                                                <option value="67">Laothian</option>
                                                <option value="65">Latin</option>
                                                <option value="69">Latvian, Lettish</option>
                                                <option value="66">Lingala</option>
                                                <option value="68">Lithuanian</option>
                                                <option value="72">Macedonian</option>
                                                <option value="159">Maithili</option>
                                                <option value="70">Malagasy</option>
                                                <option value="77">Malay</option>
                                                <option value="73">Malayalam</option>
                                                <option value="78">Maltese</option>
                                                <option value="160">Manipuri</option>
                                                <option value="71">Maori</option>
                                                <option value="76">Marathi</option>
                                                <option value="161">Mizo</option>
                                                <option value="75">Moldavian</option>
                                                <option value="74">Mongolian</option>
                                                <option value="80">Nauru</option>
                                                <option value="81">Nepali</option>
                                                <option value="83">Norwegian</option>
                                                <option value="84">Occitan</option>
                                                <option value="86">Oriya</option>
                                                <option value="89">Pashto, Pushto</option>
                                                <option value="30">Persian</option>
                                                <option value="88">Polish</option>
                                                <option value="90">Portuguese</option>
                                                <option value="87">Punjabi</option>
                                                <option value="91">Quechua</option>
                                                <option value="141">Rajasthani</option>
                                                <option value="154">Reunionese</option>
                                                <option value="92">Rhaeto-Romance</option>
                                                <option value="94">Romanian</option>
                                                <option value="95">Russian</option>
                                                <option value="104">Samoan</option>
                                                <option value="99">Sangho</option>
                                                <option value="97">Sanskrit</option>
                                                <option value="162">Santali</option>
                                                <option value="37">Scots Gaelic</option>
                                                <option value="108">Serbian</option>
                                                <option value="100">Serbo-Croatian</option>
                                                <option value="110">Sesotho</option>
                                                <option value="121">Setswana</option>
                                                <option value="105">Shona</option>
                                                <option value="98">Sindhi</option>
                                                <option value="101">Sinhalese</option>
                                                <option value="109">Siswati</option>
                                                <option value="102">Slovak</option>
                                                <option value="103">Slovenian</option>
                                                <option value="106">Somali</option>
                                                <option value="27">Spanish</option>
                                                <option value="111">Sundanese</option>
                                                <option value="113">Swahili</option>
                                                <option value="112">Swedish</option>
                                                <option value="120">Tagalog</option>
                                                <option value="116">Tajik</option>
                                                <option value="114">Tamil</option>
                                                <option value="125">Tatar</option>
                                                <option value="115">Telugu</option>
                                                <option value="117">Thai</option>
                                                <option value="15">Tibetan</option>
                                                <option value="118">Tigrinya</option>
                                                <option value="122">Tonga</option>
                                                <option value="124">Tsonga</option>
                                                <option value="167">Tulu</option>
                                                <option value="123">Turkish</option>
                                                <option value="119">Turkmen</option>
                                                <option value="126">Twi</option>
                                                <option value="127">Uighur</option>
                                                <option value="128">Ukrainian</option>
                                                <option value="129">Urdu</option>
                                                <option value="130">Uzbek</option>
                                                <option value="144">Varhadi-Nagpuri</option>
                                                <option value="131">Vietnamese</option>
                                                <option value="132">Volapuk</option>
                                                <option value="20">Welsh</option>
                                                <option value="133">Wolof</option>
                                                <option value="134">Xhosa</option>
                                                <option value="135">Yiddish</option>
                                                <option value="136">Yoruba</option>
                                                <option value="137">Zhuang</option>
                                                <option value="139">Zulu</option>
                                            </select>
                                        </div>
                                        <!-- more info  -->
                                        <div class="col-lg-12 mt-2">
                                            <label for="exampleFormControlTextarea1" class="form-label">Lyrics<i
                                                    class="fa-solid fa-circle-question " style="color: #0860f7;"></i>
                                                <br><a href="">More
                                                    Info</a></label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="3" name="lyrics_information"></textarea>
                                        </div>
                                   
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                



                <!-- delete conformation model start  -->
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete this track ?
                                    <b>New track</b>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- delete conformation model end  -->
            </div>
          
            <!-- tracks content end  -->

            <!-- price content start  -->
            <div id="price" class="container tab-pane fade"><br>
            <form action="{{ route('release.update',$release->id) }}"  method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
                <div class="row my-5">
                    <div class="col-lg-12">
                        <div class="col-lg-8">
                            <label for=" validationCustom04" class="form-label d-flex">Choose a main price
                                tier<i class="fa-solid fa-circle-question" style="color: #0860f7;"></i></label>
                            <select class="form-select" id="validationCustom04" required name="main_price">
                                <option selected disablreleased value="">Choose a label</option>
                                <option value="Low Digital 45 : 1.29€">Low Digital 45 : 1.29€</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="upload-btn-audio px-4 py-1">save</button> 
</form>
            </div>
            <!-- price content end  -->

            <!-- territories content start  -->
           
            <div id="territories" class="container tab-pane fade"><br>
           <!--  <form action="{{ route('release.update',$release->id) }}"  method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
             
</form> -->

<div class="d-flex justify-content-end flex-column align-items-center mt-5">

        <div class="col-lg-12 d-flex justify-content-end px-5">
            <button class="btn btn-sm btn-primary" id="saveButton">Save</button>
        </div>


        <div class="d-flex">
            <div id="asia_country" aria-colspan="d-flex flex-column">
                <h1>Asia</h1>
                <div class="mb-4 d-flex gap-3">
                    <button class="btn-sm btn btn-outline-secondary" onclick="selectAllAsia()">Check All</button>
                    <button class="btn-sm btn btn-outline-secondary" onclick="unselectAllAsia()">Uncheck All</button>
                </div>
            </div>
            <div id="europe_country" class="d-flex flex-column">
                <h1>Europe</h1>
                <div class="mb-4 d-flex gap-3">
                    <button class="btn-sm btn btn-outline-secondary" onclick="selectAllEurope()">Check All</button>
                    <button class="btn-sm btn btn-outline-secondary" onclick="unselectAllEurope()">Uncheck All</button>
                </div>
            </div>
            <div id="africa_country" aria-colspan="d-flex flex-column">
                <h1>Africa</h1>
                <div class="mb-4 d-flex gap-3">
                    <button class="btn-sm btn btn-outline-secondary" onclick="selectAllAfrica()">Check All</button>
                    <button class="btn-sm btn btn-outline-secondary" onclick="unselectAllAfrica()">Uncheck All</button>
                </div>
            </div>
            <div>
                <div id="north_america_country" aria-colspan="d-flex flex-column">
                    <h1>North America</h1>
                    <div class="mb-4 d-flex gap-3">
                        <button class="btn-sm btn btn-outline-secondary" onclick="selectAllNorthAmerica()">Check
                            All</button>
                        <button class="btn-sm btn btn-outline-secondary" onclick="unselectAllNorthAmerica()">Uncheck
                            All</button>
                    </div>
                </div>
                <div class="mt-4" id="sounth_america_country" aria-colspan="d-flex flex-column">
                    <h1>South America</h1>
                    <div class="mb-4 d-flex gap-3">
                        <button class="btn-sm btn btn-outline-secondary" onclick="selectAllSouthAmerica()">Check
                            All</button>
                        <button class="btn-sm btn btn-outline-secondary" onclick="unselectAllSouthAmerica()">Uncheck
                            All</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
          
            <!-- territories content end  -->

            <!-- release-date content start  -->
            <div id="release-date" class="container tab-pane fade"><br>
            <form action="{{ route('release.update',$release->id) }}"  method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
                <div class="row my-5">
                    <div class="col-md-4">
                        <label for="validationCustom03" class="form-label required">Choose a live release date<i
                                class="fa-solid fa-circle-question ps-2" style="color: #0860f7;"></i></label>
                        <input type="date" class="form-control" id="validationCustom03" required name="live_release_date">
                    </div>

                 

                   
                </div>
                <button type="submit" class="upload-btn-audio px-4 py-1">save</button> 
</form>
            </div>
            <!-- release-date content end  -->

         

            <!-- submission content start  -->
            <div id="submission" class="container tab-pane fade"><br>
                <p class="error-box">Please correct all errors to submit your release</p>
                <!-- release information box start  -->
                <div>
                    <div class="mt-4">
                        <p class=" supportHeading">Release information <a href="realease_information.html"
                                class="error-btn px-3 py-2"><i class="fa-solid fa-triangle-exclamation pe-3"
                                    style="color: #fff;"></i>9
                                Error(s)</a></p>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-4 my-2">
                            <p class="blackText">
                                Title:
                                <span class="grayText">4th song</span>
                            </p>
                            <p class="blackText">
                                Version/Subtitle:
                                <span class="grayText">(empty)</span>
                            </p>
                            <p class="blackText">
                                Artist(s):
                                <span class="grayText">(empty)</span>
                            </p>
                            <p class="blackText">
                                Label:
                                <span class="grayText">(empty)</span>
                            </p>
                        </div>
                        <div class="col-md-4 my-2">
                            <p class="blackText">
                                Genre:
                                <span class="grayText">(empty)</span>
                            </p>
                            <p class="blackText">
                                Subgenre:
                                <span class="grayText">(empty)</span>
                            </p>
                            <p class="blackText">
                                Number of track(s):
                                <span class="grayText">2</span>
                            </p>
                        </div>
                        <div class="col-md-4 my-2">
                            <img class="w-25" src="./img/muic.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <!-- release information box end  -->
                <!-- price information box start  -->
                <div>
                    <div class="mt-4">
                        <p class=" supportHeading">Price <a href="price.html" class="error-btn px-3 py-2"><i
                                    class="fa-solid fa-triangle-exclamation pe-3" style="color: #fff;"></i>1
                                Error(s)</a></p>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-4 my-2">
                            <p class="blackText">
                                Main price:
                                <span class="grayText">(empty)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- price information box end  -->
                <!-- release date box start  -->
                <div>
                    <div class="mt-4">
                        <p class=" supportHeading">Release date <a href="release_date.html"
                                class="error-btn px-3 py-2"><i class="fa-solid fa-triangle-exclamation pe-3"
                                    style="color: #fff;"></i>1
                                Error(s)</a></p>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-4 my-2">
                            <p class="blackText">
                                Main release date:
                                <span class="grayText">(empty)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- release date box end  -->
                <!-- Territories box start  -->
                <div>
                    <div class="mt-4">
                        <p class=" supportHeading">Territories <a href="territories.html" class="details-btn px-3 py-2">
                                <i class="fa-regular fa-circle-check"></i>
                                Details</a></p>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-4 my-2">
                            <p class="blackText">
                                Your release is authorized in:
                                <span class="grayText">240 territories</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Territories box end  -->
                         
                <!-- table section start  -->
              
                <!-- table section end  -->
            </div>
            <!-- submission content end  -->
        </div>
        <!-- tab section end here  -->
    </div>
    <!-- model for upload cover start  -->
   <!-- model for upload cover start  -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" style="width: 80%;">
        <!-- part 1 start  -->
      
        <div class="modal-content" id="cover-page-1" style="display: block;">
            <div class="modal-header px-4">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Update The Cover</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="col-md-8">    
         
            <img src="/images/{{ $release->image }}" width="400px" height="400px">
           
        
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div style="overflow-x: scroll;">
                                @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
            <form action="{{ route('release.update',$release->id) }}"  method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
           
           
                <div class="row"> <br>   
                    <div class="col-md-6">
                        

                        <input type="file" name="image" class="form-control">
                    </div>     
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>     
                </div>
            </form>
             
            </div>
         
        </div>

    
    </div>
</div>
<!-- model for upload cover end  -->

@endsection