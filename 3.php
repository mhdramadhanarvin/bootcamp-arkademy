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

	echo count_vowels('programmer');
	echo '<br/>';
	echo count_vowels('hmm..');
?>