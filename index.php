<?php 
if(isset($_POST)){
	foreach ($_POST as $key => $value) {
		# code...
		echo "$key : $value<br>";
	}
	echo "<br><form method='post' action='xyz' >";
	foreach ($_POST as $key => $value) {
		# code...
		echo "$key<br><input type='text' name='$key' value='$value'><br><br>";
	}
	echo "<input type='submit' name='submit'></form>";
}


 ?>