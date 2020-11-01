@extends('layouts/admin')

@section('title')
 Home| Dashboard
@endsection

@section('contain')
@if (Session::has('message'))
<div class="btn btn-success btn-lg btn-block">{{ Session::get('message') }}</div>
@endif

<div class="card card-default" style="margin:0% 10% 0% 20%" >
    <div class="card-body">
        <div id="chartContainer" style="height: 270px; width: 100%;"></div>
    </div>
</div>

@endsection



@section('script')

@endsection

<?php


$dataPoints = array(
    array("label"=> "Abataraza kwamuganga", "y"=>$absent ),
    array("label"=> "Abaje kwamuganga", "y"=> $present ),
    array("label"=> "Abasabye bose", "y"=> $churche),


);

?>


 <script>
 window.onload = function () {

 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     theme: "light2",
     title: {
         text: "Hospital management system"
     },
     axisY: {
         suffix: "-",
         scaleBreaks: {
             autoCalculate: true
         }
     },
     data: [{
         type: "column",
         yValueFormatString: "#,##0\"\"",
         indexLabel: "{y}",
         indexLabelPlacement: "inside",
         indexLabelFontColor: "white",
         dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
     }]
 });
 chart.render();

 }
</script>
