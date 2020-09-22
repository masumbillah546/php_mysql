<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>For loop</title>
</head>
<body>

	<?php


		// $news="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, maiores. Ratione dolor, quos, laudantium mollitia eligendi rem distinctio corporis obcaecati quam delectus est et voluptate ex possimus architecto quo minima!";


		// for ($i=1; $i<=10; $i++){

		// 	echo "<h3>News title: ".$i."</h3><br>"."Artiel: ".$i." ".$news."<br><br>";

		// }

		$news=[
				"Title 1"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, maiores. Ratione dolor, quos, laudantium mollitia eligendi rem distinctio corporis obcaecati quam delectus est et voluptate ex possimus architecto quo minima!",

				"Title 2"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, maiores. Ratione dolor, quos, laudantium mollitia eligendi rem distinctio corporis obcaecati quam delectus est et voluptate ex possimus architecto quo minima!",

				"Title 3"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, maiores. Ratione dolor, quos, laudantium mollitia eligendi rem distinctio corporis obcaecati quam delectus est et voluptate ex possimus architecto quo minima!",

				"Title 4"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, maiores. Ratione dolor, quos, laudantium mollitia eligendi rem distinctio corporis obcaecati quam delectus est et voluptate ex possimus architecto quo minima!"];


		foreach($news as $title=>$content){


			echo "<h3>$title</h3><p>$content</p><hr>";

		}


	?>
	
</body>
</html>