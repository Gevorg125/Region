<?php
/**
 * Created by PhpStorm.
 * User: gev
 * Date: 1/26/18
 * Time: 1:02 PM
 */
use frontend\widgets\ContentWidget;


print_list($menu);
function print_list($menu)
{
    echo '<ul >';
    foreach ($menu as $list_item) {
        echo '<li >';
        echo "<a href='#'>{$list_item['name']}</a>";
        if (array_key_exists('items', $list_item) && is_array($list_item['items']))
            print_list($list_item['items']);
        echo '</li>';
    }
    echo "</ul>";
}

?>

