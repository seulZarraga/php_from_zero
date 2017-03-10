<?php 

	$file = "example.txt";

	if($handle = fopen($file, "r")){

		$content = fread($handle, filesize($file)); // this brings the whole file

		$short = fread($handle, 10); // each bite equals a one character

		echo $content;

		fclose($handle);
	}else{

		echo "Somenthing went wrong!";
	}

	
 ?>