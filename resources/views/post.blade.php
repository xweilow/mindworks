
<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Mindworks | Post #{{ $post['id'] }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="../assets/pages/css/blog.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid">
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <div class="container">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Post #{{ $post['id'] }}</h1>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="/posts">Post</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Post #{{ $post['id'] }}</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="blog-page blog-content-2">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="blog-single-content bordered blog-container">
                                            <div class="blog-single-head">
                                                <h1 class="blog-single-head-title" style="margin-bottom: 0px;">{{ $post['title'] }}</h1>
                                                <div class="blog-single-head-date" style="float: none; margin-bottom: 0px;">
                                                    <i class="icon-calendar font-blue"></i>
                                                    <a href="javascript:;">{{ date('Y-m-d', strtotime($post['created_at'])) }}</a>
                                                </div>
                                            </div>
                                            <br /><br />
                                            <div class="blog-single-desc">
                                                <p>{{ $post['body'] }}</p>
                                            </div>
                                            <div class="blog-single-foot">
                                                <ul class="blog-post-tags">
                                                    Posted By: User 0{{ $post['user_id'] }}
                                                </ul>
                                            </div>
                                            <div class="blog-comments">
                                                <div class="row" style="margin-top: 20px;">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon input-circle-left">
                                                                    <i class="fa fa-user"></i>
                                                                </span>
                                                                <input type="text" class="form-control input-circle-right" placeholder="Name" id="name" value="{{ $name }}"> </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon input-circle-left">
                                                                    <i class="fa fa-envelope"></i>
                                                                </span>
                                                                <input type="text" class="form-control input-circle-right" placeholder="Email" id="email" value="{{ $email }}"> </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon input-circle-left">
                                                                    <i class="fa fa-bookmark"></i>
                                                                </span>
                                                                <input type="text" class="form-control input-circle-right" placeholder="Body" id="body" value="{{ $body }}"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" style="text-align: center;">
                                                    <div class="col-lg-12">
                                                        <button class="btn btn-sm blue" id="btn-clear">
                                                            Clear
                                                        </button>
                                                        <button class="btn btn-sm yellow" id="btn-search">
                                                            Search <i class="fa fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <script type="text/javascript">
                                                    $( document ).ready(function() {
                                                        $("#btn-search").click(function (e) {
                                                            e.preventDefault();
                                                            var ele = $(this);

                                                            var urlParam = [];
                                                            if($("#name").val() != '') {
                                                                urlParam.push('n='+$('#name').val());
                                                            }
                                                            if($("#email").val() != '') {
                                                                urlParam.push('e='+encodeURI($("#email").val()));
                                                            }
                                                            if($("#body").val() != '') {
                                                                urlParam.push('b='+encodeURI($("#body").val()));
                                                            }

                                                            location = '/post/{{ $post['id'] }}?'+urlParam.join('&');
                                                        });

                                                        $("#btn-clear").click(function (e) {
                                                            location = '/post/{{ $post['id'] }}';
                                                        });
                                                    });
                                                </script>
                                                <h3 class="sbold blog-comments-title">Comments({{ sizeof($comments) }})</h3>
                                                <div class="c-comment-list">
                                                    @foreach($comments as $comment)
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" alt="" src="../assets/pages/img/avatars/team1.jpg"> </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">
                                                                <span style="color: #9aa5b2; font-weight: 600;">{{ $comment['name'] }}</span> on
                                                                <span class="c-date">{{ date('d F Y, g:iA', strtotime($comment['created_at'])) }}</span>
                                                            </h4>
                                                            <h5 style="color: #49a7fa;">{{ $comment['email'] }}</h5>
                                                            {{ $comment['body'] }} </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN INNER FOOTER -->
        <div class="page-footer">
            <div class="container"> 2021 &copy; MindWorks.
            </div>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
        <!-- END INNER FOOTER -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
