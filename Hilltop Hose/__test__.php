<?php

	require 'classes/user.php';

	$user = getUser(null,$_GET['id']);

	echo "
			F Name: $user->first_name <br>
			L Name: $user->last_name <br>
			Full Name : $user->full_name <br>
			Suffix: $user->suffix <br>
			Rank: $user->rank <br>
			Phone: $user->phone <br>
			Domain: $user->carrier_domain <br>
			Email: $user->email <br>
			";
?>