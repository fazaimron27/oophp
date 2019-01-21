<?php

// define('NAMA', 'Faza Iman Imron');
// echo NAMA;

// echo "<br>";

// const UMUR = 17;
// echo UMUR;

// class  Coba {
// 	const NAMA = 'Faza';
// }

// echo Coba::NAMA;



// echo __FILE__;


// function coba() {
// 	return __FUNCTION__;
// }

// echo coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new coba;
echo $obj->kelas;










?>