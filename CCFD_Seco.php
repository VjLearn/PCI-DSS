<!DOCTYPE html>
<html lang="en" class=" js inlinesvg"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>PCI-DSS Dashboard</title>
	<meta name="description" content="Bootstrap Dashboard">
	<meta name="author" content="Sanjaya">
	<meta name="keyword" content="Dashboard, Bootstrap,Fluid, Retina">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href="css/" rel="stylesheet" type="text/css">
	<!-- end: CSS -->


	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->

<script type="text/javascript">
function getEnosReport() {
	$("#div_Enos").removeClass( "purple" );
	$("#div_Enos").addClass( "black" );
		
	$("#div_oreo").removeClass( "black" );
	$("#div_oreo").addClass( "green" );
	
	$("#div_yama").removeClass( "black" );
	$("#div_yama").addClass( "yellow" );
	
	$("#div_neko").removeClass( "black" );
	$("#div_neko").addClass( "orange" );
	
	$("#div_goku").removeClass( "black" );
	$("#div_goku").addClass( "blue" );
	
	$("#div_cifyoda").addClass( "red" );
	$("#div_cifyoda").removeClass( "black" );

	$.ajax({
		type: "POST",
		url: "readlog.php",
		data: "dir=SELLWWENOS",
		cache: false,
		success: function(html) {
			$("#report").html(html);
		}
	});
}

function getOreoReport() {
	$("#div_Enos").addClass( "purple" );
	$("#div_Enos").removeClass( "black" );
		
	$("#div_oreo").addClass( "black" );
	$("#div_oreo").removeClass( "green" );
	
	$("#div_yama").removeClass( "black" );
	$("#div_yama").addClass( "yellow" );
	
	$("#div_neko").removeClass( "black" );
	$("#div_neko").addClass( "orange" );
	
	$("#div_goku").removeClass( "black" );
	$("#div_goku").addClass( "blue" );
	
	$("#div_cifyoda").addClass( "red" );
	$("#div_cifyoda").removeClass( "black" );


	$.ajax({
		type: "POST",
		url: "readlog.php",
		data: "dir=SELLWWOREO",
		cache: false,
		success: function(html) {
			$("#report").html(html);
		}
	});
}

function getYamaReport() {
	$("#div_Enos").addClass( "purple" );
	$("#div_Enos").removeClass( "black" );
		
	$("#div_oreo").removeClass( "black" );
	$("#div_oreo").addClass( "green" );
	
	$("#div_yama").addClass( "black" );
	$("#div_yama").removeClass( "yellow" );
	
	$("#div_neko").removeClass( "black" );
	$("#div_neko").addClass( "orange" );
	
	$("#div_goku").removeClass( "black" );
	$("#div_goku").addClass( "blue" );
	
	$("#div_cifyoda").addClass( "red" );
	$("#div_cifyoda").removeClass( "black" );


	$.ajax({
		type: "POST",
		url: "readlog.php",
		data: "dir=SELLWWYAMA",
		cache: false,
		success: function(html) {
			$("#report").html(html);
		}
	});
}

function getNekoReport() {
	$("#div_Enos").addClass( "purple" );
	$("#div_Enos").removeClass( "black" );
		
	$("#div_oreo").removeClass( "black" );
	$("#div_oreo").addClass( "green" );
	
	$("#div_yama").removeClass( "black" );
	$("#div_yama").addClass( "yellow" );
	
	$("#div_neko").addClass( "black" );
	$("#div_neko").removeClass( "orange" );
	
	$("#div_goku").removeClass( "black" );
	$("#div_goku").addClass( "blue" );
	
	$("#div_cifyoda").addClass( "red" );
	$("#div_cifyoda").removeClass( "black" );


	$.ajax({
		type: "POST",
		url: "readlog.php",
		data: "dir=SECOWWNEKO",
		cache: false,
		success: function(html) {
			$("#report").html(html);
		}
	});
}

function getGokuReport() {
	$("#div_Enos").addClass( "purple" );
	$("#div_Enos").removeClass( "black" );
		
	$("#div_oreo").removeClass( "black" );
	$("#div_oreo").addClass( "green" );
	
	$("#div_yama").removeClass( "black" );
	$("#div_yama").addClass( "yellow" );
	
	$("#div_neko").removeClass( "black" );
	$("#div_neko").addClass( "orange" );
	
	$("#div_goku").addClass( "black" );
	$("#div_goku").removeClass( "blue" );

	$("#div_cifyoda").addClass( "red" );
	$("#div_cifyoda").removeClass( "black" );
	
	$.ajax({
		type: "POST",
		url: "readlog.php",
		data: "dir=SECOWWGOKU",
		cache: false,
		success: function(html) {
			$("#report").html(html);
		}
	});
}

function getcifyodaReport() {
	$("#div_Enos").addClass( "purple" );
	$("#div_Enos").removeClass( "black" );
		
	$("#div_oreo").removeClass( "black" );
	$("#div_oreo").addClass( "green" );
	
	$("#div_yama").removeClass( "black" );
	$("#div_yama").addClass( "yellow" );
	
	$("#div_neko").removeClass( "black" );
	$("#div_neko").addClass( "orange" );
	
	$("#div_goku").addClass( "blue" );
	$("#div_goku").removeClass( "black" );

	$("#div_cifyoda").addClass( "black" );
	$("#div_cifyoda").removeClass( "red" );

	$.ajax({
		type: "POST",
		url: "readlog.php",
		data: "dir=ACIFWWYODA",
		cache: false,
		success: function(html) {
			$("#report").html(html);
		}
	});
}
</script>


