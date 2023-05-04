<!DOCTYPE html>
<html>
<body>

<h3>Triangle Offside Left</h3>
<?php
for($i=0; $i<=5; $i++){
    for($j=1; $j<=$i; $j++){
        echo "*";

    }
    echo "<br/>";
}

?>

<h3>Triangle Offside Right</h3>
<?php
echo '<p style="float: left; text-align: right;">';
for($i=1; $i<=5; $i++){
    for($j=$i; $j>=1; $j--){
        echo "*";
    }
    echo"<br/>";
}
echo '</p>';
?>

<h3>Triangle Downside Left</h3>
<?php
for($i=5; $i>=1; $i--){
    for($j=1; $j<=$i; $j++){
        echo "*";

    }
    echo "<br/>";
}

?>

<h3>Triangle Downside Right</h3>
<?php
echo '<p style="float: left; text-align: right;">';
for($i=5; $i>=1; $i--){
    for($j=$i; $j>=1; $j--){
        echo "*";
    }
    echo"<br/>";
}
echo '</p>';
?>


</body>
</html>