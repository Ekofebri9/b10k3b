<?php
function cetak_gambar(){
    $string = ['P','R','O','G','R','A','M','M','E','R'];
	$length=count($string);
	for($i=0;$i<$length;$i++){
		$long=$length-1;
		for($ii=0;$ii<$length;$ii++){
			$huruf=$long-$i;
			if ($ii==$i || $ii==$huruf){
				echo $string[$i].' ';
			}else{
				echo '= ';
			}
		}
		echo "\n";
	}
	
}
cetak_gambar();
?>
