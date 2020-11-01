@extends('layouts/admin')

@section('title')
Hospital<?='<br>'?>    <?=  date('S');?>
@endsection
    <!-- End of Page Wrapper -->



    @section('contain')



<section class="section-container">
    <!-- Page content-->
    <div class="content-wrapper">

       <div class="container-fluid">

        <div class="card">
           <div class="card-header">
              <div class="card-title">This is the list of people who Request to meet doctor</div>
           </div>
           <div class="card-body" >
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <p id="messa"></p>
                 <thead>
                    <tr>

                      <th>Amazina</th>
                      <th>Telefone</th>
                      <th>Nimero y'ikimuranga</th>
                      <th>Yaremerewe</th>
                      <th>Consultation</th>
                      <th>Lab</th>
                      <th>Payment</th>

                    </tr>
                 </thead>
                 <tbody id="tesr">
                @foreach ($Userrequest as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->mass }}</td>
                    <td>{{ $item->Decision }}</td>
                    <td><a href="/Consertation/{{$item->id }}">Consultation</a></td>
                    <td><a href="/Lab/{{$item->id }}">Lab</a></td>
                    <td><a href="/Payment/{{$item->id }}">Payment</a></td>
                </tr>
                @endforeach
                 </tbody>
              </table>

           </div>
        </div>
        <!-- DATATABLE DEMO 3-->

     </div>


    </div>

 </section>



    @endsection
