<?php
class sekolah{
	var $SMK;
	var $kuliah;
	function dimana(){
		return $SMK;
		return $kuliah;
	}
}
class kemampuan{
	var $name;
	var $score;
	function pro(){
		return $skill;
	}
}
function mengembalikan_biodata(){
    $sekolah= new sekolah();
    $sekolah->kuliah="STMIK Amikom Purwokerto";
    $sekolah->SMK="SMK NB Semarang";

	$kemampuan1= new kemampuan();
    $kemampuan1->name="PHP";
	$kemampuan1->score=8;
    $kemampuan2= new kemampuan();
    $kemampuan2->name="HTML";
	$kemampuan2->score=7;
    $kemampuan=array($kemampuan1,$kemampuan2); 
	
	$biodata=array( 'nama'=> "EKO F",
	                'address'=> "Jl. Soeparto No. 05",
	                'hobbies'=> array("jogging","bela diri","ngoding"),
	                'is_married'=> False,
	                'school'=> $sekolah,
	                'skills'=> $kemampuan);
	
	return json_encode($biodata);
}
$data=mengembalikan_biodata();
echo $data;
?>