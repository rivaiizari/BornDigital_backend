<html>
	<head>
		<title>Test 01</title>

	</head>
	<body>

		<?php 
			$nilai = "9.327.421";	

			$za = strlen($nilai);
			echo "Print Value ".$nilai;
			echo "<br><br>";
			//echo "$za";
			//substr($kalimat,3);
			switch ($za) {
		    case 9:
		        echo substr($nilai,0,1)."000000"."<br>";
		    case 8:
		        echo substr($nilai,2,1)."00000"."<br>";
		    case 7:
		        echo substr($nilai,3,1)."0000"."<br>";
		    case 6:
		        echo substr($nilai,4,1)."000"."<br>";
		   	case 5:
		        echo substr($nilai,6,1)."00"."<br>";
		    case 4:
		        echo substr($nilai,7,1)."0"."<br>";
		    case 3:
		        echo substr($nilai,8,1)."<br>";
		    break;
		       
		  }
		?>
	</body>
</html>