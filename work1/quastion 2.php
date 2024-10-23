<?php
$grade;
$average=50;
if($average>90){
    echo "grade A";
}
elseif($average>80 && $average<=90){
    echo "grade B";
}
elseif($average>=60 && $average<=70){
    echo "grade C";
}
else{
    echo"FAIL";
}
?>
