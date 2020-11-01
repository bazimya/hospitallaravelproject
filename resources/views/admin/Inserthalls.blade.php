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

                <form action="/Createhall" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <div class="row">

                        <div class="col-lg-3">
                        </div>

                        <div class="col-lg-6">
                            <div class="card">
                            <div class="form-group" style="margin: 12px !important">
                                <label for="name">Hitamo Parish:</label>
                                <select name="Parish" id="parish" class="form-control">
                                    @foreach ($church as $item)
                                <option value="{{$item->id}}">{{$item->Parish_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group" style="margin: 12px !important">
                                    <label for="phone">Hall:example Shaperi</label>
                                    <input type="text" class="form-control" name="hall" required placeholder="Name Of the Hall">
                            </div>
                            <div class="form-group" style="margin: 12px !important">
                                <label for="phone">Hall capacity:example 4000</label>
                                <input type="text" class="form-control" name="capacity" required placeholder="Number Of set">
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


