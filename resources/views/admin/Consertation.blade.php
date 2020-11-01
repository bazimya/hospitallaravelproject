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
          <div>Hospital consultation

          </div>
       </div>
       <div class="container-fluid">
          <!-- DATATABLE DEMO 1-->

          <!-- DATATABLE DEMO 2-->
          <div class="card">
            <div class="card-header">
                <div class="card-title" style="text-align: center !important">insert consultation </div>
                <div class="text-sm" style="text-align: center !important">Please insert the consultation</div>
              <div class="text-right">
                  <a href="/viewconsultation/{{ $member->id }}"><button class="btn btn-success text-center" > View previos</button></a>

             </div>
                <form action="/postconsultation" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <div class="row">
                        <div class="col-lg-3 ">
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="form-group">
                                    <label for="name">consultation By : <b> <code>{{ Auth::user()->name }}</code> </b> </label>
                                    <input type="hidden" class="form-control" name="bywho" value="{{ Auth::user()->id }}" >
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group" style="margin: 12px !important">
                                            <label for="" class="text-primary"> Owner of Consertation</label>
                                            <input type="text" class="form-control" readonly name="hall" required value="{{ $member->name }}">
                                            <input type="hidden" class="form-control" readonly name="patientid" required value="{{ $member->id }}">
                                        </div>
                                        <div class="form-group" style="margin: 12px !important">
                                            <label for="" class="text-primary"> Patient Consertation</label>
                                            <textarea name="consertationmessage" class="form-control" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6"></div>
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


