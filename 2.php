<?php
function validasi(){
	$username="eko.febr";
	$email="Kk@o1.com";
	$low	   = preg_match('@[a-z]@', $username);
	$titik	   = preg_match('@\.@', $username);
	$uppercase = preg_match('@[A-Z]@', $email);
    $lowercase = preg_match('@[a-z]@', $email);
    $number    = preg_match('@[0-9]@', $email);
	$SP		   = preg_match('@\.@', $email);
	$SP1	   = preg_match('@\@@', $email);
	$domain    = preg_match('/\.com$/', $email);
		if( $titik && $low && strlen($username)==8) {
			$validasi_user="username benar";
		}else{
			$validasi_user="username salah";
		}
		if( !$domain || !$SP1 || !$SP || !$number|| !$lowercase || !$uppercase || strlen($email)<4){
			$validasi_pass="email salah";
		}else{
			$validasi_pass="email benar";
		}
	return '<strong>'.$validasi_user.' dan '.$validasi_pass.'</strong>';
}
echo validasi();
?>
