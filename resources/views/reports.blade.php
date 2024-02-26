  
@extends('layouts.master')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<section class="table_outer">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card border-0 shadow">
                        <div
                            class="card-header with-border d-flex justify-content-start align-items-center media_card_header">

                            <div class="container-fluid">
                           
                                <div class="row">
                                    <div class="col-md-4">
                                    <div class="form-group">
        <label>Start Date:</label>
        <div class="input-group mb-3">
            <input  type="date" id="startDate"  class="form-control" name="startDate" width="276" />
        </div>
    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
        <label>End Date:</label>
        <div class="input-group mb-3">
            <input type="date" class="form-control" id="endDate"  name="endDate" width="276" />
        </div>
    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
        <div class="input-group mb-3">
        <a id="exportBtn" class="btn btn-primary">Export</a>
        </div>
    </div>

                                    </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                       
   
 
    
 
    

                            <div class="table-responsive">
                                <table class="table table-hover table-striped table-borderless custom_table">
                                    <thead class="table-success">
                                        <tr>
                                            <th scope="col">
                                                
                                            </th>
                                            <th scope="col">Title
                                            </th>
                                            <th scope="col">media type</th>
                                            <th scope="col">main price</th>
                                            <th scope="col">feature Image</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($report as $item)
                                            <tr class="">
                                            <td>{{ $item->id }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>
                                                    {{ $item->media_type }}
                                                </td>

                                                <td> {{ $item->main_price }}</td>
                                                <td>
                                                    <ul class="persons single">
                                                        <li>
                                                            <a href="#">
                                                                <img src="https://picsum.photos/id/64/100/100"
                                                                    alt="Person" class="img-fluid">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                              
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', '#exportBtn', function() {
            var startDate = $('#startDate').val();
            var endDate = $('#endDate').val();
            var url = "{{ route('export-csv', ['startDate' => ':startDate', 'endDate' => ':endDate']) }}";

            url = url.replace(':startDate', startDate).replace(':endDate', endDate);

            $.ajax({
                url: url,
                type: 'get',
                success: function(response) {
                    window.location = url;
                }
            });
        });
       
      
    });
</script>

@endsection

