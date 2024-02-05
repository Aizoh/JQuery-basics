
<?php 
if( $_REQUEST["name"] || $_REQUEST["age"]) { 

$name = $_REQUEST['name']; 
$age = $_REQUEST['age'];
echo "Welcome ". $name . "Youre". $age . "years old"; 
} 

?> 
