<?php 
	function ganti_kata($kata,$hurufawal,$hurufahir){
		$result = str_replace($hurufawal, $hurufahir, $kata);
		return $result;
	}
	
	//tambahkan kode "echo ganti_kata('kataygmaudiubah','hurufawal','hurufpengganti');" - dibagian bawah teks ini tanpa tanda petik . 
	//contoh echo ganti_kata('purwakerta','a','o');
	//hasilnya : purwokerto


	//letakkan kodenya diatas ini
?>
