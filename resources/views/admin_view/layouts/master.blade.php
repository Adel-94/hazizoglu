<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="admin_public/images/favicon.ico" type="image/ico" />

    <title>Admin </title>

    <!-- Bootstrap -->
    <link href="../admin_public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../admin_public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Select2 -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
	
    <!-- Datatables -->
    <link href="../admin_public/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../admin_public/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../admin_public/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../admin_public/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../admin_public/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../admin_public/build/css/custom.min.css" rel="stylesheet">
 

  </head>
<body>


  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
		<div class="top_nav">
		   @include('admin_view.layouts.header.header')
		</div>

	     <div class="col-md-3 left_col">
	     	  @include('admin_view.layouts.sidebar.sidebar')
	     </div>
        <!-- page content -->
        <div class="right_col" role="main">
     
            @yield('content')
             @yield('content1')
          
        </div>

        <!-- /page content -->

      </div>
  </div>
</body>

   <!-- jQuery -->
    <script src="../admin_public/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../admin_public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <!-- bootstrap-daterangepicker -->
    <script src="../admin_public/vendors/moment/min/moment.min.js"></script>
    <script src="../admin_public/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
        <!-- Datatables -->
    <script src="../admin_public/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../admin_public/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../admin_public/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../admin_public/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../admin_public/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../admin_public/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../admin_public/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../admin_public/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../admin_public/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../admin_public/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../admin_public/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../admin_public/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../admin_public/vendors/jszip/dist/jszip.min.js"></script>
    <script src="../admin_public/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../admin_public/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../admin_public/build/js/custom.min.js"></script>


            <script type="text/javascript">
            $(document).ready(function() { 
             $().DataTable();
            });
            </script>

</body>
</html>