<html>
	<head>
		<title>Test 02</title>

	</head>
	<body>
		<form method="POST" action="test_02.php">
			<input type="text" name="oddCount">
			<input type="submit" name="submit" value="Submit" />
		</form>

		<?php 
			if(isset($_POST['submit'])){
				$xy=$_POST['oddCount'];
					for ($x = 1; $x < $xy;) {
						
	    			echo $x.",";
	    			$x=$x+2;
	    			
					} 
			}
		?>
		

	</body>
</html>