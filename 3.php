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

	//tambahkan kode "echo count_vowels('inikata');" tanpa tanda petik dibagian bawah teks ini 
	//inikata bisa diganti dengan yang lain
	//contoh echo count_vowels('akudiadankamu');
	//hasilnya : 7
	//letakkan kodenya dibawah ini


	//letakkan kodenya diatas teks ini
?>
