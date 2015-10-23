<?php

	$con = mysqli_connect("localhost", "root", "") or die("Erro 1");
	mysqli_select_db($con, "biblioteca") or die( mysqli_error($con) );
	mysqli_query($con, "SET NAMES utf8");
?>