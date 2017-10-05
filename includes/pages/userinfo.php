<?php
$user_id = $_SESSION['user_logged_in_id'];
$user_obj = new User($con);
$userinfo = $user_obj->userInfo($user_id);
?>

          <section class="row text-center placeholders">
	        <div class="container">
                  <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                            <img src="<?php echo $userinfo['picture'] ?>" alt="stock photo" class="img">
                     </div>
                     <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                            <div class="container" style="">
                              <h2><?php echo $userinfo['first_name'] . " " . $userinfo['last_name']?></h2>
                            </div>
                              <hr>
                            <ul class="container details list-unstyled">
                              <li><p><span class="fa fa-check-square" style="width:50px;"></span>Total Sessions: 90000</p></li>
                              <li><p><span class="fa fa-envelope" style="width:50px;"></span><?php echo $userinfo['email'] ?></p></li>
                              <li><p><span class="fa fa-user" style="width:50px;"></span>Account Type: <?php echo $userinfo['account'] ?></p></li>
                            </ul>
                     </div>
                  </div>
                </div>

          </section>
