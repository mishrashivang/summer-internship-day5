<?php
$arr=array('c','c++','java','android','php','c++','php');
shuffle($arr);
foreach($arr as $key=>$values)
{
    echo"<br/> $values";
}
?>