<?php
include_once('main.php');

$i = user_name_exists('aishik');

if($i==true)
{
	echo "true";
}else
{
	echo "false";
}

?>