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
          <div>Shyiramo code  yu mukirisito afite
             <small>Amakuru Ku Mukiristo </small>
          </div>
       </div>
       <div class="container-fluid">
          <!-- DATATABLE DEMO 1-->

          <!-- DATATABLE DEMO 2-->
          <div class="card">
             <div class="card-header">
                <div class="card-title" style="text-align: center !important">Serch  Here</div>
                 </div>


                    <div class="row">

                        <div class="col-lg-3">
                        </div>

                        <div class="col-lg-6">
                            <div class="card">

                            <div class="form-group" style="margin: 12px !important">

                                <input type="text" class="form-control" id="code" name="code" required placeholder="2346">
                            </div>

                            <div class="form-group" style="margin: 22px !important">
                            <button id="searching" class=" form-control btn btn-primary" >Submit</button>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-3">
                        </div>
                    </div>


            </div>


          </div>
          <!-- DATATABLE DEMO 3-->

       </div>


       <div class="container-fluid">
        <!-- DATATABLE DEMO 1-->

        <!-- DATATABLE DEMO 2-->
        <div class="card">
           <div class="card-header">
              <div class="card-title">Host attendence</div>
              <div class="text-sm">This is the list Of the people Who Attended The Mess </div>
           </div>
           <div class="card-body" >
              <table class="table table-striped my-4 w-100"  >
                <p id="messa"></p>
                 <thead>
                    <tr>

                      <th>Amazina</th>
                      <th>Telefone</th>
                      <th>Nimero y'ikimuranga</th>
                      <th>Yaremerewe</th>
                      <th>Yaremerewe</th>
                    </tr>
                 </thead>
                 <tbody id="tesr">



                 </tbody>
              </table>

           </div>
        </div>
        <!-- DATATABLE DEMO 3-->

     </div>


    </div>

 </section>



@endsection

<script src="../asset/admin/js.js"></script>
@section('script')

@endsection
<script>


            $(document).on('click', '#searching', function(){

                        var value = document.getElementById("code").value;
                        var opt="";

                        $.ajax({
                            url:"{{ route('Searchcode') }}",
                            method:"POST",
                            data:{"_token": "{{ csrf_token() }}",value:value,},
                            success:function(data){

                                if (data.length !='0') {

                                                $count =0;
                                                for (let index = 0; index < data.length; index++) {
                                                opt+='<tr><td> <a href="Approve/'+data[index].id+'">'+data[index].name+'</a></td><td>'+data[index].phone+'</td><td >'+data[index].nid+'</td><td >'+data[index].Decision+'</td>'
                                                            '</tr'

                                                    $('#tesr').append(opt);
                                                }
                                            }else{
                                                 alert("nta muntu urimo ufite iyi code");
                                            }


                                },error: function(xhr, status, error) {
                                    var err = eval("(" + xhr.responseText + ")");

                                }
                                // $('#tesr').find('tr').remove();
                        })



                        var value = document.getElementById("code").value;
                        var mess="";

                        $.ajax({
                            url:"{{ route('Messlocation') }}",
                            method:"POST",
                            data:{"_token": "{{ csrf_token() }}",value:value,},
                            success:function(data){


                                if (data.length !='0') {
                                    for (let index = 0; index < data.length; index++) {
                                    mess+='<p>'+data[index].Hall_name+'</p>'


                                        $('#messa').append(mess);
                                    }
                                }else{
                                        alert("nta muntu urimo ufite iyi code");
                                }


                                },error: function(xhr, status, error) {
                                    var err = eval("(" + xhr.responseText + ")");
                                    console.log(err.message);
                                }

                        })
                        // $('#Sector').find('option').remove();
            });


</script>

