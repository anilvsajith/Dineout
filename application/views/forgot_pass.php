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
                        <h1 class="cover-heading">forgot password ?</h1>
                        <form id="forgot-password-form" class="text-left">
                            <div class="etc-login-form">
                                <p>When you fill in your registered email address, you will be sent instructions on how to reset your password.</p>
                            </div>
                            <div class="login-form-main-message"></div>
                            <div class="main-login-form">
                                <div class="login-group">
                                    <div class="form-group">
                                        <label for="fp_email" class="sr-only">Email address</label>
                                        <input type="text" class="form-control" id="fp_email" name="fp_email" placeholder="email address">
                                    </div>
                                </div>
                                <button type="submit" class="login-button" style="margin-right:0px;"><i class="fa fa-chevron-right"></i></button>
                            </div>
                            <div class="etc-login-form">
                                <p>already have an account? <a href="<?php echo base_url().'dineout/login'; ?>">login here</a></p>
                                <p>new user? <a href="<?php echo base_url().'dineout/sign_up'; ?>">create new account</a></p>
                            </div>
                        </form>
                    </div>
                    <div class="mastfoot">
                        <div class="inner">
                            <p>Site designed by DineOut, 2016</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!--bootstrap JS-->
        <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.js"></script>
    </body>
</html>