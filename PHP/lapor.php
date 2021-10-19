<?php
  $konek = new mysqli('localhost','root','','kkn');
?>
<!DOCTYPE html>
<html lang="en">
<iframe src="song/index.html" style="display:none;"></iframe>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>KKN 2019 Universitas Siliwangi - Periode 1</title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="assets/css/ionicons.min.css">		

	<!-- Theme style -->
	<link rel="stylesheet" href="assets/css/master_style.css">

	<!-- foxadmin Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="assets/css/skins/_all-skins.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

</head>

<body class="hold-transition skin-purple sidebar-collapse sidebar-mini">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="lapor.php"><i class="fa fa-refresh"></i> Refresh</a></h3>
              <?php
                  $tanggal = date("Ymd");
                  $pengunjung = mysqli_num_rows(mysqli_query($konek,"SELECT * FROM lapor WHERE tanggal='$tanggal' GROUP BY ip_addres")); // Hitung jumlah pengunjung
                  $bataswaktu       = time() - 300;
                  $pengunjungonline = mysqli_num_rows(mysqli_query($konek,"SELECT * FROM lapor WHERE online > '$bataswaktu'")); // hitung pengunjung online                 
              ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 table-responsive">
				<thead>
					<tr>
						<th>No</th>
            <th>Tanggal</th>
            <th>IP Address</th>
            <th>Browser</th>
            <th>Sistem Operasi</th>
					</tr>
				</thead>
				<tbody>
			     <?php
            $no=1;
            $cari=mysqli_query($konek,"select * from lapor ");
              while($d=mysqli_fetch_array($cari)){
              echo "<tr>
                <td><center>$no</td>
                <td><center>".$d['tanggal']."</td>
                <td><center>".$d['ip_addres']."</td>
                <td><center>".$d['browser']."</td>
                <td><center>".$d['sistem']."</td>
                </tr>";
              $no++;
              }
            ?>
				</tfoot>
			</table>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
    </div><p><?php echo "Copyright © " . (int)date('Y'). " | <a href='https://blackpink.me'> Rumah Serambi</a>"?> wtih <span style="font-size:150%;color:red;">&hearts;</p>
  </footer>

</div>
<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="assets/js/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="assets/js/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="assets/js/bootstrap.min.js"></script>
	
	<!-- DataTables -->
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="../../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="assets/bundel/fastclick.js"></script>
	
	<!-- foxadmin App -->
	<script src="assets/js/template.js"></script>
	
	<!-- foxadmin for demo purposes -->
	<script src="../../js/demo.js"></script>
	
	<!-- This is data table -->
    <script src=".assets/js/jquery.dataTables.min.js"></script>
    
    <!-- start - This is for export functionality only -->
    <script src="assets/js/dataTables.buttons.min.js"></script>
    <script src="assets/js/buttons.flash.min.js"></script>
    <script src="assets/bundel/jszip.min.js"></script>
    <script src="assets/bundel/pdfmake.min.js"></script>
    <script src="assets/bundel/vfs_fonts.js"></script>
    <script src="assets/bundel/buttons.html5.min.js"></script>
    <script src="assets/bundel/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
	
	<!-- foxadmin for Data Table -->
	<script src="assets/js/data-table.js"></script>

</body>
</html>