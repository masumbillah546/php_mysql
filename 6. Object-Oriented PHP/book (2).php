<?php

class Book{

	public $title;
	public $sbin;

	public function __construct($title, $sbin){

		echo "This book is ". $this->title=$title."<br>";
		echo "SBIN is ". $this->sbin=$sbin;
	}

}

	new book("PHP","2345");


?>