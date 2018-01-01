@extends('layout')

@section('content')

    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Spark</a>
        </li>
        <li class="breadcrumb-item active">Spark #3</li>
      </ol>
      <!-- Project Details-->
      <div class="row">
        <div class="col-12">
          <h1>Spark #3 Spark BisectingKMeans MLLib</h1>
          <p>In this trial, we using <strong>spark mllib</strong> to cluster position. We cleansing data using java code
      and we get output in csv file that contain longitude and latitude. We are using <strong>BisectingKMeans algorithm </strong>
      from mllib to cluster position in spark. But this trial <strong>failed</strong> because BisectingKMeans required spark version 2.0.0.</p>
      <a href="sb-admin\file\spark1_cc.txt">Cleansing code</a><br>
      <a href="sb-admin\file\spark1_sd.txt">Sample data</a><br>
      <a href="sb-admin\file\spark3_sc.txt">Spark Code</a><br>
        </div>
      </div>
    </div>

@endsection






