<?php
class User {
	public function __construct($con) {
		$this->con = $con;
	}
	//
	public function isThere($fb_id) {
		$sql = "SELECT * FROM users WHERE fb_id = '{$fb_id}' ";
		$check_user = mysqli_query($this->con, $sql);
		if (mysqli_num_rows($check_user) == 0) {
			return false;
		} else {
			$gymrat_id = mysqli_fetch_array($check_user);
			$_SESSION['user_logged_in_id'] = $gymrat_id['id'];
			return true;
		}
	}

	public function userInfo($id) {
		$sql = "SELECT * FROM users WHERE id = '{$id}' ";
		$query = mysqli_query($this->con, $sql);
		return mysqli_fetch_array($query);
	}

	public function createUser($fbt) {
		$fb_user = new FB();
		$user = $fb_user->returnUserArray();
		$user_img = "http://graph.facebook.com/" . $user['id'] . "/picture?type=large";
		// the default account is "user" until they switch to a "trainer" account
		$sql = "INSERT INTO users (fb_id, picture, first_name, last_name, email, gender, locale, account) ";
		$sql .= "VALUES ('{$user['id']}', '{$user_img}', ";
		$sql .= "'{$user['first_name']}', '{$user['last_name']}', '{$user['email']}', '{$user['gender']}', '{$user['locale']}', 'user') ";
		$add_user = mysqli_query($this->con, $sql);
		$_SESSION['user_logged_in_id'] = mysqli_insert_id($this->con);
	}
}
?>
