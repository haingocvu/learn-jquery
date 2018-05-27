<?php 
//header('Content-type: application/json');
if(isset($_POST["method"]) && $_POST["method"] == "get"){
	$arr = [
		"name"=>"Nhi",
		"age"=>18
	];
	//need to json encoding
	echo json_encode($arr);
}
?>