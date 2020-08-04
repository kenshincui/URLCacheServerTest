<?php

	header('Content-type: text/json');

	$arr = array('date'=>gmdate('r',time()));
 	echo json_encode($arr);

?>