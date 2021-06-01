<?php
$arr=array('c','c++','java','android');
$indexofarr=array_rand($arr,2);
foreach($indexofarr as $key => $value)
{
    echo"<br/>$key-<strong>".$arr[$value]."</strong>";
}
?>