<?php

require_once("Config/Config.php");
$url = !empty($_GET['url']) ? $_GET['url'] : 'Home/home';
$arrUrl = explode("/", $url);
$controller = $arrUrl[0];
$method = $arrUrl[0];
$params = "";

if (!empty($arrUrl[1])) {
	if ($arrUrl[1] != "") {
		$method = $arrUrl[1];
	}
}

if (!empty($arrUrl[2])) {
	if ($arrUrl[2] != "") {
		for ($i = 2; $i < count($arrUrl); $i++) {
			$params .=  $arrUrl[$i] . ',';
			# code...
		}
		$params = trim($params, ',');
	}
}
require_once("Libraries/Core/Autoload.php");
require_once("Libraries/Core/Load.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>





<body>
    <script src="node_modules/jquery/dist/js/bootstrap.min.js"></script>
</body>
</html>

