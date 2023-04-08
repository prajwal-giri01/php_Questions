<!DOCTYPE html>
<html>
<body>

<?php

function multiply($num){
for ($x = 1; $x <= 10; $x++) {
    $result=$x*$num;
    echo $num."*".$x."=".$result. "<br>";
  }
}
multiply(5);
?>

</body>
</html> 