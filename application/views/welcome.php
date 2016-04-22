<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Dineout | Alpha</title>
        <!--bootstrap CSS-->
        <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">
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
                                    <li class="active"><a href="#">Home</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="<?php echo base_url().'user'; ?>">Join Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="inner cover">
                        <h1 class="cover-heading">Welcome Back!</h1>
                        <p class="lead">Dineout is simple, responsive mobile application that <br>redefines the way people dine.<br> New to Dineout? Download it now!</p>
                        <p class="lead">
                            <a href="#" class="btn btn-lg btn-default">Download Now!</a>
                        </p>
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