<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="/pci/CCFDashboard.php"><span>PCI-DSS Dashboard</span></a>

				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="/pci/submenu2.html#">
								<i class="halflings-icon white user"></i> User
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="/pci/submenu2.html#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="/pci/login.html"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->

			</div>
		</div>
	</div>
	<!-- start: Header -->

		<div class="container-fluid-full">
		<div class="row-fluid">

			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="/pci/CCFDashboard.php#"><i class="icon-bar-chart"></i><span class="hidden-tablet"> AeTM </span></a></li>
						<li><a href="/pci/CCFD_seco.php#"><i class="icon-bar-chart"></i><span class="hidden-tablet"> SECO </span></a></li>
						<li><a href="/pci/Historical.html#"><i class="icon-envelope"></i><span class="hidden-tablet"> Historical</span></a></li>
												<li><a href="/pci/login.html#"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->

			<noscript>
				&lt;div class="alert alert-block span10"&gt;
					&lt;h4 class="alert-heading"&gt;Warning!&lt;/h4&gt;
					&lt;p&gt;You need to have &lt;a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank"&gt;JavaScript&lt;/a&gt; enabled to use this site.&lt;/p&gt;
				&lt;/div&gt;
			</noscript>

			<!-- start: Content -->
			<div id="content" class="span10" style="min-height: 912px;">


			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="/pci/CCFDAshboard.php">Home</a>
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="/pci/About.html#">About</a></li>
			</ul>

			<div class="row-fluid">

				<div class="span3 statbox purple" id="div_Enos" ontablet="span6" ondesktop="span3">
					<div class="boxchart"><canvas width="64" height="60" style="display "></canvas></div>
					<div class="number">Enos - <?php  include 'count_enos.php'; ?> <i class="icon-arrow-up"></i></div>
					<div class="title">Patterns found</div>
					<div class="footer">
						<a href="#" onClick="getEnosReport()">read full report</a>
					</div>
				</div>
				<div class="span3 statbox green" id="div_oreo" ontablet="span6" ondesktop="span3">
					<div class="boxchart"><canvas width="64" height="60" style="display "></canvas></div>
					<div class="number">Oreo - <?php  include 'count_oreo.php'; ?> <i class="icon-arrow-up"></i></div>
					<div class="title">Patterns found</div>
					<div class="footer">
						<a href="#" onClick="getOreoReport()">read full report</a>
					</div>
				</div>
				<div class="span3 statbox yellow" id="div_yama" ontablet="span6" ondesktop="span3">
					<div class="boxchart"><canvas width="64" height="60" style="display "></canvas></div>
					<div class="number">Yama - <?php  include 'count_yama.php'; ?><i class="icon-arrow-up"></i></div>
					<div class="title">Patterns found</div>
					<div class="footer">
						<a href="#" onClick="getYamaReport()">read full report</a>
					</div>
				</div>
				<div class="span3 statbox orange" id="div_neko" ontablet="span6" ondesktop="span3">
					<div class="boxchart"><canvas width="64" height="60" style="display "></canvas></div>
					<div class="number">Neko - <?php  include 'count_neko.php'; ?><i class="icon-arrow-up"></i></div>
					<div class="title">Patterns found</div>
					<div class="footer">
						<a href="#" onClick="getNekoReport()">read full report</a>
					</div>
				</div>	
				<div class="row-fluid">
				<div class="span3 statbox blue noMargin" id="div_goku" ontablet="span6" ondesktop="span3">
					<div class="boxchart"><canvas width="64" height="60" style="display "></canvas></div>
					<div class="number">Goku - <?php  include 'count_goku.php'; ?> <i class="icon-arrow-up"></i></div>
					<div class="title">Patterns found</div>
					<div class="footer">
						<a href="#" onClick="getGokuReport()">read full report</a>
					</div>
				</div>
				<!-- CIF YODA Added -20Jul2015 -->
				<div class="span3 statbox red noMargin" id="div_cifyoda" ontablet="span6" ondesktop="span3">
					<div class="boxchart"><canvas width="64" height="60" style="display "></canvas></div>
					<div class="number">CifYoda - <?php  include 'count_cifyoda.php'; ?> <i class="icon-arrow-up"></i></div>
					<div class="title">Patterns found</div>
					<div class="footer">
						<a href="#" onClick="getcifyodaReport()">read full report</a>
					</div>
				</div>
				
				</div>

			</div>

		<div class="modal-body" id="report">
			<p> </p>
		</div>
		<div class="modal-footer">
						<a href="/pci/submenu2.html#" class="btn btn-primary">Contact Us @ R&D-ALB-RDM-FOR-QDS-PSS</a>
		</div>
	</div>

	<div class="clearfix"></div>



	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>

		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>

		<script src="js/jquery.ui.touch-punch.js"></script>

		<script src="js/modernizr.js"></script>

		<script src="js/bootstrap.min.js"></script>

		<script src="js/jquery.cookie.js"></script>

		<script src="js/fullcalendar.min.js"></script>

		<script src="js/jquery.dataTables.min.js"></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>

		<script src="js/jquery.chosen.min.js"></script>

		<script src="js/jquery.uniform.min.js"></script>

		<script src="js/jquery.cleditor.min.js"></script>

		<script src="js/jquery.noty.js"></script>

		<script src="js/jquery.elfinder.min.js"></script>

		<script src="js/jquery.raty.min.js"></script>

		<script src="js/jquery.iphone.toggle.js"></script>

		<script src="js/jquery.uploadify-3.1.min.js"></script>

		<script src="js/jquery.gritter.min.js"></script>

		<script src="js/jquery.imagesloaded.js"></script>

		<script src="js/jquery.masonry.min.js"></script>

		<script src="js/jquery.knob.modified.js"></script>

		<script src="js/jquery.sparkline.min.js"></script>

		<script src="js/counter.js"></script>

		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->



</body></html>