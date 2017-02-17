<?php 
	include "config.php";

	$id=htmlentities($_GET['id']);
	
	$crud->Delete($id);
