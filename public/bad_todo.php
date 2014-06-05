
<?php
$filename='todo_list.txt';
$items = array();

var_dump($_GET);



function openFile($filename) {
	$handle = fopen($filename, "r");
	$content = fread($handle, filesize($filename));
	fclose($handle);
	return explode("\n", $content);
}

function saveFile($filename, $items) {
	if (is_writable($filename)){
		$itemStr = implode("\n", $items);
		$handle = fopen($filename, "w");
		fwrite($handle, $itemStr);
		fclose($handle);
		
	}
}

$items = openFile($filename);
saveFile($filename,$items);

if (isset($_GET['id'])){
	unset($items[$_GET['id']]);
	saveFile($filename, $items);
}

if (isset($_POST['TASK'])){
	$item=$_POST['TASK'];
	array_push($items,$item);
	saveFile($filename,$items);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>TODO</title>
</head>
<body>
	<h1>Things To Do</h1>
	<ul>
		<?php
		 
			foreach ($items as $key => $value) {
				echo "<li>$value | <a href='?id=$key'>Remove Completed Task</a></li>";
			}
		?>
	</ul>
	<hr>

		<h3>Add Tasks to list</h3>
		<form method="POST" action="">
	    	<p>
	        	<label for="TASK">TASK</label>
	        	<input type="text" id="TASK" name="TASK" value="">
	    	</p>
	    	<p>
	        	<button type="submit">ADD</button>
	    	</p>	
		</form>

</body>
</html>