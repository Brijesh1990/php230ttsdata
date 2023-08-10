<?php 
function si($p,$n,$r)
{
    $si=$p*$r*$n/100;
    return $si;
}
echo "The interest is :".si(800000,2,5);
?>