<?php
// URL TARGET
$url = 'https://tekno.alvindayu.com/sitemap';
//end
// get / mengambil content berdasarkan url yang akan di curi datanya
$content = file_get_contents($url);
//
// STEP 1 mengambil syntax pembuka
$first_step = explode( '<div class="1"></div>' , $content );
//
// STEP 2 mengambil syntax penutup
$second_step = explode('<div class="2"></div>' , $first_step[1] );
//
$text1 = $second_step[0];
//Tampilkan 
echo $text1;
?>
