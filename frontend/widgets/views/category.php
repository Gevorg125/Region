<?php


//echo"<pre>";
//print_r($tree);
$tree = json_decode($treee);
foreach ($tree as $cat => $subcat){
//    foreach ($subcat['child'] as $key => $value){
//        print_r ($value);
//    }
    echo "<pre>";
    var_dump($subcat['child']);
}

?>


