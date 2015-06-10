<?php
$pms = ini_get('post_max_size');
$letter = $pms[strlen($pms)-1];

if($letter == "K"){
	$m = $pms * 1024;
	echo "$m bytes";
}
elseif($letter == 'M'){
	$m = $pms * 1024 * 1024;
	echo "$m bytes";
}
elseif($letter == "G"){
	$m = $pms * 1024 * 1024 * 1024;
	echo "$m bytes";
}
else
	echo "$pms bytes";

?>