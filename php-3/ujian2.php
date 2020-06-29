<?php
/**
 * CONTOH: 
 * perolehan_medali(
 *  array(
 *    array('Indonesia', 'emas'), 
 *    array('India', 'perak'), 
 *    array('Korea Selatan', 'emas' ), 
 *    array('India', 'perak'), 
 *    array('India', 'emas'), 
 *    array('Indonesia', 'perak'), 
 *    array('Indonesia', 'emas'), 
 *  )
 * );
 * 
 * output: 
 * Array(
 *    Array (
 *      [negara] => 'Indonesia'
 *      [emas] => 2
 *      [perak] => 1 
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'India'
 *      [emas] => 1
 *      [perak] => 2 
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'Korea Selatan'
 *      [emas] => 1
 *      [perak] => 0 
 *      [perunggu] => 0
 *    )
 * )
 * 
 * 
 */

function perolehan_medali($arr){
  
  // for ($i=0; $i < count($arr); $i++) { 
  //     $list=["negara"=>$arr[$i][0],
  //            $arr[$i][1]
  //     ];
  //     array_count_values($arr[$i][1]);
  //     echo "<pre>";
  //     print_r($list);
  //     echo "</pre>";
    foreach ($arr as $key => $value) {
      echo "<pre>";
      echo "key =".$key."<br>";
       foreach ($value as $k => $v){
        array_count_values($v);
        echo ($value);
      }
      echo "</pre>";
     };

  // };
  
  
        // Kode kamu di sini
}


 // TEST CASES
 print_r (perolehan_medali(
   array(
    array('Indonesia', 'emas'), 
    array('India', 'perak'), 
    array('Korea Selatan', 'emas' ), 
    array('India', 'perak'), 
    array('India', 'emas'), 
    array('Indonesia', 'perak'), 
    array('Indonesia', 'emas') 
   )
  ));
/**
 * output: 
 * Array(
 *    Array (
 *      [negara] => 'Indonesia'
 *      [emas] => 2
 *      [perak] => 1 
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'India'
 *      [emas] => 1
 *      [perak] => 2 
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'Korea Selatan'
 *      [emas] => 1
 *      [perak] => 0 
 *      [perunggu] => 0
 *    )
 * )
 */

 print_r(perolehan_medali([])); // no data
?>