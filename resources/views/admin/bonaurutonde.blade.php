@extends('layouts/admin')

@section('title')
SAINT VINCENT PALOTTI GIKONDO<?='<br>'?>    <?=  date('S');?>
@endsection
    <!-- End of Page Wrapper -->



    @section('contain')
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
           <div class="content-heading">
              <div>Welcome To Mess Attendences
                 <small>Download Data </small>
              </div>
           </div>
           <div class="container-fluid">
              <!-- DATATABLE DEMO 1-->

              <!-- DATATABLE DEMO 2-->
              <div class="card"  >
                 <div class="card-header">
                    <div class="card-title">Mess attendence</div>
                    <div class="text-sm">This is the list Of the people Who Attended The Mess </div>


                 </div>
                 <div class="card-body" >

                    <table class="table table-striped my-4 w-100" id="datatable2" >
                        <caption style="caption-side: top; text-align: center">turajijuka buhoro buhop</caption>
                       <thead>

                          <tr>
                            {{-- <th>Nimero</th> --}}
                            <th>Amazina</th>
                            <th>Telefone</th>
                            {{-- <th>Code</th> --}}
                            <th>Nimero y'ikimuranga</th>
                            <th>Member</th>
                            <th>Address</th>

                          </tr>
                       </thead>
                       <tbody>

                            @foreach ($requestuser as $Key=>$item)

                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->nid}}</td>
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

    @section('script')

    @endsection


