<?php
require_once("includes/config/init.php");
$fb_login = new Login();
$fb_login->fbCallback();
//
$fb_user = new FB();
$fb_user_array = $fb_user->returnUserArray();
$fb_user_id = $fb_user_array['id'];
$user = new User($con);
//
if (!$user->isThere($fb_user_id)) {
        $facebook = new Login();
        $user->createUser($facebook->getFBtoken());
}
header("Location: index.php");
?>
