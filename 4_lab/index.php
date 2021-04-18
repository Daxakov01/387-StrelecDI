<?php
function fct( $n ) {
    for($r=1; $n > 1; $r *= $n--) {}
    return $r;
}
echo fct(1),"\n";
echo fct(2),"\n";
echo fct(3),"\n";
echo fct(4),"\n";
echo fct(5),"\n";
echo fct(6),"\n";
echo fct(7),"\n";
echo fct(8),"\n";