<?php
	$time=time();
	$interval=30;
	header('Last-Modified: '.gmdate('r',$time));
	header('Expires: '.gmdate('r',($time+$interval)));
	header('Cache-Control: max-age='.$interval);
	header('Content-type: text/json');

	$arr = array('date'=>gmdate('r',$time));
 	echo json_encode($arr);
?>
