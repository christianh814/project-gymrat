<?php
class Login {
	public function fbCallback() {
		$login_user = new FB();
		$login_user->login();
	}

	public function getFBtoken() {
		return !empty($_SESSION['fb_access_token']) ? $_SESSION['fb_access_token'] : false;
	}
}
?>
