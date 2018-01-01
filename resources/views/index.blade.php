@extends('layout')

@section('content')

    <div class="container-fluid">
	    <!-- Breadcrumbs-->
	    <ol class="breadcrumb">
	      <li class="breadcrumb-item">
	        <a href="#">Dashboard</a>
	      </li>
	      <li class="breadcrumb-item active">My Dashboard</li>
	    </ol>
	    <!-- Project Details-->
	    <div class="row">
	      <div class="col-12">
	        
	        <h1>Our Project</h1>
	        <p>
	        	Kawe merupakan aplikasi yang berfungsi untuk membantu masyarakat dan kepolisian UK untuk mengetahui daerah yang memiliki tingkat kriminalitas yang tinggi.
	 			Aplikasi ini akan menampilkan peta lokasi daerah kriminalitas dan akan menunjukkan total kriminalitas yang terjadi.
	        </p>

	        <img src="{{ URL::to('/') }}/imgs/results.jpg" alt="result" style="width:800px;height:400px	
	      </div>
	    </div>
    </div>

@endsection



