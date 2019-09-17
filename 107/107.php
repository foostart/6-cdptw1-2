<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/style.less', 'css/style.css');
        ?>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="mod-custom-19">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <h6>University Grade Theme Features</h6>
                    <div class="university">



                        <div class="premium">

                            <h2 class="panel-title">
                                <a data-toggle="collapse" href="#collapse1">Premium Course Catalog System</a>
                            </h2>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem </p>
                            </div>

                        </div>




                    </div>

                    <div class="university">
                        <div class="abc">
                            <h1 data-toggle="collapse" href="#collapse2">+</h1>
                            <h2 class="panel-title">
                                <a data-toggle="collapse" href="#collapse2">Faculty User Roles with Course Catalog
                                    integration!</a>
                            </h2>

                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem </p>
                            </div>
                        </div>
                    </div>
                    <div class="university">
                        <div class="abc">
                            <h1>+</h1>
                            <a data-toggle="collapse" href="#collapse3">Faculty User Roles with Course Catalog
                                integration!</a>


                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem </p>
                            </div>
                        </div>
                    </div>
                    <div class="university">
                        <div class="abc">
                            <h1>+</h1>
                            <a data-toggle="collapse" href="#collapse4">Faculty User Roles with Course Catalog
                                integration!</a>

                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem </p>
                            </div>
                        </div>
                    </div>
                    <div class="university">
                        <div class="abc">
                            <h1>+</h1>
                            <a data-toggle="collapse" href="#collapse5">Faculty User Roles with Course Catalog
                                integration!</a>

                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem </p>
                            </div>
                        </div>


                    </div>
                </div>
                    <div class="col-md-6">
                        <h6>News & Announcements</h6>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_left">

                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                    <img class="vc_single_image-img " src="image/1.jpg">

                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>Lorem Lorem </h4>
                                <p>Lorem Lorem Lorem Lorem </p>
                                <div class="read">
                                    <h5>READ MORE!</h5>
                                </div>
                            </div>
                        </div>


                        <div
                            class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey  content-separator">
                            <span class="vc_sep_holder vc_sep_holder_l">
                                <span class="vc_sep_line"></span>
                            </span>

                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_left">

                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                    <img class="vc_single_image-img " src="image/2.jpg">


                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>Lorem Lorem Lorem Lorem Lorem Lorem </h4>
                                <p>Lorem Lorem Lorem Lorem Lorem Lorem </p>
                                <div class="read1">
                                    <h5>ENROLL TODAY!</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
</body>

</html>