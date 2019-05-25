<?php 
	function ganti_kata($kata,$hurufawal,$hurufahir){
		$result = str_replace($hurufawal, $hurufahir, $kata);
		return $result;
	}

	echo ganti_kata('purwakerta','a','o');
?>