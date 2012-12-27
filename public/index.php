<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Is PJ Drunk?</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="static/css/fancy.css">
    </head>
    <body>

        <?php

        date_default_timezone_set('America/Los_Angeles');

        $score = 1;
        $hour  = date('G');
        $min   = date('i');
        $dow   = date('l');
        $mtime = null;

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
    </body>
</html>
