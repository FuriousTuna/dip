<?php
	include "db1.php";
	$g=$_POST['ta'];
	$query=$dbh->prepare('UPDATE settings SET r2=\'0\'');
	$query->execute();
	$query->setFetchMode(PDO::FETCH_ASSOC);
	for($i=0; $i < count($g); $i++)
    {
		$query=$dbh->prepare('UPDATE settings SET r2=\'1\' WHERE val=:g');
		$query->bindParam(':g',$g[$i]);
		$query->execute();
		$query->setFetchMode(PDO::FETCH_ASSOC);
    }
	header("location:settings.php");
	
?>