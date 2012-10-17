<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />

<style type="text/css">

h1
{
	font-family: "HelveticaNeue-UltraLight";
	width: 100%;
	text-align: center;
	font-size: 10em;
}

h1.buzzed {
font-family: "HelveticaNeue-UltraLight";
width: 100%;
text-align: center;
font-size: 10em;
text-shadow: 0 0 5px black, -3px -3px 5px #111, 2px 2px 19px rgba(20,20,200, 0.7), -2px -2px 19px rgba(20,20,20, 0.6);
}

h1.drunk {
font-family: "HelveticaNeue-UltraLight";
width: 100%;
text-align: center;
font-size: 10em;
text-shadow: 10px 10px 30px black, -10px -10px 10px #110, 2px 2px 19px rgba(20,20,200, 0.7), -8px -8px 30px rgba(20,20,20, 0.6), 0 0 5px black;
}

h1.plastered {
font-family: "HelveticaNeue-UltraLight";
width: 100%;
text-align: center;
font-size: 10em;
text-shadow: 20px 10px 30px black, -20px -10px 10px #110, 2px 2px 19px rgba(20,20,200, 0.7), -10px -8px 30px rgba(20,20,20, 0.6), 0 0 5px black, 1px 1px 20px black;
color: rgba( 5,5,5,0.4);
}

</style>

<?php

date_default_timezone_set('America/Los_Angeles');

$score = 1;
$hour  = date('G');
$min   = date('i');
$dow   = date('l');

if ($hour > 12)
{
	$score = 2;
}

if ($hour > 17)
{
	$score = 3;
}

if ($hour > 20)
{
	$score = 4;

	if ($dow == 'Monday' || $dow == 'Wendsday' || $dow == 'Thursday' || $dow == 'Friday')
	{
		++$score;
	}

	if ($dow == 'Thursday' || $dow == 'Monday')
	{
		++$score;
	}
}


// SCORES
if ($score >= 1)
{
        $answer = 'Doubtful';
}

if ($score >= 2)
{
        $answer = 'Maybe';
}

if ($score >= 3)
{
        $answer = 'Good chance';
}

if ($score >= 4)
{
        $answer = 'Strong chance';
}

if ($score >= 5)
{
        $answer = 'Quite Likely';
}

if ($score >= 6)
{
	$answer = 'Probably';
}

$file = dirname(__FILE__) . '/pjmode.activated';

if (is_file($file))
{
	$mtime = filemtime($file);
}

$last = time() - $mtime;

if ($last < (5 * 3600))
{
	$answer = 'Yes';

	if ($last < (2 * 3600))
	{
		$answer = 'YUS!';
	}
}

if (($hour == 4 || $hour == 16) && $min == 20)
{
	$answer = 'Stoned';
}


?>

<h1><?php echo $answer ?></h1>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-746656-13']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

