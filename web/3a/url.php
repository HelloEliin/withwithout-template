<!DOCTYPE html>
<html>
<head>
<title>Bakgrund</title>
<style>


<?php


if (isset($_GET['color'])) {

   $background = $_GET['color'];
   echo "body { background-color: #".$background."; }"; 
    
} else {
    echo "body { background-color: #ffffff; }";
}


?>
</style>
</head>
<body>
<?php
foreach ($_GET as $key=>$val){
    echo "<p>".$key.": ".$val."</p>";

} ?>

		
</body>
</html>