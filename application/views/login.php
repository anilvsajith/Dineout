<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Dineout | Alpha</title>
        <!--bootstrap CSS-->
        <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
        
    </head>
    <body>
        <div class="site-wrapper">
            <div class="site-wrapper-inner">
                <div class="cover-container">
                    <div class="masthead clearfix">
                        <div class="inner">
                            <h3 class="masthead-brand">Dine Out</h3>
                            <nav>
                                <ul class="nav masthead-nav">
                                    <li><a href="<?php echo base_url()?>">Home</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li class="active"><a href="#">Join Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="login-form">
                        <h1 class="cover-heading">Welcome Back!</h1>
                        <form id="login-form" class="text-left" method="post" action="<?php echo base_url().'dineout/login_form'; ?>">
                            <div class="login-form-main-message"></div>
                            <div class="main-login-form">
                                <div class="login-group">
                                    <div class="form-group">
                                        <label for="lg_username" class="sr-only">Username</label>
                                        <input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="lg_password" class="sr-only">Password</label>
                                        <input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
                                    </div>
                                    <div class="form-group login-group-checkbox">
                                        <input type="checkbox" id="lg_remember" name="lg_remember">
                                        <label for="lg_remember">remember</label>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="etc-login-form">
                                <p>Forgot Your Password? <a href="<?php echo base_url().'dineout/forgot'?>">Click Here</a></p>
                                <p>New User? <a href="<?php echo base_url().'dineout/sign_up'?>">Join Us Now!</a></p>
                            </div>
                        </form>
                        <button id="submit" form="login-form" class="login-button"><i class="fa fa-chevron-right"></i></button>
                    </div>
                    <div class="mastfoot">
                        <div class="inner">
                            <p>Site designed by DineOut, 2016</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	   
        <!--bootstrap JS-->
        <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.js"></script>
    </body>
</html>