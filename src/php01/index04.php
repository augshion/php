<?php
$a = 4;
$people ="Taro";

if ( $a === 5 ) {
    echo "\$aは5です";
}
elseif ($a === 7) {
    echo "\$aは7です";
} 
elseif ($a === 8) {
    echo "\$aは8です";
}
    else {
    echo "\$aは5以外です";
}

echo "<br />";
switch ($people) {
    case "Taro":
        echo "太郎です";
        break;
    case "Jiro":
echo "次郎です";
break;
case "Saburo":
echo "三郎です";
break;
}

$b = ($a > 5) ? "TRUE" : "FALSE";
echo $b;