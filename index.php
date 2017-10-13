<?php

require 'Templates/Header.php';
if (isset($_GET['p'])) {
	$file = 'Parts' . DIRECTORY_SEPARATOR . ucfirst($_GET['p']) . '.php';
} else {
	$file = 'Parts/Main.php';
}


if (file_exists($file)) {
	require $file;
} else {
	require 'Templates/404.php';
}
require 'Templates/Footer.php';