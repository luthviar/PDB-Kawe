@extends('layout')

@section('content')

    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Spark</a>
        </li>
        <li class="breadcrumb-item active">Spark #2</li>
      </ol>
      <!-- Project Details-->
      <div class="row">
        <div class="col-12">
          <h1>Spark #2 Spark KMeans MLLib</h1>
          <p>In this trial, we using <strong>spark mllib</strong> to cluster position. We cleansing data using java code
      and we get output in csv file that contain longitude and latitude. We are using <strong>KMeans algorithm </strong>
      from mllib to cluster position in spark. Result of this trial is center position of each cluster. The cleansing code, sample data,
      spark code, and result can see below. </p>
      <a href="sb-admin\file\spark1_cc.txt">Cleansing code</a><br>
      <a href="sb-admin\file\spark1_sd.txt">Sample data</a><br>
      <a href="sb-admin\file\spark2_sc.txt">Spark Code</a><br>
      <a href="{{ URL::to('/spark_2/result') }}">Result</a>
        </div>
      </div>
    </div>

@endsection






