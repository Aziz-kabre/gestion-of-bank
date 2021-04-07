w<?php
$a = scandir("controllers");
$nbre = count($a);
//var_dump($nbre); die();
for ($i=2; $i < $nbre ; $i++) { 

	require "controllers/".$a[$i];
}


//require "controllers/StagiaireController.php";

if(isset($_GET['c']) and isset($_GET['a'])){

	$class = $_GET['c'];
	$method = $_GET['a'];

	if(class_exists($class) and method_exists($class, $method)){
		$class = new $class();
		$class->$method();
	}else{
		echo "404";
	}
}else{
	echo "404";
}


 ?>