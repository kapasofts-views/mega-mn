<?php

echo '<ul class="nav nav-list sidemenulist">';
foreach($main_menu as $key => $value){
    echo '    <li><a href="'.$value['url'].'">'.$value['title'].'</a></li>';
}
echo '</ul>';