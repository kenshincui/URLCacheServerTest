<?php
	$time=time();
	$interval=30;
//    header('Last-Modified: '.gmdate('r',$time));
    #header('Cache-Control: max-age='.$interval);
    header('Content-type: application/json');
//    header('Content-Encoding: gzip');
//    header('Vary: Accept-Encoding');

	$arr = array('date'=>gmdate('r',$time));
 	echo json_encode($arr);
?>
