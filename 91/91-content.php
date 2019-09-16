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

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-91">
            <div class="college-box">
                <div class="course-events">
                    <div class="wrapper clearfix">
                        <div class="row">
                            <div class="our-college-sidebar col-4 col-md-4 col-sm-12 col-xs-12">
                                <article>
                                    <h3>Library</h3>
                                    <p>An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei. Saepe tantas ocurreret duo ea, has facilisi vulputate an</p>
                                    <a href="#">See more<span></span></a>
                                </article>

                                <article>
                                    <h3>Online course</h3>
                                    <p>An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei. Saepe tantas ocurreret duo ea, has facilisi vulputate an</p>
                                    <a href="#">See more<span></span></a>
                                </article>
                            </div>

                            <div class="col-8 col-md-8 col-sm-12 col-xs-12">


                                <section class="events flexslider" style="height: 458px;">
                                    <h3>Events</h3>
                                    <ul class="slides">
                                        <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">								<article>
                                                <span class="date">28<span>Wed 2015</span></span>
                                                <h3><a href="#">Nam eget dui. Etiam rhoncus</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur </p>
                                            </article>
                                            <article>
                                                <span class="date">28<span>Wed 2015</span></span>
                                                <h3><a href="#">Vivamus elementum semper nisi</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur </p>
                                            </article>
                                            <article>
                                                <span class="date">28<span>Wed 2015</span></span>
                                                <h3><a href="#">In enim justo, rhoncus ut</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur </p>
                                            </article>
                                        </li><li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">								<article>
                                                <span class="date">28<span>Wed 2015</span></span>
                                                <h3><a href="#">Maecenas tempus, tellus eget</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur </p>
                                            </article>
                                            <article>
                                                <span class="date">28<span>Wed 2015</span></span>
                                                <h3><a href="#">Nullam dictum felis eu pede</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur </p>
                                            </article>
                                            <article>
                                                <span class="date">28<span>Wed 2015</span></span>
                                                <h3><a href="#">In enim justo, rhoncus ut</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur </p>
                                            </article>
                                        </li><li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">								<article>
                                                <span class="date">28<span>Wed 2015</span></span>
                                                <h3><a href="#">Vivamus elementum semper nisi</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur </p>
                                            </article>
                                            <article>
                                                <span class="date">28<span>Wed 2015</span></span>
                                                <h3><a href="#">Donec pede justo, fringilla vel</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur </p>
                                            </article>
                                            <article>
                                                <span class="date">28<span>Wed 2015</span></span>
                                                <h3><a href="#">Donec quam felis, ultricies nec</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur </p>
                                            </article>
                                        </li>						</ul>
                                    <ul class="flex-direction-nav"><li><a href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>