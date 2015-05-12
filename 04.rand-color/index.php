<!DOCTYPE html>
<html>
<body>
<?php
$r = rand(0, 255);
$g = rand(0, 255);
$b = rand(0, 255);

$color= "rgba($r, $g, $b, 1)";
$color2 = "rgba(".$r.", ".$g.", ".$b.", 1)";
?>
<div style="background-color:<?=$color2?>; width: 200px; height: 200px; display:block; ">

</div> 

</body>
</html>

