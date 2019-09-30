<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-91.less', 'css/type-91.css');
        ?>
        <link href="css/type-91.css" rel="stylesheet" type="text/css"/>

      <link href="./css/swiper.min.css" rel="stylesheet" type="text/css"/>
    
    </head>

    <body>
      <?php include '../91/91-content.php'; ?>
    </body>

</html>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js'></script>
<script src='./js/swiper.min.js'></script>
<script  src="./js/script.js"></script>
