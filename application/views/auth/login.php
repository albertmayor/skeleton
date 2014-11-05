<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php

$bootstrap_combined_url = "http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css";
$jquery_minified_url = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js";
$bootstrap_minified_url = "http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js";

if (defined('ENVIRONMENT') && ENVIRONMENT=="development") {
  $bootstrap_combined_url = base_url('assets/skeleton/css/bootstrap-combined.min.css');
  $jquery_minified_url = base_url('assets/skeleton/js/jquery.min.js');
  $bootstrap_minified_url = base_url('assets/skeleton/js/bootstrap.min.js');
}

?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
      <title><?php echo $login_appname . ". " . $login_entity;?></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Login form. <?php echo $login_appname;?>">
      <meta name="author" content="<?php echo $copyright_authors_text; ?>">
      
      <!-- FAVICON-->    
	  <link rel="shortcut icon" href="assets/icon/favicon.png">
	  <!--
   <!-- CSS PROPIS --

       <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/skeleton/css/bootstrap-select.min.css')?>"/>

       
       <link type="text/css" rel="stylesheet" href="<?php echo $bootstrap_combined_url;?>" /> 
   

   <!-- JS PROPIS --
       <script src="<?php echo $jquery_minified_url;?>"></script>
       <script src="<?php echo $bootstrap_minified_url;?>"></script>
       <script src="<?php echo base_url('assets/skeleton/js/bootstrap-select.min.js')?>"></script>
   -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>" />

    <link rel="stylesheet" href="<?php echo base_url('assets/css/ace-fonts.css')?>" />

    <!-- ace styles -->

    <link rel="stylesheet" href="<?php echo base_url('assets/css/ace.min.css')?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/ace-rtl.min.css')?>" />
   <style type="text/css">
      /*body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }*/

   </style>
   
   <!--<script type="text/javascript" id="bootstrap_select">
        $(window).on('load', function () {
            $('.selectpicker').selectpicker();
		});
   </script>-->


  </head>


<body class="login-layout">
    <div class="main-container">
      <div class="main-content">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="login-container">
              <div class="center">
                <h1>
                  <i class="icon-leaf green"></i>
                  <span class="red">Ace</span>
                  <span class="white">Application</span>
                </h1>
                <h4 class="blue">&copy; Company Name</h4>
              </div>

              <div class="space-6"></div>

              <div class="position-relative">
                <div id="login-box" class="login-box visible widget-box no-border">
                  <div class="widget-body">
                    <div class="widget-main">
                      <h4 class="header blue lighter bigger">
                        <i class="icon-coffee green"></i>
                        Please Enter Your Information
                      </h4>

                      <div class="space-6"></div>
                      <?php echo form_open($login_url .$redirect, array('id' => 'loginform', 'class' => 'form-signin' )); ?>
                        <fieldset>
                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="text" class="form-control" placeholder="<?php echo lang('User');?>" name="identity" />
                              <i class="icon-user"></i>
                            </span>
                          </label>

                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="password" class="form-control" placeholder="<?php echo lang('Password');?>" name="password" />
                              <i class="icon-lock"></i>
                            </span>
                          </label>
                          <select id="realms" class="form-control" name="realm">
                            <?php foreach( (array) $realms as $realm): ?>
                              <?php if( $realm == $default_realm): ?>
                                <option value="<?php echo $realm; ?>" selected="selected"><?php echo $realm; ?></option>
                              <?php else: ?>
                                <option value="<?php echo $realm; ?>" ><?php echo $realm; ?></option>
                              <?php endif; ?>
                            <?php endforeach; ?>
                          </select>
                          <div class="space"></div>

                          <div class="clearfix">
                            <label class="inline">
                              <input type="checkbox" class="ace" />
                              <span class="lbl"> Remember Me</span>
                            </label>

                            <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                              <i class="icon-key"></i>
                              <?php echo lang('Login');?>
                            </button>
                          </div>

                          <div class="space-4"></div>
                        </fieldset>
                      <?php echo form_close(); ?>

                      <div class="social-or-login center">
                        <span class="bigger-110">Or Login Using</span>
                      </div>

                      <div class="social-login center">
                        <a class="btn btn-primary">
                          <i class="icon-facebook"></i>
                        </a>

                        <a class="btn btn-info">
                          <i class="icon-twitter"></i>
                        </a>

                        <a class="btn btn-danger">
                          <i class="icon-google-plus"></i>
                        </a>
                      </div>
                    </div><!-- /widget-main -->

                    <div class="toolbar clearfix">
                      <div>
                        <a href="#" onclick="show_box('forgot-box'); return false;" class="forgot-password-link">
                          <i class="icon-arrow-left"></i>
                          I forgot my password
                        </a>
                      </div>

                      <div>
                        <a href="#" onclick="show_box('signup-box'); return false;" class="user-signup-link">
                          I want to register
                          <i class="icon-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div><!-- /widget-body -->
                </div><!-- /login-box -->

                <div id="forgot-box" class="forgot-box widget-box no-border">
                  <div class="widget-body">
                    <div class="widget-main">
                      <h4 class="header red lighter bigger">
                        <i class="icon-key"></i>
                        Retrieve Password
                      </h4>

                      <div class="space-6"></div>
                      <p>
                        Enter your email and to receive instructions
                      </p>

                      <form>
                        <fieldset>
                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="email" class="form-control" placeholder="Email" />
                              <i class="icon-envelope"></i>
                            </span>
                          </label>

                          <div class="clearfix">
                            <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                              <i class="icon-lightbulb"></i>
                              Send Me!
                            </button>
                          </div>
                        </fieldset>
                      </form>
                    </div><!-- /widget-main -->

                    <div class="toolbar center">
                      <a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
                        Back to login
                        <i class="icon-arrow-right"></i>
                      </a>
                    </div>
                  </div><!-- /widget-body -->
                </div><!-- /forgot-box -->

                <div id="signup-box" class="signup-box widget-box no-border">
                  <div class="widget-body">
                    <div class="widget-main">
                      <h4 class="header green lighter bigger">
                        <i class="icon-group blue"></i>
                        New User Registration
                      </h4>

                      <div class="space-6"></div>
                      <p> Enter your details to begin: </p>

                      <form>
                        <fieldset>
                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="email" class="form-control" placeholder="Email" />
                              <i class="icon-envelope"></i>
                            </span>
                          </label>

                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="text" class="form-control" placeholder="Username" />
                              <i class="icon-user"></i>
                            </span>
                          </label>

                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="password" class="form-control" placeholder="Password" />
                              <i class="icon-lock"></i>
                            </span>
                          </label>

                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="password" class="form-control" placeholder="Repeat password" />
                              <i class="icon-retweet"></i>
                            </span>
                          </label>

                          <label class="block">
                            <input type="checkbox" class="ace" />
                            <span class="lbl">
                              I accept the
                              <a href="#">User Agreement</a>
                            </span>
                          </label>

                          <div class="space-24"></div>

                          <div class="clearfix">
                            <button type="reset" class="width-30 pull-left btn btn-sm">
                              <i class="icon-refresh"></i>
                              Reset
                            </button>

                            <button type="button" class="width-65 pull-right btn btn-sm btn-success">
                              Register
                              <i class="icon-arrow-right icon-on-right"></i>
                            </button>
                          </div>
                        </fieldset>
                      </form>
                    </div>

                    <div class="toolbar center">
                      <a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
                        <i class="icon-arrow-left"></i>
                        Back to login
                      </a>
                    </div>
                  </div><!-- /widget-body -->
                </div><!-- /signup-box -->
              </div><!-- /position-relative -->
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div><!-- /.main-container -->
<!--<body>-->

