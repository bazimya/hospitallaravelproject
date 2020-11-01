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
          <div class="card">
             <div class="card-header">
                <div class="card-title" style="text-align: center !important">Creating Service</div>
                <div class="text-sm" style="text-align: center !important">To fill This form you will first create church and then fill the room it has and service according to the hall and time </div>
             </div>

                <form action="/CreateService" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <div class="row">

                        <div class="col-lg-3">
                        </div>

                        <div class="col-lg-6">
                            <div class="card">
                            <div class="form-group" style="margin: 12px !important">
                                <label for="name">Hitamo Parish:</label>
                                <select name="Parish" id="paruwasi" class="form-control">
                                    <option value=""> hitamo</option>
                                    @foreach ($church as $item)
                                <option value="{{$item->id}}">{{$item->Parish_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group" style="margin: 12px !important">
                                    <label for="phone">Hitamo aho basengera</label>
                                    <select name="hall"  id="hall" class="form-control">

                                    </select>

                            </div>
                            <div class="form-group" style="margin: 12px !important">
                                <label for="date">Itariki misa Izaberaho</label>
                                <input type="date" class="form-control" name="Date" required placeholder="Shiramo itariki ya misa">
                            </div>
                            <div class="form-group" style="margin: 12px !important">
                                <label for="date">Hitamo ururimi rwa misa</label>
                                <input type="text" class="form-control" name="lang" required placeholder="fr">
                            </div>
                            <div class="form-group" style="margin: 12px !important">
                                <label for="date">Hitamo Misa</label>
                                <input type="text" class="form-control" name="miss" required placeholder="Misa I ">
                            </div>
                            </div>
                            <div class="form-group" style="margin: 22px !important">
                            <button type="submit" class=" form-control btn btn-primary" >Submit</button>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-3">
                        </div>
                    </div>
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
 $('#paruwasi').change(function () {
                            var provinces = document.getElementById("paruwasi").value;
                            alert(provinces);
                            var opt="";
                                    $.ajax({
                                        url:"{{ route('paruwasi') }}",
                                        method:"POST",
                                        data:{"_token": "{{ csrf_token() }}",provinces:provinces,},
                                        success:function(result){

                                            if (result =="") {
                                                opt='  <option value="" class="default-opt">Ahobasengera ntiharimo</option>'
                                                alert("empty");
                                                $('#hall').append(opt);
                                            }else{
                                                for (var bazimya = 0; bazimya < result.length; bazimya++) {
                                                    opt+='<option value="'+result[bazimya].id+'" >'+result[bazimya].Hall_name+'</option>'

                                                }
                                                $('#hall').append(opt);
                                            }
                                            },error: function(xhr, status, error) {
                                                var err = eval("(" + xhr.responseText + ")");
                                            }

                                    })
                                    $('#hall').find('option').remove();
        });


        });
</script>

