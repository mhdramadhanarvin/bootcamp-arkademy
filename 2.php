<?php 
	function betweenDays($tgl1 , $tgl2)
	{
		$ex = explode('-', $tgl1);
		$ex1 = $ex[0];
		$ex2 = $ex[1];
		$ex3 = $ex[2];
	}

	echo betweenDays('2019-11-01','2019-11-05');
?>