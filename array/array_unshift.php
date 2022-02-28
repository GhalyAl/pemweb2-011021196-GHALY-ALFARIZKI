<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['al', 'ghaly', 'alfarizki'];
	array_unshift($name, 'gal', 'al');
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>