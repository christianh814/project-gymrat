<?php
include "includes/pages/header.php";
include "includes/pages/navigation.php";
//
?>

<div class="container">

	<div class="row row-offcanvas row-offcanvas-right">

		<div class="col-xs-12 col-sm-9">
          		<p class="pull-right visible-xs">
            		<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Navigation</button>
          		</p>
		</div><!--/.col-xs-12.col-sm-9-->


	<!-- Page Content -->
	<?php
			if($_SERVER['REQUEST_URI'] == '/index.php'){
				//include(TEMPLATE_BACK . DS . "admin_content.php");
			}
			if (isset($_GET['myaccount'])) {
				require_once("includes/pages/myaccount.php");
			}
	?>
	<!-- /.Page Content -->
	<?php include "includes/pages/sidenavigation.php"; ?>
	</div><!--/row-->

<hr>
</div><!--/.container-->
<?php include "includes/pages/footer.php"; ?>
