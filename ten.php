<!DOCTYPE html>
<html>
<body>

<?php
function armstrong($num){
$sum=0;
$temp=$num;

$n=strlen((string)$num);
while ($temp >0){
    $digit= $temp%10;
    $sum+=pow($digit, $n);
    $temp=(int)($temp/10);

}


if ($num==$sum){
    echo"armstrong";
}
else{
    echo "not armstrong.";
}


}
armstrong(1593)
?>

</body>
</html> 