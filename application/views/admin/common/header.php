<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title><?php echo $title;?></title>

    
    
    <!-- jQuery -->
    <script src="<?php echo base_url();?>js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

</head>

<body>

    <!-- Navigation -->
    <div>
        <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
            <div class="container topnav">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand topnav" href="<?php echo base_url();?>admin/user/logout" >log out</a> -->
                    <h4> Evaluation Task</h4>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="navbar-brand topnav" href="#" >Home</a>
                            <a class="navbar-brand topnav" href="<?php echo base_url();?>admin/user/logout" >log out</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    </div>
    <div class ="main_container">
        <!-- Sidebar -->
        <div class= "row">
                <div class = "col-xs-2 col-md-2 sidebar">
                      <div id="sidebar-wrapper">
                          <ul id="sidebar_menu" class="sidebar-nav">
                               <!-- <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li> -->
                               <li class="sidebar-brand"><a id="menu-toggle" href="<?php echo base_url();?>admin/dashboard">Dashboard</a></li>
                               <li class="sidebar-brand"><a id="menu-toggle" href="<?php echo base_url();?>admin/content">Content</a></li>
                               <li class="sidebar-brand"><a id="menu-toggle" href="<?php echo base_url();?>admin/page">Page</span></a></li>
                          </ul>
                          <!--   <ul class="sidebar-nav" id="sidebar">     
                              <li><a>Content<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                              <li><a>Page<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                              <li><a><span class="sub_icon glyphicon glyphicon-link"></span></a></li> 
                            </ul>-->
                      </div>
                </div>




