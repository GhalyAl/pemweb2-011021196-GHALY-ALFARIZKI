<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['al', 'ghaly', 'alfarizki'];
	array_shift($name);
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>