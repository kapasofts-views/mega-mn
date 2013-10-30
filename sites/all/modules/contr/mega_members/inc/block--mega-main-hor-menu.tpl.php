<?php

echo '<ul class="topmenu">';
foreach($main_menu as $key => $value){
    echo '    <li><a href="'.$value['url'].'">'.$value['title'].'</a></li>';
    echo '<li class="spacer">|</li>';
}
echo '</ul>';