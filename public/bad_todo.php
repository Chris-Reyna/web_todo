<!DOCTYPE html>

<html>
<head>
	<title>TODO</title>
</head>
<body>
	<h1>Things To Do</h1>
	<ul>
		<?php
			$items = array('Take out the trash', 'Wash the car', 'Cut the grass', 'Shoot the dog'); 
			foreach ($items as $key => $value) {
				echo "<li>$value</li>";
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