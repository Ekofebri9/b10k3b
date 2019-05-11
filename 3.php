<?php
function acak($ulang){
    $karakter= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
    $acak=array();
    for ($i = 0; $i < $ulang; $i++) {
        $string = '';
        for ($ii = 0; $ii < 32; $ii++) {
            $pos = rand(0, strlen($karakter)-1);
            $string .= $karakter{$pos};
        }
		//untuk pengecekan nilai string dalam array tidak sama.
		if(in_array($string, $acak)){
			$sama[$i]=$string;
			$i--;
		}else{
        $acak[$i]=$string;
		}
    }
	return $acak;
}
$sama=array();
$random=acak(10);
foreach ($random as $acak) {
    echo $acak.'<br>';
}
if(count($sama)!=0){
	print_r($sama);
}
?>