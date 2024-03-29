<!DOCTYPE html>

<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
    <div class="mod_custom_14">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">
                 
                                <h2 class="features_section">Capital Features</h2>
                                
                                  
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                <div class="row">
                                                    <div class="col-xs-3 col-sm-3 col-md-4 col-lg-3 content-left">
                                                        <li><a class="fancy" href="#"><span></span><em
                                                                    class="fd"></em><img src="images/t1.png"
                                                                    alt="" /></a></li>
                                                    </div>
                                                    <div class="col-xs-9 col-sm-9 col-md-8 col-md-9"><strong>Premium Course</strong>
                                                        <div class="content">
                                                            <p>Lorem ipsum is placeholder text commonly used in the graphic</p>
                                                        </div>
                                                    </div>
                                                </div>
                                        

                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                                                <div class="row">
                                                    <div class="col-xs-3 col-sm-3 col-md-4 col-lg-3">
                                                        <li><a class="fancy" href="#" title="Dynamic Homepage Builder"
                                                                rel="group"><span></span><em class="fd"></em><img
                                                                    src="images/t2.png" alt="" /></a></li>
                                                    </div>
                                                    <div class="col-xs-9 col-sm-9 col-md-8 col-md-9"><strong>Premium Course</strong>
                                                        <div class="content">
                                                            <p>Lorem ipsum is placeholder text commonly used in the graphic</p>
                                                        </div>
                                                    </div>





                                                </div>
                                      


                                            

                                            </div>

                                         
                        </div>
                        <hr>
                    </div>
                     
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 footer">
                   
                        <div class="theme_details">

                            <div class="details_section">

                                <h3>Theme Details</h3>

                                <ul>
                                    <li class="version">Current version: <span>1.1.2</span></li>
                                    <li class="update">Last Update: <span>July 4, 2016</span></li>
                                    <li class="designer">Compatibility: <span><a href="#">WordPress 4.3 - 4.5.3+</a></span></li>
                                </ul>
                            </div>
                            <div class="details_section">
                                <h3>Quick Links</h3>
                                <ul>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a class="fancy_changelog" href="#">Changelog</a></li>
                                    <li><a href="#">Ask a Question</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
            </div> 
  
    </div>
    </body>
</html>