<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Language" content="pl" />
	<meta name="Author" content="Nikodem Banach" />
	<script src="js/kolorujtlo.js" type="text/javascript"></script>
	<script src="js/timedate.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/style.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin: 0;
        }
		table, th, td {
			text-align: center;
            background-color: #444;
            padding: 10px;
		}
		th a{
            color: #fff;
            text-decoration: none;
            margin: 10px;
        }

        section {
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body onload="startclock()">
<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
if ($_GET['idp'] == '') {
    $strona = '/html/glowna.html';
} elseif ($_GET['idp'] == 'podstrona1') {
    $strona = '/html/Rekordziści.html';
} elseif ($_GET['idp'] == 'podstrona2') {
    $strona = '/html/Zeszłe Gale.html';
} elseif ($_GET['idp'] == 'podstrona3') {
    $strona = '/html/Gala 2024.html';
} elseif ($_GET['idp'] == 'podstrona4') {
    $strona = '/html/Kontakt.html';
}	elseif ($_GET['idp'] == 'podstrona5') {
    $strona = '/html/filmy.html';
} else {
    echo $strona = '/html/glowna.html';
}
?>
    <footer>
        &copy; Nikodem Banach 2023
    </footer>
	<?php
	$nr_indeksu = '164338';
	$nrGrupy = '1';
	echo 'Autor: Nikodem Banach '.$nr_indeksu.' grupa '.$nrGrupy.' <br /><br />';
	?>
</body>
</html>
