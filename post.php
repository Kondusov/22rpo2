<?php
//var_dump($_POST);
$img = $_FILES['attached'];
//echo $img;
//print_r($_FILES['attached']);
$homepage = file_get_contents($_FILES['attached']['tmp_name']);
echo $homepage;
//die();