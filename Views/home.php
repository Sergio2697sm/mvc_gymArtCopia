<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $data['tag_page']; ?></title>
</head>
<body>
	<section id="<?php echo $data['page_id']; ?>">
		<h1><?php echo $data['page_title']; ?></h1>
		<p><?php echo $data['page_content']; ?></p>
	</section>
	<a href="Clientes/home">Clientes</a>
	<a href="Monitores/home">Monitores</a>
</body>
</html>