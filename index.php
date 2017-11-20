<?php

try {
	require_once 'application/start.php';
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
?>