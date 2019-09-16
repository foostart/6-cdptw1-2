<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/style.less', 'css/style.css');
        ?>

        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="mod-custom-17">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <aside id="themerex_widget_top10-4" class="widget_number_2 column-1_3 widget widget_top10">
                            <h5 class="widget_title">Popular Courses</h5>
                           
                                <div class="a">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="post_thumb"><img class="wp-post-image" width="75" height="75" src="images/1.jpg"></div>
                                        </div>
                                        <div class="col-md-9">
                                            <article class="post_item with_thumb first">
                                                <div class="post_content">
                                                    <h6 class="post_title"><a href="#"><h1>Title</h1></a></h6>
                                                    <div class="post_info">
                                                        <span class="post_info_item post_info_posted">
                                                            <a href="#" class="post_info_date">March 8, 2015</a></span>
                                                        <span class="post_info_item post_info_posted_by">by <a href="#" class="post_info_author">Mike Newton</a></span>
                                                        <span class="post_info_item post_info_counters"><i class="fa fa-star" aria-hidden="true">
                                                                <span class="post_counters_number">60.5</span></i></br>
                                                        </span>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>

                                    </div>
                                </div>
                            


                        </aside>
                    </div>

                    <div class="col-md-6">
                        <aside id="themerex_widget_top10-4" class="widget_number_2 column-1_3 widget widget_top10">
                            <h5 class="widget_title">Recent Courses</h5>
                            
                                <div class="a">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="post_thumb"><img class="wp-post-image" width="75" height="75" src="images/1.jpg"></div>
                                        </div>
                                        <div class="col-md-9">
                                            <article class="post_item with_thumb first">
                                                <div class="post_content">
                                                    <h6 class="post_title"><a href="#"><h1>Title</h1></a></h6>
                                                    <div class="post_info">
                                                        <span class="post_info_item post_info_posted">
                                                            <a href="#" class="post_info_date">February 10, 2017</a></span>
                                                        <span class="post_info_item post_info_posted_by">by <a href="#" class="post_info_author">Mike Newton</a></span>
                                                        <span class="post_info_item post_info_counters"><i class="fa fa-eye" aria-hidden="true">
                                                                <span class="post_counters_number">8480</span></i></br>
                                                        </span>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>

                                    </div>
                                </div>
                            

                    </div>

                </div>
            </div>
        </div>

    </body>

</html>