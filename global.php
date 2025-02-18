<?php

$prefix = 'commander. ';

function getUserWithprefix($name){
global $prefix;
return $prefix.$name;
}

echo getUserWithprefix('Yosef Amir');

?>
