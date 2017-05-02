<?php
// MAIN LIB

date_default_timezone_set('America/Los_Angeles');

$filename = '/tmp/pjmode.activated';

// Functions

function activate(){
    $file = '/tmp/pjmode.activated';

    touch($file);

    $answer = 'Activated!';
    
    return $answer;
}

function score(){
    
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

    	if ($dow == 'Monday' || $dow == 'Wednesday' || $dow == 'Thursday' || $dow == 'Friday')
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

    $file = '/tmp/pjmode.activated';

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

    return $answer;
}

