<?php
	require_once "Log.php";
	
Class Auth {


	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	public function __construct()
    {
    }
	
	public static function attempt($username, $password){
		$log = new Log('session');

		if($username === 'guest' && password_verify ($password , self::$password )){
			$logged_in_user = session_id();
			$_SESSION['key'] = $logged_in_user;
			$_SESSION['username'] = $username;
			//setting a session variable
			$_SESSION['logged'] = true;

			$log->logInfo("User {$username} logged in.");
			return true;
		}
		//if incorrect login but not empty fields
		else if(!empty($username) && !empty($password)){
			$log->logError("User $username failed to log in!");
			return false;
		}
		//for log out or empty
		else{
			$log->logError("Loggin out! or emtpy input");
			return false;
		}
	}


	public static function check(){
		return isset($_SESSION['logged']) ? true : false;
	}

	public static function user(){
		return isset($_SESSION['username']) ? $_SESSION['username'] : null;
	}

	public static function logout(){
		 // clear $_SESSION array
	    session_unset();
	    // delete session data on the server and send the client a new cookie
	    session_regenerate_id(true);
	}


}
?>