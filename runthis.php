<?php
	include('proto.php');

	$timeStart = microtime(true);

	$p = new proto();
	echo "<pre>";
	var_dump($p->connect());


	$timeEnd = microtime(true);

	echo("Script took " . (($timeEnd - $timeStart)) . " seconds!\n");
?>
