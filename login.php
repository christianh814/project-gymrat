<?php require_once("includes/config/init.php") ; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Latest compiled and minified CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="icon" href="favicon.ico">

    <title>uFit PLACEHOLDER</title>

    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">


  </head>

  <body>

    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading text-center">Please sign in</h2>
        <!-- <button class="btn btn-sm btn-primary fa fa-facebook" type="submit"> Login With Facebook</i></button> -->
	<center>
	<div class="btn-group">
	<?php
		$fb = new Facebook\Facebook([
			'app_id' => getenv("FB_APP_ID"),
			'app_secret' => getenv("FB_APP_SECRET"),
			'default_graph_version' => 'v2.2',
		]);
		$helper = $fb->getRedirectLoginHelper();
		$permissions = ['email']; // Optional permissions
		$loginUrl = $helper->getLoginUrl('http://' . $_SERVER['SERVER_NAME'] . '/fb-callback.php', $permissions);
		echo "<a class='btn btn-primary disabled'><i class='fa fa-facebook'></i></a>";
		echo "<a class='btn btn-primary' href='" . htmlspecialchars($loginUrl) . "' style='width:12em'> Sign in with Facebook</a>";
	?>
	</div>
	</center>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
