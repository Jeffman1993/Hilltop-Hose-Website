<?php
	class Application{
		public $f_name,$l_name,$address,$city,$phone,$why;
	
		function __construct($f_name,$l_name,$address,$city,$phone,$why){
			$this->f_name = $f_name;
			$this->l_name = $l_name;
			$this->address = $address;
			$this->city = $city;
			$this->phone = $phone;
			$this->why = $why;
		}
		
		function submitApplication(){
			$sql = "INSERT INTO hilltop.applications (f_name,l_name,address,city,phone,why) VALUES('$this->f_name', '$this->l_name', '$this->address', '$this->city', '$this->phone', '$this->why');";
			query($sql);
		}
	}
?>