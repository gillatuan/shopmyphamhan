<!DOCTYPE html><!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]--><!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]--><!--[if !IE]><!-->
<html lang="en"> <!--<![endif]--><!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Metronic | Data Tables - Managed Tables</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD --><!-- BEGIN BODY -->
<body class="fixed-top">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <a class="brand" href="index.html"> <img src="<?php echo Helper::themeUrl(); ?>/assets/img/logo.png"
                                                     alt="logo"/> </a>
            <!-- END LOGO --><!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse"> <img
                    src="<?php echo Helper::themeUrl(); ?>/assets/img/menu-toggler.png" alt=""/> </a>
            <!-- END RESPONSIVE MENU TOGGLER --><!-- BEGIN TOP NAVIGATION MENU -->
            <ul class="nav pull-right">
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <li class="dropdown" id="header_notification_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-warning-sign"></i> <span
                            class="badge">6</span> </a>
                    <ul class="dropdown-menu extended notification">
                        <li>
                            <p>You have 14 new notifications</p>
                        </li>
                        <li>

                            <a href="#"> <span class="label label-success"><i class="icon-plus"></i></span> New user registered. <span
                                    class="time">Just now</span> </a>

                        </li>
                        <li>

                            <a href="#"> <span class="label label-important"><i class="icon-bolt"></i></span> Server #12 overloaded. <span
                                    class="time">15 mins</span> </a>

                        </li>
                        <li>

                            <a href="#"> <span class="label label-warning"><i class="icon-bell"></i></span> Server #2 not respoding. <span
                                    class="time">22 mins</span> </a>

                        </li>
                        <li>

                            <a href="#"> <span class="label label-info"><i class="icon-bullhorn"></i></span> Application error. <span
                                    class="time">40 mins</span> </a>

                        </li>
                        <li>

                            <a href="#"> <span class="label label-important"><i class="icon-bolt"></i></span> Database overloaded 68%. <span
                                    class="time">2 hrs</span> </a>

                        </li>
                        <li>
                            <a href="#"> <span class="label label-important"><i class="icon-bolt"></i></span> 2 user IP blocked. <span class="time">5 hrs</span> </a>
                        </li>
                        <li class="external">
                            <a href="#">See all notifications <i class="m-icon-swapright"></i></a>
                        </li>
                    </ul>
                </li>
                <!-- END NOTIFICATION DROPDOWN --><!-- BEGIN INBOX DROPDOWN -->
                <li class="dropdown" id="header_inbox_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-envelope-alt"></i> <span
                            class="badge">5</span> </a>
                    <ul class="dropdown-menu extended inbox">
                        <li>
                            <p>You have 12 new messages</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img src="<?php echo Helper::themeUrl(); ?>/./assets/img/avatar2.jpg" alt=""/></span>
                                <span class="subject">
                                    <span class="from">Lisa Wong</span>
                                    <span class="time">Just Now</span>
                                </span>
                                <span class="message">
                                    Vivamus sed auctor nibh congue nibh. auctor nibh
                                    auctor nibh...
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img src="<?php echo Helper::themeUrl(); ?>/./assets/img/avatar3.jpg" alt="" /></span>
                                <span class="subject">
                                    <span class="from">Richard Doe</span>
                                    <span class="time">16 mins</span>
                                </span>
                                <span class="message">
                                    Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                                    auctor nibh...
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img src="<?php echo Helper::themeUrl(); ?>/./assets/img/avatar1.jpg" alt=""/></span>
                                <span class="subject">
                                    <span class="from">Bob Nilson</span>
                                    <span class="time">2 hrs</span>
                                </span>
                                <span class="message">
                                    Vivamus sed nibh auctor nibh congue nibh. auctor nibh
                                    auctor nibh...
                                </span>
                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See all messages <i class="m-icon-swapright"></i></a>
                        </li>
                    </ul>
                </li>
                <!-- END INBOX DROPDOWN --><!-- BEGIN TODO DROPDOWN -->
                <li class="dropdown" id="header_task_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-tasks"></i> <span
                            class="badge">5</span>
                    </a>
                    <ul class="dropdown-menu extended tasks">
                        <li>
                            <p>You have 12 pending tasks</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="task">
                                    <span class="desc">New release v1.2</span>
                                    <span class="percent">30%</span>
                                </span>
                                <span class="progress progress-success ">
                                    <span style="width: 30%;" class="bar"></span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="task">
                                    <span class="desc">Application deployment</span>
                                    <span class="percent">65%</span>
                                </span>
                                <span class="progress progress-danger progress-striped active">
                                    <span style="width: 65%;" class="bar"></span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="task">
                                    <span class="desc">Mobile app release</span>
                                    <span class="percent">98%</span>
                                </span>
                                <span class="progress progress-success">
                                    <span style="width: 98%;" class="bar"></span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="task">
                                    <span class="desc">Database migration</span>
                                    <span class="percent">10%</span>
                                </span>
                                <span class="progress progress-warning progress-striped">
                                    <span style="width: 10%;" class="bar"></span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="task">
                                    <span class="desc">Web server upgrade</span>
                                    <span class="percent">58%</span>
                                </span>
                                <span class="progress progress-info">
                                    <span style="width: 58%;" class="bar"></span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="task">
                                    <span class="desc">Mobile development</span>
                                    <span class="percent">85%</span>
                                </span>
                                <span class="progress progress-success">
                                    <span style="width: 85%;" class="bar"></span>
                                </span>
                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See all tasks <i class="m-icon-swapright"></i></a>
                        </li>
                    </ul>
                </li>
                <!-- END TODO DROPDOWN --><!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php $infoUser = Helper::user()->getState('infoUser'); ?>
                        <img alt="<?php echo Helper::user()->name; ?>"
                             src="<?php echo Helper::renderImage($infoUser['avatar'], 'upload/avatar',',', true, true); ?>" />
                        <span class="username"><?php echo Helper::user()->name; ?></span>
                        <i class="icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>

                            <a href="<?php echo Helper::url('/Admin/user/profile', array('id' => Helper::user()->id)); ?>" title="My Profile"><i
                                    class="icon-user"></i> My Profile</a></li>

                        <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo Helper::url('/site/logout'); ?>" title="Log Out"><i class="icon-key"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER --><!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar nav-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul>
            <li>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler hidden-phone"></div>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li>
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <form class="sidebar-search">
                    <div class="input-box">
                        <a href="javascript:;" class="remove"></a> <input type="text" placeholder="Search..."/> <input
                            type="button" class="submit" value=" "/>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="start">
                <a href="<?php echo Helper::url('/Admin') ?>"> <i class="icon-home"></i> <span
                        class="title">Dashboard</span> </a>
            </li>
            <!--General-->
            <li class="has-sub <?php if (Yii::app()->getController()->getModule()->id == 'SuperAdmin') { ?>active<?php } ?>">
                <a href="javascript:;"> <i class="icon-th-list"></i> <span class="title">General</span>
                    <span class="arrow <?php if (Yii::app()->getController()->getModule()->id == 'SuperAdmin') { ?>open<?php } ?>"></span>
                    <span class=" <?php if (Yii::app()->getController()->getModule()->id == 'SuperAdmin') { ?>selected<?php } ?>"></span>
                </a>
                <ul class="sub">
                    <li class="<?php if (Yii::app()->getModule('SuperAdmin')->id == 'SuperAdmin' && Yii::app()->controller->id == 'settingParams' && Yii::app()->getController()->action->id == 'admin') { ?>active<?php } ?>">
                        <a title="Setting Params"
                           href="<?php echo Helper::url('/SuperAdmin/settingParams/admin'); ?>">Setting Params</a></li>
                    <li class="<?php if (Yii::app()->getModule('SuperAdmin')->id == 'SuperAdmin' && Yii::app()->controller->id == 'settingParams' && Yii::app()->getController()->action->id == 'configParams') { ?>active<?php } ?>">
                        <a href="<?php echo Helper::url('/SuperAdmin/settingParams/configParams'); ?>"
                           title="Get Config Params">Get Config Params</a></li>
                    <li class="<?php if (Yii::app()->getModule('SuperAdmin')->id == 'SuperAdmin' && Yii::app()->controller->id == 'default' && Yii::app()->getController()->action->id == 'deleteall') { ?>active<?php } ?>">
                        <a href="<?php echo Helper::url('/SuperAdmin/default/deleteall'); ?>"
                           title="Delete Cache and Assets">Delete Cache and Assets</a></li>
                    <li class="<?php if (Yii::app()->getModule('SuperAdmin')->id == 'SuperAdmin' && Yii::app()->controller->id == 'lookup' && Yii::app()->getController()->action->id == 'admin') { ?>active<?php } ?>">
                        <a href="<?php echo Helper::url('/SuperAdmin/lookup/admin'); ?>"
                           title="Manage Lookup">Manage Lookup</a></li>
                </ul>
            </li>
            <!--Extra-->
            <li class="has-sub <?php if (Yii::app()->getController()->getModule()->id == 'Admin') { ?>active<?php } ?>">
                <a href="javascript:;"> <i class="icon-briefcase"></i> <span class="title">Extra</span>
                    <span
                        class="arrow <?php if (Yii::app()->getController()->getModule()->id == 'Admin') { ?>open<?php } ?>"></span>
                    <span
                        class="<?php if (Yii::app()->getController()->getModule()->id == 'Admin') { ?>selected<?php } ?>"></span>
                </a>
                <ul class="sub">
                    <li class="<?php if (Yii::app()->getModule('Admin')->id == 'Admin' && Yii::app()->controller->id == 'user' && Yii::app()->getController()->action->id == 'profile') { ?>active<?php } ?>">
                        <a href="<?php echo Helper::url('/Admin/user/profile', array('id' => Helper::user()->id)); ?>">User Profile</a>
                    </li>
                    <li class="<?php if (Yii::app()->getModule('Admin')->id == 'Admin' && Yii::app()->controller->id == 'user' && Yii::app()->getController()->action->id == 'admin') { ?>active<?php } ?>">
                        <a href="<?php echo Helper::url('/Admin/user/admin', array('id' => Helper::user()->id)); ?>">Manage User</a>
                    </li>
                    <li class="<?php if (Yii::app()->getModule('Admin')->id == 'Admin' && Yii::app()->controller->id == 'staticPage' && Yii::app()->getController()->action->id == 'admin') { ?>active<?php } ?>">
                        <a href="<?php echo Helper::url('/Admin/staticPage/admin'); ?>">Manage Static Page</a>
                    </li>
                    <li class="<?php if (Yii::app()->getModule('Admin')->id == 'Admin' && Yii::app()->controller->id == 'banner' && Yii::app()->getController()->action->id == 'admin') { ?>active<?php } ?>">
                        <a href="<?php echo Helper::url('/Admin/banner/admin'); ?>"
                            title="Manage Banner">Manage Banner</a></li>
                    <li><a href="extra_faq.html">FAQ</a></li>
                    <li><a href="extra_search.html">Search Results</a></li>
                    <li><a href="extra_invoice.html">Invoice</a></li>
                    <li><a href="extra_pricing_table.html">Pricing Tables</a></li>
                    <li><a href="extra_404.html">404 Page</a></li>
                    <li><a href="extra_500.html">500 Page</a></li>
                    <li><a href="extra_blank.html">Blank Page</a></li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR --><!-- BEGIN PAGE -->
    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="portlet-config" class="modal hide">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button"></button>
                <h3>portlet Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here will be a configuration form</p>
            </div>
        </div>
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM--><!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN STYLE CUSTOMIZER -->
                    <div class="color-panel hidden-phone">
                        <div class="color-mode-icons icon-color"></div>
                        <div class="color-mode-icons icon-color-close"></div>
                        <div class="color-mode">
                            <p>THEME COLOR</p>
                            <ul class="inline">
                                <li class="color-black current color-default" data-style="default"></li>
                                <li class="color-blue" data-style="blue"></li>
                                <li class="color-brown" data-style="brown"></li>
                                <li class="color-purple" data-style="purple"></li>
                                <li class="color-white color-light" data-style="light"></li>
                            </ul>
                            <label class="hidden-phone"> <input type="checkbox" class="header" checked value=""/> <span
                                    class="color-mode-label">Fixed Header</span> </label>
                        </div>
                    </div>
                    <!-- END BEGIN STYLE CUSTOMIZER --><!-- BEGIN PAGE TITLE & BREADCRUMB-->
                    <h3 class="page-title">
                        Managed Tables<!--<small>managed table samples</small>-->
                    </h3>
                    <?php
                    $this->widget('zii.widgets.CBreadcrumbs', array(
                        'homeLink'             => '<li><i class="icon-home"></i>' . CHtml::link('Trang chủ - Thiết kế website',
                        Helper::url('/Blog/post/index', array('lang' => Yii::app()->language)),
                        array('title' => 'Trang chủ - Thiết kế website - Web3in1.com')) . '<span class="icon-angle-right"></span></li>',
                        'links'                => $this->breadcrumbs,
                        'activeLinkTemplate'   => '<li><a href="{url}">{label}</a><span class="icon-angle-right"></span></li>',
                        // will generate the clickable breadcrumb links
                        'inactiveLinkTemplate' => '<li>{label}</li>',
                        // will generate the current page url : <li>News</li>
                        'htmlOptions' => array(
                            'id' => 'PageBreadcrumb',
                            'class' => 'breadcrumb'
                        ),
                        'separator' => "",
                        'tagName' => 'ul'
                    )); ?>
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>
            <!-- END PAGE HEADER--><!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <?php echo $content; ?>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->
    </div>
    <!-- END PAGE -->
</div>
<!-- END CONTAINER --><!-- BEGIN FOOTER -->
<div class="footer">
    2013 &copy; Metronic by keenthemes.
    <div class="span pull-right">
        <span class="go-top"><i class="icon-angle-up"></i></span>
    </div>
</div>
<!-- END FOOTER -->
<script>
    jQuery(document).ready(function () {
        // initiate layout and plugins
        App.init();
    });
</script>
</body>
<!-- END BODY -->
</html>