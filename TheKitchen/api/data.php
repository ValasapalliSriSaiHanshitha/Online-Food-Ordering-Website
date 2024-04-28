<?php

try {

    if (!file_exists('../backends/connection-pdo.php' ))
        throw new Exception();
    else
        require_once('../backends/connection-pdo.php' ); 
		
} catch (Exception $e) {

	$arr = array ('code'=>"0",'msg'=>"There were some problem in the Server! Try after some time!");

	echo json_encode($arr);

	exit();
	
}

if (!isset($_REQUEST['key'])) {
	$arr = array ('msg'=>"User Data API", 'dev'=>"Sanjukta Mishti Chakroborty");

	echo json_encode($arr);

	exit();

} else {

	if (strcmp('Nikesh', $_REQUEST['key']) == 0) {

		$sql = "SELECT * FROM users;";
        $query  = $pdoconn->prepare($sql);
        $query->execute();
        $arr = $query->fetchAll(PDO::FETCH_ASSOC);

		echo json_encode($arr);
	} else {

		$arr = array ('code'=>"0",'msg'=>"Invalid API Key!");

		echo json_encode($arr);
	}


	exit();
}