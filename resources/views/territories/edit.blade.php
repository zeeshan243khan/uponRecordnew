@extends('layouts.master')

@section('content')

    <div class="container mt-3">
        <!-- tab section start form here -->
        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
                <a class="nav-link " data-bs-toggle="pill" href="#release_information">Release Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#upload">Upload</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="">Tracks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#price">Price</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="pill" href="">Territories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#release-date">Release Date</a>
            </li>
          
            
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#submission">Submission</a>
            </li>
        </ul>
        <form action="{{ route('territories.update') }}" class="row g-3 needs-validation d-flex align-items-center" method="POST" enctype="multipart/form-data"> 
        @csrf
        <div>
        <div>
           
        <div id="itemForm">
            <div class="item">
                <label for="green">Green</label>
                <input id="green" type="checkbox" value="Green" name="asia[]">
            </div>
            <div class="item">
                <label for="pink">Pink</label>
                <input id="pink" type="checkbox" value="Pink" name="asia[]">
            </div>
            <div class="item">
                <label for="yellow">Yellow</label>
                <input id="yellow" type="checkbox" value="Yellow" name="asia[]">
            </div>
            <div class="item">
                <label for="black">Black</label>
                <input id="black" type="checkbox" value="Black" name="asia[]">
            </div>
            <button id="selectAll">Select All</button>
            <button id="deSelectAll">Deselect All</button>
            <button id="submit">Save</button>
 

 <div id="asia"></div>
        </div>  
        
        </div>
      
        
        
    </div>
    <!-- country list start -->
    <div class="d-flex justify-content-end flex-column align-items-center mt-5">

        <div class="col-lg-12 d-flex justify-content-end px-5">
            <button type="submit" class="btn btn-sm btn-primary" id="saveButton">Save</button>
        </div>



        <div class="row">
            <div class="col-md-4">
                <div id="asia_country" aria-colspan="d-flex flex-column">
                    <h1 class="fs-5">Asia</h1>
                    <div class="mb-4 d-flex gap-3">
                        <a class="pe-auto" type="button" class="pe-auto" type="button" onclick="selectAllAsia()">Check
                            All</a>
                        <a class="pe-auto" type="button" class="pe-auto" type="button"
                            onclick="unselectAllAsia()">Uncheck
                            All</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div id="europe_country" class="d-flex flex-column">
                    <h1 class="fs-5">Europe</h1>
                    <div class="mb-4 d-flex gap-3">
                        <a class="pe-auto" type="button" class="pe-auto" type="button" onclick="selectAllEurope()">Check
                            All</a>
                        <a class="pe-auto" type="button" class="pe-auto" type="button"
                            onclick="unselectAllEurope()">Uncheck
                            All</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div id="africa_country" aria-colspan="d-flex flex-column">
                    <h1 class="fs-5">Africa</h1>
                    <div class="mb-4 d-flex gap-3">
                        <a class="pe-auto" type="button" class="pe-auto" type="button" onclick="selectAllAfrica()">Check
                            All</a>
                        <a class="pe-auto" type="button" class="pe-auto" type="button"
                            onclick="unselectAllAfrica()">Uncheck
                            All</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div>
                    <div class="mt-4" id="sounth_america_country" aria-colspan="d-flex flex-column">
                        <h1 class="fs-5">South America</h1>
                        <div class="mb-4 d-flex gap-3">
                            <a class="pe-auto" type="button" onclick="selectAllSouthAmerica()">Check
                                All</a>
                            <a class="pe-auto" type="button" onclick="unselectAllSouthAmerica()">Uncheck
                                All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="north_america_country" aria-colspan="d-flex flex-column">
                    <h1 class="fs-5">North America</h1>
                    <div class="mb-4 d-flex gap-3">
                        <a class="pe-auto" type="button" class="pe-auto" type="button"
                            onclick="selectAllNorthAmerica()">Check
                            All</a>
                        <a class="pe-auto" type="button" class="pe-auto" type="button"
                            onclick="unselectAllNorthAmerica()">Uncheck
                            All</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </form>
</div>
<script>
        var itemForm = document.getElementById('itemForm'); // getting the parent container of all the checkbox inputs
        var checkBoxes = itemForm.querySelectorAll('input[type="checkbox"]'); // get all the check box
        document.getElementById('submit').addEventListener('click', getData); //add a click event to the save button

        let result = [];

        function getData() { // this function will get called when the save button is clicked
            result = [];
            checkBoxes.forEach(item => { // loop all the checkbox item
                if (item.checked) {  //if the check box is checked
                    let data = {    // create an object
                        item: item.value,
                        selected: item.checked
                    }
                    result.push(data); //stored the objects to result array
                }
            })
            document.querySelector('.result').textContent = JSON.stringify(result); // display result
        }


        document.getElementById('selectAll').addEventListener('click', selectAll); //add a click event to the selectAll button
        document.getElementById('deSelectAll').addEventListener('click', deSelectAll); //add a click event to the deSelectAll button


        function selectAll() {
            checkBoxes.forEach(item => {
                item.checked = true;
            })
    }
    function deSelectAll() {
            checkBoxes.forEach(item => {
                item.checked = false;
            })
    }

    </script>

@endsection