<?php
function str($str){
$str = str_replace('_'," ",$str);
$str = ucwords($str);
$str = str_replace(" ",'',$str);
return $str;
}
 
