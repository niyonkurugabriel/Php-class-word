<?php
$totalamount=2000;
$an;
if($totalamount>1000){
    $an=($totalamount*10)/100; 

}
else{
    $an='not found';
}
echo  'the final maney was need pay is'.($totalamount-$an);
?>