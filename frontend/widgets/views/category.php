<?php
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\bootstrap;


function print_list($menu)
{
    foreach ($menu as $div_item) {
        echo '<div style="border: 1px solid black; width: 20%; ">';
        print_r($div_item['name']);
        if (is_array($div_item['items'])) {
            $i = 0;
            foreach ($div_item['items'] as $val) {
                
                $i++;
                echo "<br>";
                echo "<a href='./index.php?r=site%2Fcontent&k=". $val['name']. "'>" .$val['name']."</a>";
                if ($i == 4) {
                    break;
                }
            }
            echo "</div>";
            echo "<br>";
        } else {
            echo "</div>";
            echo "<br>";
        }
    }
};

print_r(print_list($menu));



