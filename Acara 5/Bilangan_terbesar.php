<?php
function bilanganTerbesar($bilangan1,$bilangan2){
    if($bilangan1 > $bilangan2){
        return $bilangan1;
    }
    else{return $bilangan2;}
}
$bilangan1 = 200;
$bilangan2 = 500;
$terbesar = bilanganTerbesar($bilangan1,$bilangan2);
echo "Bilangan terbesar adalah:".$terbesar;
?>
