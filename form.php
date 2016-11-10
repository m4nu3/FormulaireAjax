<?php

if(isset($_POST['app']) && !empty($_POST['app'])){
	$data = $_POST['app'];
}

parse_str($data, $output);
echo strrev($output['message']);