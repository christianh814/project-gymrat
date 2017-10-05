

<?php require_once("includes/pages/header.php") ?>
<?php require_once("includes/pages/navigation.php") ?>
<?php require_once("includes/pages/sidenavigation.php") ?>
	<!-- Page Content -->
	<?php
			if($_SERVER['REQUEST_URI'] == '/index.php'){
				require_once("includes/pages/homepage.php");
			}
			if (isset($_GET['myaccount'])) {
				require_once("includes/pages/myaccount.php");
			}
	?>
	<!--/.Page Content -->
<?php include "includes/pages/footer.php"; ?>