<!--<div class="container">	

     <center><div id="maintenance-mode-message" class="text-error"></div></center>
     
     <center><div class="text-error"><?php echo $message;?></div></center>
     
<?php if ($this->session->flashdata('spam_alert')): ?>
 <center>
	<div class="alert">
     <button type="button" class="close" data-dismiss="alert">&times;</button>
     <strong><?php echo lang('Atention');?>! </strong> <?php echo lang('SPAM_Message_Part1');?><br/>
     <?php echo lang('SPAM_Message_Part2');?>
    </div>
 </center>
<?php endif; ?>
     
     <center><h1><?php echo $login_appname . ". " . $login_entity;?></h1></center>
     <br>
       
       <?php 
       echo form_open($login_url .$redirect, array('id' => 'loginform', 'class' => 'form-signin' )); ?>
        
        <h3 class="form-signin-heading"><?php echo lang('login-form-greetings');?></h3>

         <input id="identity" class="input-block-level" type="text" placeholder="<?php echo lang('User');?>" name="identity">
         <input id="password" class="input-block-level" type="password" placeholder="<?php echo lang('Password');?>" name="password">
         
         <select id="realms" class="selectpicker" name="realm">
  		  <?php foreach( (array) $realms as $realm): ?>
		   <?php if( $realm == $default_realm): ?>
            <option value="<?php echo $realm; ?>" selected="selected"><?php echo $realm; ?></option>
           <?php else: ?> 
            <option value="<?php echo $realm; ?>" ><?php echo $realm; ?></option>
           <?php endif; ?> 
          <?php endforeach; ?>	
         </select>
         

        <br/>
        <button class="btn btn-large btn-primary" type="submit"><?php echo lang('Login');?></button>
       
       <?php echo form_close(); ?>
       <center><p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p></center>
       <br/>
       
    	   <?php include("auth_footer.html"); ?>

</div>-->
    <script type="text/javascript">
      window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
    </script>

    <script type="text/javascript">
      if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>

    <!-- inline scripts related to this page -->

    <script type="text/javascript">
      function show_box(id) {
       jQuery('.widget-box.visible').removeClass('visible');
       jQuery('#'+id).addClass('visible');
      }
    </script>
</body>

</html>
