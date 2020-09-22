<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php
		$customers = array();
		$customers[] = array('Rahim', 'rahim@abc.co', '01234567890');
		$customers[] = array('Karim', 'karim@abc.co', '01234567890');
		$customers[] = array('Hasib', 'hasib@abc.co', '01234567890');
		$customers[] = array('Minar', 'minar@abc.co', '01234567890');
	?>
</head>
<body>
	<table border='1' cellpadding='10' rules='all' align='center'>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
		</tr>
		<?php
			foreach ($customers as $customer) {
				?>
					<tr>
						<?php
							for ($i=0; $i < count($customer); $i++) { 
								?>
									<td><?=$customer[$i];?></td>
								<?php
							}
						?>
					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>