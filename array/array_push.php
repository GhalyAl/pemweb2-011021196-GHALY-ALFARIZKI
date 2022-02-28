<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['al', 'Ghaly', 'Alfarizki'];
	array_push($name, 'al');
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>