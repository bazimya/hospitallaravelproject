@extends('layouts/admin')

@section('title')
 Insert Church| Dashboard
@endsection

@section('contain')
@if (Session::has('message'))
<div class="btn btn-success btn-lg btn-block">{{ Session::get('message') }}</div>
@endif


<section class="section-container">
    <!-- Page content-->
    <div class="content-wrapper">
       <div class="content-heading">
          <div>Welcome To Mess Attendences Please fill The form of the Church
             <small>Church Information </small>
          </div>
       </div>
       <div class="container-fluid">
          <!-- DATATABLE DEMO 1-->

          <!-- DATATABLE DEMO 2-->
          <div class="card"  style=" overflow: scroll !important ">
             <div class="card-header">
                <div class="card-title" style="text-align: center !important">Create New Church</div>
                <div class="text-sm">This Is The Form Of You Fill When Your Creating New Church</div>
             </div>

                <form action="/NewChurch" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Parish Name:</label>
                                <input type="text" class="form-control" placeholder="Enter P name" id="name" required name="name" >
                            </div>
                            <div class="form-group">
                                  <label for="phone">Parish Phone:</label>
                                  <input type="tel" class="form-control" placeholder="Enter tel" id="tel" required name="phone">
                            </div>
                            <div class="form-group">
                                <label for="email">Paris Email:</label>
                                <input type="text" class="form-control" placeholder="Enter email" id="email" name="email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="Province">Province :</label>
                                            <select name="Province"  class="form-control province-input" required id="province">
                                              <option value="" class="default-opt">Choose Province</option>
                                                @foreach ($province as $item)
                                                <option value="{{$item->id}}" >{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="District">District:</label>
                                            <select class="form-control distirict-input"  name="District" id="District"  required>
                                              <option value="" class="default-opt">Choose District / Hitamo Akarere</option>
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="Sector">Sector:</label>
                                        <select name="Sector"  class="form-control" requiredid="Sector" id="Sector" required >
                                            <option value="" class="default-opt">Choose Sector / Hitamo Sector</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Cell">Cell:</label>
                                         <select name="Cell" class="form-control" id="Cell" required>
                                            <option value="" class="default-opt">Choose Cell / Hitamo Cell</option>
                                        </select>
                                    </div>

                                </div>


                            </div>

                            <div class="form-group">
                                <label for="village">Village:</label>
                                <select name="village"  class="form-control" required id="Village" required>
                                    <option value="" class="default-opt">Choose Cell / Hitamo Cell</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
          </div>
          <!-- DATATABLE DEMO 3-->

       </div>
    </div>
 </section>

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('script')

@endsection
<script>
    $(document).ready(function() {

            // ende of first query
            $('#province').change(function () {
                            var provinces = document.getElementById("province").value;
                            var opt="";
                                    $.ajax({
                                        url:"{{ route('districts') }}",
                                        method:"POST",
                                        data:{"_token": "{{ csrf_token() }}",provinces:provinces,},
                                        success:function(result){
                                            if (result =="") {
                                                opt='  <option value="" class="default-opt">Choose Province</option>'
                                                alert("empty");
                                                $('#District').append(opt);
                                            }else{
                                                for (var bazimya = 0; bazimya < result.length; bazimya++) {
                                                    opt+='<option value="'+result[bazimya].id+'" >'+result[bazimya].name+'</option>'

                                                }
                                                $('#District').append(opt);
                                            }
                                            },error: function(xhr, status, error) {
                                                var err = eval("(" + xhr.responseText + ")");
                                            }

                                    })
                                    $('#District').find('option').remove();
        });
                // ende of first query province
$('#District').change(function () {
                    var value = document.getElementById("District").value;
                    var opt="";
                    $.ajax({
                        url:"{{ route('Sector') }}",
                        method:"POST",
                        data:{"_token": "{{ csrf_token() }}",value:value},
                        success:function(result){
                            if (result =="") {
                                opt='<option value="" class="default-opt">Choose Province</option>'
                                alert("empty");
                                $('#Sector').append(opt);
                            }else{
                                for (var bazimya = 0; bazimya < result.length; bazimya++) {
                                    opt+='<option value="'+result[bazimya].id+'" requide >'+result[bazimya].name+'</option>'

                                }
                                $('#Sector').append(opt);
                            }

                        },error: function(xhr, status, error) {
                            var err = eval("(" + xhr.responseText + ")");
                            alert(err.Message);
                        }

                     })
                    $('#Sector').find('option').remove();
                });

                  // ende of first query
                  $('#Sector').change(function () {
                            var provinces = document.getElementById("Sector").value;
                            var opt="";
                                    $.ajax({
                                        url:"{{ route('Cell') }}",
                                        method:"POST",
                                        data:{"_token": "{{ csrf_token() }}",provinces:provinces,},
                                        success:function(result){

                                            if (result =="") {
                                                opt='<option value="" class="default-opt">Choose Province</option>'

                                                $('#').append(opt);
                                            }else{
                                                for (var values = 0; values < result.length; values++) {
                                                    opt+='<option value="'+result[values].id+'" >'+result[values].name+'</option>'
                                                }
                                                $('#Cell').append(opt);
                                            }
                                            },error: function(xhr, status, error) {
                                                var err = eval("(" + xhr.responseText + ")");
                                            }
                                    })
                                    $('#Cell').find('option').remove();
                });
                // ende of first query province
                $('#Cell').change(function () {
                    var value = document.getElementById("Cell").value;
                    var opt="";
                    $.ajax({
                        url:"{{ route('village') }}",
                        method:"POST",
                        data:{"_token": "{{ csrf_token() }}",value:value},
                        success:function(result){

                            if (result =="") {
                                opt= document.getElementById("Cell").value;
                                $('#Village').append(opt);
                            }else{
                                for (var bazimya = 0; bazimya < result.length; bazimya++) {
                                    opt+='<option value="'+result[bazimya].id+'" requide >'+result[bazimya].name+'</option>'

                                }

                                $('#Village').append(opt);
                            }

                        },error: function(xhr, status, error) {
                            var err = eval("(" + xhr.responseText + ")");
                            alert(err.Message);
                        }
                    })
                    $('#Village').find('option').remove();
                });
        });
</script>

