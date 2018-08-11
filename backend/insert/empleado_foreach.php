<?php

echo $_POST["nombres"]."<br>";



foreach ($_POST as $key => $value) {
	echo $key."==>".$value."<br>";
	if($key == "CentroCosto"){
		foreach ($value as $key1 => $value1) {
			var_dump($value);
			echo $key1."==>".$value1."<br>";
		}
	}
}




?>