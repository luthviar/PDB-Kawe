@extends('layout')

@section('content')

    <div class="container-fluid">
	    <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Spark</a>
        </li>
        <li class="breadcrumb-item active">Spark #1</li>
      </ol>
      <!-- Project Details-->
      <div class="row">
        <div class="col-12">
          <h1>Spark #1 Spark KMeans ML</h1>
          <h4>In this trial, we using <strong>spark ml</strong> to cluster position. We cleansing data using java code
		  and we get output in csv file that contain longitude and latitude. We are using <strong>KMeans algorithm </strong>
		  to cluster position in spark. Result of this trial is center position of each cluster. The cleansing code, sample data,
		  spark code, and result can see below. </h4>
		  <a href="sb-admin\file\spark1_cc.txt">Cleansing code</a><br>
		  <a href="sb-admin\file\spark1_sd.txt">Sample data</a><br>
		  <a href="sb-admin\file\spark1_sc.txt">Spark Code</a><br>
		  <a href="{{ URL::to('/spark_1/result') }}">Result</a>
        </div>
      </div>
    </div>

@endsection



