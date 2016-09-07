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

</head>

<body>

    <!-- Navigation -->
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
<?php $session = $this->session->userdata; 
    if(array_key_exists("email", $session)){  ?>
    
                <a class="navbar-brand topnav" href="<?php echo base_url();?>admin/user/logout">Log out</a>
<?php }else{ ?>
                <a class="navbar-brand topnav" href="#" data-toggle="modal" data-target="#login_modal" data-whatever="@mdo">Log in</a>
<?php }?>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php ?>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <?php if(!array_key_exists("email", $session)){  ?>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#login_modal" data-whatever="@mdo">Dashboard</a>
                    </li>
                    <?php }else{?>
                    <li>
                        <a href="admin/dashboard">Dashboard</a>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Landing Page</h1>
                        <h3>A Template by Start Bootstrap</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <div class="modal fade" id ="login_modal" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><?php echo lang('login_heading');?></h4>
	      </div>
	      <div class="modal-body">
	      		<?php echo form_open("auth/login");?>
				<?php echo $this->session->flashdata('message');?>
		        <?php echo form_open('',array('class'=>'form-horizontal'));?>
		        <div class="form-group">
		            <?php echo form_label('Username','identity');?>
		            <?php echo form_error('identity');?>
		            <?php echo form_input('identity','','class="form-control"');?>
		        </div>
		        <div class="form-group">
		            <?php echo form_label('Password','password');?>
		            <?php echo form_error('password');?>
		            <?php echo form_password('password','','class="form-control"');?>
		        </div>
		        <div class="form-group">
		            <label>
		                <?php echo form_checkbox('remember','1',FALSE);?> Remember me
		            </label>
		        </div>



	      </div>
	      <div class="modal-footer">
	        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
	        <?php echo form_submit('submit', 'Log in', 'class="btn btn-primary btn-lg btn-block"');?>
	      </div>
				<?php echo form_close();?>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
    <!-- /.intro-header -->

    <!-- Page Content -->

    <!-- /.banner -->

    <!-- Footer -->
    <footer class=" center-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

</body>

</html>
