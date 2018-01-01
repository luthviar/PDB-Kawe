<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CRIME UK BIG DATA</title>
    <!-- Bootstrap core CSS-->
    <link href="/sb-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="/sb-admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="/sb-admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="/sb-admin/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">CRIME UK</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="/index">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Our Project</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Spark">
      <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSpark" data-parent="#exampleAccordion">
        <i class="fa fa-fw fa-file"></i>
        <span class="nav-link-text">Spark</span>
      </a>
      <ul class="sidenav-second-level collapse" id="collapseSpark">
        <li>
          <a href="/spark_1">Spark #1 - KMeans ML</a>
        </li>
        <li>
          <a href="/spark_2">Spark #2 - KMeans MLLib</a>
        </li>
        <li>
          <a href="/spark_3">Spark #3 - BisectingKMeans MLLib</a>
        </li>
      </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Databricks">
      <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseDataBrick" data-parent="#exampleAccordion">
        <i class="fa fa-fw fa-file"></i>
        <span class="nav-link-text">DataBrick</span>
      </a>
      <ul class="sidenav-second-level collapse" id="collapseDataBrick">
        <li>
          <a href="/databrick_1/result">DataBrick #1 - KMeans ML</a>
        </li>
        <li>
          <a href="/databrick_2/result">DataBrick #2 - BiscretingKMeans MLLib</a>
        </li>
        <li>
          <a href="/databrick_3/result">DataBrick #3 - Custom</a>
        </li>
      </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Compare Result">
      <a class="nav-link" href="/compare/result">
        <i class="fa fa-fw fa-dashboard"></i>
        <span class="nav-link-text">Compare Result</span>
      </a>
    </li>

    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Final">
      <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseFinal" data-parent="#exampleAccordion">
        <i class="fa fa-fw fa-file"></i>
        <span class="nav-link-text">Final</span>
      </a>
      <ul class="sidenav-second-level collapse" id="collapseFinal">
        <li>
          <a href="/k_9">9 Cluster</a>
        </li>
        <li>
          <a href="/k_20">20 Cluster</a>
        </li>
      </ul>
    </li>

      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>PDB KAWE</a>
        </li>
      </ul>
    
    </div>
  </nav>
  <div class="content-wrapper">

    <!--  Content -->
    @yield('content')

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © PDB KAWE 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">We are PDB KAWE</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Our Team : <br>1. Gita Garcia <br>2. Hawari Hilman <br>3. Luthfi Abdurrahim <br>4. Mahdi Firdaus <br>5. Rohmat Taufik</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="/sb-admin/vendor/jquery/jquery.min.js"></script>
    <script src="/sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/sb-admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="/sb-admin/vendor/chart.js/Chart.min.js"></script>
    <script src="/sb-admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="/sb-admin/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/sb-admin/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="/sb-admin/js/sb-admin-datatables.min.js"></script>
    <script src="/sb-admin/js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
