<?php
$n=$_GET['n'];
function factorial($n)
{
    if ($n<=1)
    {
        return 1;
    }
    else
    {
        return $n*factorial($n-1);
    }
}

?>