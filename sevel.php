<!DOCTYPE html>
<html>
<body>

<?php
function reverse($word){
     $reverseword=strrev($word);
     if ( $reverseword==$word){
        echo "The word is palindrome.";
     }
     else{
        echo "The word is not palindrome.";
     }
}
reverse("madam");
?>

</body>
</html> 