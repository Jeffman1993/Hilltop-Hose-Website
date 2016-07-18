<?php

	/**
	 * @desc Class for holding user information such as name, address, etc.
	 */
	class User{
		public $id,$first_name,$last_name,$suffix,$full_name,
			$rank,$address,$city,$phone,$carrier_domain,$email,$username;
	
		function __construct($id,$username,$first_name,$last_name,$suffix){
			$this->id = $id;
			$this->username = $username;
			$this->first_name = $first_name;
			$this->last_name = $last_name;
			$this->suffix = $suffix;
			$this->full_name = $first_name . ' ' . $last_name . ' ' . $suffix;
		}
	}
	
	
	/**
	 * @param string $username
	 * @param integer $userId
	 * @return Returns a user object if sucessful or null if not.
	 */
	function getUser($username, $userId = null){
		$user = null;
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$db = 'hilltop';
		
		$link = new mysqli($host, $user, $pass, $db);
		
		if($link->error)
			die('Error: Can not connect to database. <br>' . $link->error);
		
		if($userId != null){
			$stmt = $link->prepare('SELECT users.*, ranks.rank_name, phone_carriers.carrier_domain FROM users JOIN ranks ON rank = rank_id JOIN phone_carriers ON users.carrier_id = phone_carriers.carrier_id WHERE user_id = ?');
			$stmt->bind_param('i',$userId);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($id,$first_name,$last_name,$suffix,$phone,$carrier,$email,$rank_id,$pass,$salt,$username,$rank,$carrier_domain);
			$stmt->fetch();
			
			$user = new User($id,$username,$first_name,$last_name,$suffix);
			$user->phone = $phone;
			$user->carrier_domain = $carrier_domain;
			$user->email = $email;
			$user->rank = $rank;
			
			$stmt->free_result();
			$stmt->close();
			$link->close();
		}
		
		return $user;
	}
	
	
	/**
	 * @return Returns an array of all users.
	 */
	function getUsers(){
		require 'includes/queries.php';
		
		$users = array();
		$res = query('SELECT user_id,first_name,last_name,suffix,rank_name from users JOIN ranks ON rank = rank_id ORDER BY rank_id, last_name;');
	
		while($row = $res->fetch_assoc()){
			$user = new User($row['user_id'],$row['username'],$row['first_name'],$row['last_name'],$row['suffix']);
			array_push($users, $user);
		}
	
		return $users;
	}
?>