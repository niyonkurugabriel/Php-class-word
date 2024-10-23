<?php
$tax=100001;
if($tax>100000){
    echo "you pay 15%";
}
elseif($tax>500000 && $tax<=1000000){
    echo "you pay 10%";
}
elseif($tax<=100000){
    echo " you pay 5%";
}
else{
    echo "no pay";
}


?>