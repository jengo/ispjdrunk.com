<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Is PJ Drunk? - PJ MODE! GO!</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="static/css/main.css">
    </head>
    <body>
        <?php

        date_default_timezone_set('America/Los_Angeles');

        $file = dirname(__FILE__) . '/pjmode.activated';

        touch($file);

        $answer = 'Activated!';

        ?>

        <h1><?php echo $answer ?></h1>
        
    </body>
</html>



