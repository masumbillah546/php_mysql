

<!----------------------------------------------->

	<?php


	include("dbconfig.php");

	$get = mysqli_query($con, "SELECT * FROM apple");

			$app=0;
			

		while ($row = mysqli_fetch_array($get)) {

				
				$row['bazar'];
				$row['tk'];

				 $app+=$row['tk'];
			
				
		}



	?>

<!----------------------------------------------->	
	
	<?php


	include("dbconfig.php");

	$get = mysqli_query($con, "SELECT * FROM masum");

			$mas=0;
			

		while ($row = mysqli_fetch_array($get)) {

				$row['bazar'];
				$row['price'];
							
				 $mas+=$row['price'];
				
		}

	
	?>

<!----------------------------------------------->
	

	<?php


	include("dbconfig.php");

	$get = mysqli_query($con, "SELECT * FROM tanvir");

			$tan=0;
			

		while ($row = mysqli_fetch_array($get)) {

				$row['bazar'];
				$row['price'];
						
				 $tan+=$row['price'];
				
		}


	?>

<!----------------------------------------------->

	<?php


	include("dbconfig.php");

	$get = mysqli_query($con, "SELECT * FROM antor");

			$ont=0;

		while ($row = mysqli_fetch_array($get)) {


				$row['bazar'];
				$row['price'];

				 $ont+=$row['price'];
				
		}


		$tb=$app+$mas+$tan+$ont;



	?>

		
