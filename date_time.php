<?php 

/*
date_default_timezone_set('Asia/Manila');
echo "</br>";
echo date('Y-m-d h:i:s a');  */


$date = 'October 27, 2003 03:34:00 PM';
echo $date;
echo "</br>";
echo date('m/d/Y H:i:s', strtotime($date));
echo date("l");

?>