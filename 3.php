<?php 
	function count_vowels($kata){ 

		$trim = trim($kata);
		$hurufKecil = strtolower($trim);
		$space = str_replace(' ', '', $hurufKecil);
		$jumlah = strlen($space);
		$a = substr_count($space, 'a');
		$i = substr_count($space, 'i');
		$u = substr_count($space, 'u');
		$e = substr_count($space, 'e');
		$o = substr_count($space, 'o');
		$vocal = $a+$i+$u+$e+$o;
	  	return $vocal;
	} 

	//tambahkan kode echo count_vowels('kata'); dibagian bawah teks ini 
	//kata bisa diganti dengan yang lain


	//letakkan kodenya diatas teks ini
?>
