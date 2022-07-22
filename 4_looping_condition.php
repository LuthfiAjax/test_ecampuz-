<!DOCTYPE html>
<html>
<body>

<?php  
for ($x = 1; $x <= 50; $x++) {
  if ($y = $x %  3==0){
        echo "$x foo<br>";
    } elseif ($y = $x %  5==0){
        echo "$x Bar<br>";
    } else{
        echo "$x<br>";
    }
}
?>  

</body>
</html>
