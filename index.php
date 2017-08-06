<!DOCTYPE html>
<?php include "includes/pages/header.php"; ?>

<?php include "includes/pages/navigation.php"; ?>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>

          <div class="jumbotron">
            <h1>Hello, world!</h1>
            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
          </div>

	  <div class="row"> <!-- row -->

<!--
 	    <!--Thing 1 -->
            <div class="col-xs-6 col-lg-4">
              <h2>Thing 1</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
	    </div>
 	    <!--/. Thing 1-->

	    <!-- Thing 2-->
            <div class="col-xs-6 col-lg-4">
              <h2>Thing 2</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
	    </div>
	    <!--/. Thing 2-->

	    <!-- Thing 3-->
            <div class="col-xs-6 col-lg-4">
              <h2>Thing 3</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
	    </div>
	    <!--/. Thing 3-->

	    <!-- Thing 4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Thing 4</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
	    </div>
	    <!--/. Thing 4-->

	    <!-- Thing 5-->
            <div class="col-xs-6 col-lg-4">
              <h2>Thing 5</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
	    </div>
	    <!--/. Thing 5-->

	    <!-- Thing 6-->
            <div class="col-xs-6 col-lg-4">
              <h2>Thing 6</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
	    </div>
	    <!--/. Thing 6-->
-->

<!-- CAL TEST -->

<?php

function build_calendar($month, $year) {
	$daysOfWeek = array('S','M','T','W','T','F','S');
	$firstDayOfMonth = mktime(0,0,0,$month,1,$year);
	$numberDays = date('t',$firstDayOfMonth);
	$dateComponents = getdate($firstDayOfMonth);
	$monthName = $dateComponents['month'];
	$dayOfWeek = $dateComponents['wday'];
	$calendar = "<table class='calendar table table-condensed table-bordered'>";
	$calendar .= "<caption>$monthName $year</caption>";
	$calendar .= "<tr>";
	foreach($daysOfWeek as $day) {
		$calendar .= "<th class='header'>$day</th>";
	}
	$currentDay = 1;
	$calendar .= "</tr><tr>";
	if ($dayOfWeek > 0) {
		$calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>";
	}
	$month = str_pad($month, 2, "0", STR_PAD_LEFT);
	while($currentDay <= $numberDays){
		if($dayOfWeek == 7){
			$dayOfWeek = 0;
			$calendar .= "</tr><tr>";
		}
		$currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
		$date = "$year-$month-$currentDayRel";

		// Is this today?
		if(date('Y-m-d') == $date) {
			$calendar .= "<td class='day success' rel='$date'><b>$currentDay</b></td>";
		} else {
			$calendar .= "<td class='day' rel='$date'>$currentDay</td>";
		}

		$currentDay++;
		$dayOfWeek++;
	}
	if($dayOfWeek != 7){
		$remainingDays = 7 - $dayOfWeek;
		$calendar .= "<td colspan='$remainingDays'>&nbsp;</td>";
	}
	$calendar .= "</tr>";
	$calendar .= "</table>";
	return $calendar;
}

$calendar = build_calendar(3, 2014);

$calendar = '<div style="width:200px">' . $calendar . '</div>';

$calendar .= '<style type="text/css">table tbody tr td, table tbody tr th { text-align: center; }</style>';

require('includes/pages/layout.php');
?>

<!-- end CAL test -->



          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

<?php include "includes/pages/sidenavigation.php"; ?>

      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; 2016 uFit, Inc.</p>
      </footer>

    </div><!--/.container-->

<?php include "includes/pages/footer.php"; ?>
