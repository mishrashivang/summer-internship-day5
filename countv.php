<?php
$a=array("C","c","php","php","java");
$newarr=array_count_values($a);
foreach ($newarr as $key => $values)
{
    echo"<br/>$key-<strong>$values</strong>";

}
?>