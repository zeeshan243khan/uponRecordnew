@extends('layouts.master')

@section('content')

       

<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <div class="d-flex justify-content-between py-2">
            <p style="font-size: 20px; color: #000;">4th Song</p>
           <!--  <button class="upload-btn-audio px-4 py-1">Sartyrtyve</button> -->
        </div>
        <!-- tab navigation start  -->
        <ul class="d-flex gap-4 tab-navigation">
            <li>
                <a class="tab-links" style="background-color: #182444; color: #fff;" target="_blank"
                    href="realease_information.html">Release
                    information</a>
            </li>
            <li>
                <a class="tab-links" id="upload" href="">Upload</a>
            </li>
            <li>
                <a class="tab-links" href="track.html">Tracks</a>
            </li>
            <li>
                <a class="tab-links" href="price.html">Price</a>
            </li>
            <li>
                <a class="tab-links" href="territories.html">Territories</a>
            </li>
            <li>
                <a class="tab-links" href="release_date.html">Release-date</a>
            </li>
          
            <li>
                <a class="tab-links" href="submission.html">Submission</a>
            </li>
        </ul>
        <!-- tab navigation end  -->

        <!-- tab content start  -->
        <div>
             
       
            <div id="release_information" class="container"><br>
                <div class="row">
                    <!-- column first start  -->
                    <div class="col-lg-2 text-center mb-4">
                        <button class="mt-4 upload-btn-audio d-flex align-items-center py-2"
                            data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                class="fa-solid fa-cloud-arrow-up fs-5 me-2"></i>
                            Upload cover</button>
                    </div>
                    <!-- upload video -->
          <!--           <div style="overflow-x: scroll;">
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
                        

                        <input type="file" name="video" class="form-control">
                    </div>     
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>     
                </div>
            </form> -->
                    <!-- column second start  -->

                    <div class="col-lg-10">
                        <!-- form start  -->
                        <div style="overflow-x: scroll;">
                                @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
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
                                <input type="checkbox" name="checkbox-artist" id="checkbox-artist" value="">
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
                            <!-- Producer catalogue number input end  -->
                            <div class="d-flex justify-content-between py-2">
            <p style="font-size: 20px; color: #000;"></p>
            <button type="submit" class="upload-btn-audio px-4 py-1">save</button> 
        </div>
                        </form>
                        <!-- form end  -->
                    </div>
                    <!-- column second start  -->
                </div>
            </div>

        </div>
    </div>
    <!-- tab content end  -->
</div>

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