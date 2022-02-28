<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['gal', 'Ghaly', 'Alfarizki'];
	array_pop($name);
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>