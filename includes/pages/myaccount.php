<?php
$user_id = $_SESSION['user_logged_in_id'];
$user_obj = new User($con);
$userinfo = $user_obj->userInfo($user_id);
?>
<div class="col-xs-6 col-xs-4">
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="<?php echo $userinfo['picture'] ?>" name="aboutme" width="140" height="140" class="img-circle"></a>
        <h4><?php echo $userinfo['first_name'] . " ". $userinfo['last_name'] ?></h4>
        <!-- <em>(Click Picture for Settings)</em> -->
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel"><?php echo $userinfo['first_name']?>'s Settings</h4>
                    </div>
                <div class="modal-body">
                    <center>
                    <img src="<?php echo $userinfo['picture'] ?>" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading"><?php echo $userinfo['first_name'] . " ". $userinfo['last_name'] ?><small><?php echo " " . $userinfo['account'] ?></small></h3>
                    <span><strong>Email: </strong></span>
                        <span class="label label-info"><?php echo $userinfo['email'] ?></span>
                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong>Settings go here: </strong><br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                    <br>
                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </center>
                </div>
            </div>
        </div>
</div>
 <div class="table-responsive col-xs-6 col-xs-4">
  <table class="table">
  <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>
<div class="col-xs-6 col-xs-4">
</div>
