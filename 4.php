<?php 
	function cetak_gambar($jumlah)
	{
		for($i=0;$i<$jumlah;$i++){
			echo ' X ';
		}
		echo '<br/>'; 
		for($i1=0;$i1<$jumlah-2;$i1++){
			// if($jumlah <= 5){
			// 	$angka = 2;
			// }elseif($jumlah <= 10){
			// 	$angka = 4;
			// }

			if($jumlah%2 == 1){
				$angka = ($jumlah-1)/2;
			}else{
				$angka = ($jumlah/2)-1;
			} 
			for($ii=0;$ii<$angka;$ii++){
				echo ' = ';
			}
			if($jumlah%2 == 1){
				echo 'X';
			}else{
				echo 'XX';
			}
			for($ii=0;$ii<$angka;$ii++){
				echo ' = ';
			}	
			echo '<br/>';		
		}
		for($i=0;$i<$jumlah;$i++){
			echo ' X ';
		}
	}

	//tambahkan kode echo cetak_gambar(angka) dibawah komentar ini 
	//ubah angka menjadi angka yg ingin dicetak	
	//contoh echo cetak_gambar(5)
	//hasil :X X X X X
	//	     = = X = =
	//	     = = X = =
	//	     = = X = =
	//	     X X X X X 
	//letakkan dibawah ini


	//letakkan diatas ini
?>
