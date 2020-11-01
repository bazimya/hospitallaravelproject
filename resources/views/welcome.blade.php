
@extends('layouts.app')

@section('title')
Centre Saint Vincent Pallotti |home
@endsection

@section('content')
            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right">
                    <section class="tm-content">
                        <button type="button" class="btn btn-primary text-uppercase" data-toggle="modal" data-target="#exampleModal" style="background: #cbcccf !important; color: #000000 !important">
                            {{__("welcomepage.btnregistr")}}
                          </button>

                          @if (Session::has('message'))
                                <div class="btn btn-success btn-lg btn-block">{{ Session::get('message') }}</div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <h2 class="mb-5 tm-content-title" style="color: #cbcccf">{{__('welcomepage.headrequest')}}</h2>
                        <p class="mb-5" style="color: #cbcccf"> {{__('welcomepage.Message')}}</p>
                        <hr class="mb-5">
                     <!-- Button trigger modal -->
                  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{__("welcomepage.register")}} </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/Attendence" method="POST">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name"> {{__("welcomepage.Username")}}:</label>
                            <input type="text" class="form-control" placeholder="{{__("welcomepage.Username")}}" id="name" required name="name" >
                          </div>
                          <div class="form-group">
                              <label for="phone">{{__("welcomepage.Phone")}}:</label>
                              <input type="tel" class="form-control" placeholder="07..........." id="tel" required name="phone">
                            </div>
                            <div class="form-group">
                              <label for="email">{{__("welcomepage.Email")}}:</label>
                              <input type="text" class="form-control" placeholder=" {{__("welcomepage.Email")}}" id="email" name="email">
                            </div>
                            <div class="form-group">
                              <label for="nid">{{__("welcomepage.NID/PASSPORT")}}:</label>
                              <input type="text" class="form-control" placeholder="{{__("welcomepage.NID/PASSPORT")}}" id="nid" required name="nid">

                            </div>

                            <div class="form-group">
                              <label for="email" style="text-align: center !important" >{{__("welcomepage.Address")}}</label>
                              <hr style="color: rgb(149, 179, 15)">
                              <div class="row">
                                  <div class="col-md-6">

                                      <label for="Province">{{__("welcomepage.Province")}}:</label>
                                      <select name="Province"  class="form-control province-input" required id="province">
                                        <option value="" class="default-opt"> {{__("welcomepage.Province")}}</option>
                                          @foreach ($province as $item)
                                      <option value="{{$item->id}}" >{{$item->name}}</option>
                                          @endforeach

                                      </select>
                                  </div>
                                  <div class="col-md-6">
                                      <label for="District"> {{__("welcomepage.District")}}:</label>
                                      <select class="form-control distirict-input"  name="District" id="District" >
                                        <option value="" class="default-opt"> {{__("welcomepage.District")}}District </option>

                                    </select>

                                  </div>

                              </div>


                          </div>



                    </div>
                    <div class="col-lg-6">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="Sector"> {{__("welcomepage.Sector")}}:</label>
                                    <select name="Sector"  class="form-control" requiredid="Sector" id="Sector" >
                                        <option value="" class="default-opt"> {{__("welcomepage.Sector")}}  </option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="Cell">{{__("welcomepage.Cell")}}:</label>
                                     <select name="Cell" class="form-control" id="Cell">
                                        <option value="" class="default-opt"> {{__("welcomepage.Cell")}} </option>
                                    </select>
                                </div>

                            </div>


                        </div>

                        <div class="form-group">
                            <label for="village"> {{__("welcomepage.Village")}}:</label>
                            <select name="village"  class="form-control" required id="Village">
                                <option value="" class="default-opt"> {{__("welcomepage.Village")}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="village"> {{__("welcomepage.resonwhy")}}:</label>
                            <textarea name="reasonwhy" id="" class="form-control" >{{__("welcomepage.resonwhy")}}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">{{__("welcomepage.Submit")}}</button>
                        </div>


                        {{-- <div class="form-group">
                            <label for="name"> {{__("welcomepage.Parish")}}:</label>
                            <select name="Parish" id="parish" class="form-control">
                                <option value="" class="default-opt"> {{__("welcomepage.Parish")}}</option>
                               @foreach ($parish as $item)
                            <option value="{{$item->id}}">{{$item->Parish_name}}</option>
                               @endforeach
                            </select>
                        </div> --}}
                        {{-- <div class="form-group">
                                <label for="phone"> {{__("welcomepage.Hall")}}:</label>
                                <select name="hall" id="hall" class="form-control">
                                    <option value="" class="default-opt"> {{__("welcomepage.Hall")}}</option>
                                </select>
                        </div> --}}
                        {{-- <div class="form-group">
                                <label for="phone">{{__("welcomepage.Mass")}}:</label>
                                <select name="Mass" id="Mass" class="form-control">
                                    <option value="" class="default-opt"> {{__("welcomepage.Mass")}}</option>
                                </select>
                        </div> --}}
                        {{-- <div class="container1">
                            <span style="font-size:16px; font-weight:bold;" class="btn btn-primary add_form_field">+</span>
                            <span style="font-size:12px; font-weight:bold;">{{__("welcomepage.abatoya")}} </span>
                            <div  class="form-group" style="margin-top: 10px">
                                     </div>
                        </div> --}}

                    </div>

                </div>


              </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>

        </div>
      </div>
    </div>
  </div>

                    </section>
                </main>
            </div>
        </div>

        <div class="tm-row">
            <div class="tm-col-left text-center">
                <ul class="tm-bg-controls-wrapper">
                    <li class="tm-bg-control active" data-id="0"></li>
                    <li class="tm-bg-control" data-id="1"></li>
                    <li class="tm-bg-control" data-id="2"></li>
                </ul>
            </div>
            <div class="tm-col-right tm-col-footer">
                <footer class="tm-site-footer text-right">
                    <p class="mb-0" style="color: #cbcccf">{{__("welcomepage.copyright")}} @ 2020 kwamuganga.
                    | {{__("welcomepage.Conception")}}: <a rel="nofollow" target="_parent" href="/" class="tm-text-link">ibitaro</a></p>
                </footer>
            </div>
        </div>

        <!-- Diagonal background design -->
        <div class="tm-bg">
            <div class="tm-bg-left" ></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>

    @endsection
    <script src="asset/admin/js.js"></script>
    @section('script')

    @endsection
    <script>

        $(document).ready(function() {
            var max_fields = 6;
            var wrapper = $(".container1");
            var add_button = $(".add_form_field");
            var x = 1;
                $(add_button).click(function(e) {
                    e.preventDefault();
                    if (x < max_fields) {
                        x++;
                        $(wrapper).append('<div style="font-size:16px; font-weight:bold;" ><input type="text" class="form-control" required name="group[]"/><a href="#" class="delete" required>Remove</a></div>'); //add input box
                    } else {
                        alert('You Reached the limits')
                    }
                    });

                    $(wrapper).on("click", ".delete", function(e) {
                        e.preventDefault();
                        $(this).parent('div').remove();
                        x--;
                })


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
                                    opt='  <option value="" class="default-opt">Choose District</option>'
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
                                opt='<option value="" class="default-opt">Hitamo Province</option>'
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
                    opt='  <option value="" class="default-opt">Hitamo Sector</option>'
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
                                    opt='  <option value="" class="default-opt">Hitamo Cell</option>'
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
                    opt='  <option value="" class="default-opt">Hitamo Village</option>'
                });
                 // ende of first query province
                 $('#parish').change(function () {
                    var value = document.getElementById("parish").value;
                    var opt="";
                    $.ajax({
                        url:"{{ route('Hall') }}",
                        method:"POST",
                        data:{"_token": "{{ csrf_token() }}",value:value},
                        success:function(result){
                            if (result =="") {
                                opt= document.getElementById("Cell").value;
                                $('#hall').append(opt);
                            }else{
                                for (var bazimya = 0; bazimya < result.length; bazimya++) {
                                    opt+='<option value="'+result[bazimya].id+'" requide >'+result[bazimya].Hall_name+'</option>'

                                }

                                $('#hall').append(opt);
                            }

                        },error: function(xhr, status, error) {
                            var err = eval("(" + xhr.responseText + ")");
                            alert(err.Message);
                        }
                    })
                    $('#hall').find('option').remove();
                    opt='  <option value="" class="default-opt">Hitamo Hall</option>'
                });
                 // ende of first query province
                 $('#hall').change(function () {
                    var value = document.getElementById("hall").value;
                    var opt="";
                    $.ajax({
                        url:"{{ route('Mess') }}",
                        method:"POST",
                        data:{"_token": "{{ csrf_token() }}",value:value},
                        success:function(result){
                            if (result =="") {
                                opt= document.getElementById("hall").value;
                                $('#Mass').append(opt);
                            }else{
                                for (var bazimya = 0; bazimya < result.length; bazimya++) {
                                    opt+='<option value="'+result[bazimya].id+'" requide >'+result[bazimya].mess+ '  ('+result[bazimya].language+')</option>'
                                }
                                $('#Mass').append(opt);
                            }
                        },error: function(xhr, status, error) {
                            var err = eval("(" + xhr.responseText + ")");
                            alert(err.Message);
                        }
                    })
                    $('#Mass').find('option').remove();
                    opt='  <option value="" class="default-opt">Hitamo Mass</option>'
                });


            });
    </script>
</body>
</html>

