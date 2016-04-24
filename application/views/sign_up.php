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
                        <h1 class="cover-heading">Join Now!</h1>
                        <form id="register-form" class="text-left" method="post" action="<?php echo base_url().'user/signup_submit';?>">
                            <div class="login-form-main-message"></div>
                            <div class="main-login-form">
                                <div class="login-group">
                                    <div class="form-group">
                                        <label for="reg_username" class="sr-only">Email address</label>
                                        <input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_password" class="sr-only">Password</label>
                                        <input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_password_confirm" class="sr-only">Password Confirm</label>
                                        <input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="confirm password">
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_email" class="sr-only">Email</label>
                                        <input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_fullname" class="sr-only">Full Name</label>
                                        <input type="text" class="form-control" id="reg_fullname" name="reg_fullname" placeholder="full name">
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_mobile" class="sr-only">Phone</label>
                                        <input type="text" class="form-control" id="reg_mobile" name="reg_mobile" placeholder="Phone number">
                                    </div>
                          
                                    <div class="form-group login-group-checkbox">
                                        <input type="checkbox" class="" id="reg_agree" name="reg_agree">
                                        <label for="reg_agree">i agree with <a href="#">terms</a></label>
                                    </div>
                                </div>
                            </div>
                            <div class="etc-login-form">
                                <p>already have an account? <a href="<?php echo base_url().'user'; ?>">login here</a></p>
                            </div>
                        </form>
                        <button id="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
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