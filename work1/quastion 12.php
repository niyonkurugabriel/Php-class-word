<?php
$z=78;
$t=6;
$r=56;
if($z>$r & $z>$t){
    echo "largest number is".$z;
}
else if($t>$z & $t>$r){
    echo "largest number is".$t;

}
else if($r>$z & $r>$t){
    echo "largest number is".$r;
}
else {
    echo "no number entered";
}
?>