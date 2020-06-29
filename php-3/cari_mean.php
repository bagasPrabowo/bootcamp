<?php

function hitung($string_data){
	$hasil = eval('return '.$string_data.';');
	return $hasil;
//kode di sini
}

// TEST CASE 
echo hitung("102*2")."<br>"; // 3
echo hitung("2+3")."<br>"; // 5
echo hitung("100/25")."<br>"; // 5
echo hitung("10%2")."<br>"; // 2
echo hitung("99-2")."<br>"; // 7

?>