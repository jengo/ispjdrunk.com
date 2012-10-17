<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />

<style type="text/css">

h1
{
	font-family: "HelveticaNeue-UltraLight";
	width: 100%;
	text-align: center;
	font-size: 10em;
}

</style>

<?php

date_default_timezone_set('America/Los_Angeles');

$file = dirname(__FILE__) . '/pjmode.activated';

touch($file);

$answer = 'Activated!';

?>

<h1><?php echo $answer ?></h1>

