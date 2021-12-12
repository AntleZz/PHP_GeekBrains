<?php

$direct = 'images/small';
$direct2 = 'images/big';

$files = array_slice(scandir($direct), 2);


?> 

<DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title> Art for all </title>
<link href="site.css" rel="stylesheet">
</head>
<header>
    <div id="header">
        <div id="name">Задания для урока № 4</div>
    </div>
</header>
<div id="main">
<?php 
for ($i = 0; $i < count($files); $i++){ ?>
  <a rel="Arts" class="photo" href="<?=$direct2."/".$files[$i]?>" target="_blank"><img src="<?=$direct."/".$files[$i]?>" alt="" /></a>
<?php } ?>	
	</div>
</body>
</html>
