@extends('layouts/admin')

@section('title')
 Hospita| Dashboard
@endsection

@section('contain')
@if (Session::has('message'))
<div class="btn btn-success btn-lg btn-block">{{ Session::get('message') }}</div>
@endif


<section class="section-container">
    <!-- Page content-->
    <div class="content-wrapper">
       <div class="content-heading">
          <div>Welcome To Hospital Attendences Please fill The form of the hospital
             <small>Approving Member </small>
          </div>
       </div>
       <div class="container-fluid">
          <!-- DATATABLE DEMO 1-->

          <!-- DATATABLE DEMO 2-->
          <div class="card">
             <div class="card-header">
                <div class="card-title" style="text-align: center !important">Place To Approve </div>
                <div class="text-sm" style="text-align: center !important">If Person Is Around Click yes If Not Click No </div>
             </div>

            <form action="/ChangeStutas" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <div class="row">

                        <div class="col-lg-3">
                        </div>

                        <div class="col-lg-6">
                            <div class="card">
                            <div class="form-group" style="margin: 12px !important">
                                <label for="name">Head Of Group:</label>
                                @foreach ($parishesid as $key=>$item)

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group" style="margin: 12px !important">
                                            <label for="phone">
                                                {{$item->name}}
                                           </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Heade[{{$item->id}}]" id="exampleRadios1" value="oya" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                 No
                                                </label>
                                              </div></div>
                                            <div class="col-lg-6"><div class="form-check">
                                                <input class="form-check-input" type="radio" name="Heade[{{$item->id}}]" id="exampleRadios2" value="yego">
                                                <label class="form-check-label" for="exampleRadios2">
                                                 Yes
                                                </label>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card">
                                <div class="form-group" style="margin: 12px !important">
                                    <label for="name">Head Of Group:</label>
                                    @if (count($member)>0)
                                    @foreach ($member as $key=>$item)

                                    <div class="row">


                                        <div class="col-lg-4">
                                            <div class="form-group" style="margin: 12px !important">
                                                <label for="phone"> {{$item->name}}</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-6"> <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="group[{{$item->id}}]" id="exampleRadios1" value="oya" checked>
                                                     <label class="form-check-label" for="exampleRadios1">
                                                     No
                                                    </label>
                                                  </div></div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="group[{{$item->id}}]" id="exampleRadios2" value="yego">
                                                  <br>  <label class="form-check-label" for="exampleRadios2" >
                                                     Yes
                                                    </label>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        @endforeach
                                        @else

                                        <input class="form-check-input" type="hidden" name="group[]" id="exampleRadios1" value="oya" checked>

                                    @endif

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group" style="margin: 12px !important">
                                            <button type="submit" class=" form-control btn btn-primary" >Submit</button>

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


