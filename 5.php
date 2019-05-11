<?php
$data = array(['a','c','b','e','d'],['g','e','f']);
$datalain = array(['g','h','x','j'],['a','c','b','e','d'],['q','w','a']);

function sort_array($array){
    $jml_isi=count($array);
	$tmp='';
    for ($i = 0; $i < $jml_isi; $i++) {
        $jml_isi_dalam=count($array[$i]);
        for ($a = 0; $a < $jml_isi_dalam; $a++) {
            for ($aa = $a; $aa < $jml_isi_dalam; $aa++) {
                if($array[$i][$aa] < $array[$i][$a]){
                    $tmp=$array[$i][$a];
                }
            }
        } 
		$array1[$i]=$tmp;
    }
    print_r($array1);
}
print_r($datalain);
echo "<br>=========<br> menjadi <br>=========<br>";
sort_array($datalain);
?>
