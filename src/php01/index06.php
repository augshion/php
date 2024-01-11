<?php
function square($base, $heigth)
{
    return $base * $heigth;
}

function tri($base, $heigth)
{
    return $base * $heigth / 2;
}
function trap($topbase, $bottombase, $heigth)
{
    return ($topbase + $bottombase) * $heigth / 2; 
}


echo square(5, 5) . "\n";
echo tri(7, 8) . "\n";
echo trap(4, 5, 4);

