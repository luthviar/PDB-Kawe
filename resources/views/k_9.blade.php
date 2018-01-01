@extends('layout')

@section('content')

    <div class="container-fluid">
	    <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Final </a>
        </li>
        <li class="breadcrumb-item active">9 Cluster</li>
      </ol>
      <!-- Project Details-->
      <div class="row">
        <div class="col-8">
          <h1>9 Cluster</h1>
          <p>Pada percobaan ini merupakan hasil final dari berbagai percobaan yang telah kami lakukan, pada akhirnya kami memilih 9 cluster ini untuk divisualisasi.</p>
          <p>9 Cluster ini memiliki kriteria:
          		<ul>
          			<li>Diharapkan merepresentasikan 9 negara bagian di United Kingdom</li>
          			<li>Data telah di-cleansing final</li>
          			<li>Data berjumlah sebanyak 11.949.434 baris</li>
          			<li>Memiliki data Crime type dan jumlahnya</li>
          			<li>Memiliki cluster size dan cluster center sehingga dapat diketahui banyak kejahatan yang terjadi pada suatu daerah cluster</li>
          			<li>Percobaan ini dijalankan di databricks.com</li>
          			<li>Data yang ditampilkan dari tahun 2014 hingga 2017</li>
          		</ul>
          </p>
          <p>Percobaan ini menggunakan KMeans dan berikut ini merupakan code serta hasilnya.</p>
		  <ul>
			  <li><a href="{{ url('sb-admin\file\Cleansing_Tahap2_Databricks.txt') }}" target="_blank">Cleansing code final</a><br></li>
			  <li><a href="{{ url('sb-admin\file\sample_data_hasil.txt') }}" target="_blank">Sample data hasil</a><br></li>
			  <li><a href="{{ url('sb-admin\file\final_code.txt') }}" target="_blank">Spark Final Code</a><br></li>
			  <li><a href="http://bit.ly/result3final" target="_blank">Databricks Notebook</a><br></li>
			  <li><a href="{{ url('k_9/map_final') }}" target="_blank">Map Result</a></li>
		  </ul>
        </div>
      </div>
    </div>

@endsection



