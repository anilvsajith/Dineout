<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Dineout | Alpha</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <!--bootstrap CSS-->
        <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/profile.css" rel="stylesheet">
    </head>
        <body>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url().'admin';?>">Dine Out</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="<?php echo base_url();?>assets/files/readme.rst">Read Me</a></li>
                        <li><a href="<?php echo base_url();?>assets/files/report.pdf">Report</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-cutlery" aria-hidden="true"></i><span>&nbsp;Restaurants (<?php echo $hotel['size'];?>)</span> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php $i=0;
                                while($hotel[$i])
                                {
                                echo  '<li><a href="'.base_url().'admin/hotel/'.$hotel[$i]['id'].'">'.$hotel[$i]['name'].'</a></li>';
                                    $i++;
                                }
                                ?>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Add New</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url().'user/logout';?>"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                        <li>
                            <a href="#" style="height:54px;">
                                <span style="font-style:italic;">Welcome</span>, <?php echo $userdata['admin_name'];?>&nbsp;
                                <img src="<?php echo base_url();?>assets/img/John_Doe.jpg" height="35" style="margin-top:-6px;" class="img-circle">
                            </a>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class="topbg">
            <div class="container">
                <div class="row" style="padding-top:150px;">
                    <div class="col-lg-4">
                        <h4 style="font-size:45px;color:#fff;"><?php echo $hotel_spec['name']; ?></h4>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4" style="text-align:right;">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="cards container">
            <div class="row isotope">
                
                <div class="col-sm-6 col-md-8 feeds">
                    <div class="thumbnail" style="height:350px;">
                        <div class="caption">
                            <h3>Analytics: </h3>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-4 feeds">
                    <div class="thumbnail" style="height:350px;">
                        <div class="caption">
                            <h3>Social Reports: </h3>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <i class="fa fa-gratipay" aria-hidden="true"></i>&nbsp;&nbsp;102
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-thumbs-down" aria-hidden="true"></i>&nbsp;&nbsp;102
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-comments" aria-hidden="true"></i>&nbsp;&nbsp;102
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;102
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-12 feeds">
                    <div class="thumbnail" style="min-height:350px;">
                        <div class="caption">
                            <h3>Menu: </h3>
                            <li class="list-group-item" style="height:40px;">
                                <div class="col-sm-6 col-md-3">
                                    <span>Veg Sandwich</span>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <i class="fa fa-bitbucket" aria-hidden="true"></i>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <i class="fa fa-inr" aria-hidden="true"></i>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <i class="fa fa-gratipay" aria-hidden="true"></i>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-gratipay" aria-hidden="true"></i>&nbsp;&nbsp;102
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-gratipay" aria-hidden="true"></i>&nbsp;&nbsp;102
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-gratipay" aria-hidden="true"></i>&nbsp;&nbsp;102
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-gratipay" aria-hidden="true"></i>&nbsp;&nbsp;102
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-gratipay" aria-hidden="true"></i>&nbsp;&nbsp;102
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-gratipay" aria-hidden="true"></i>&nbsp;&nbsp;102
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-gratipay" aria-hidden="true"></i>&nbsp;&nbsp;102
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-gratipay" aria-hidden="true"></i>&nbsp;&nbsp;102
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-gratipay" aria-hidden="true"></i>&nbsp;&nbsp;102
                            </li>
                        </div>
                    </div>
                </div>
    

                
            </div>    
            
        </div>
        <div class="footer">
            <p class="foot-text">Made in <i class="fa fa-heart"></i>&nbsp;with food</p>    
        </div>
        <a class="go-top" href="#anch-top" style="display: inline;"><span class="fa fa-chevron-up"></span></a>
        <!--scripts-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/isotope.pkgd.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/packery-mode.pkgd.min.js'></script>
        <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.nicescroll/3.6.0/jquery.nicescroll.min.js"></script>
        <script>
            $(document).ready( function() {  
                $('.isotope').isotope({
                    layoutMode: 'packery',
                    itemSelector: '.feeds',
                    packery: {
                        gutter: 0
                    }
                });
                $("body").niceScroll({
                    scrollspeed: 75,
                    mousescrollstep: 40,
                    zindex: 5000,
                    hidecursordelay: 400,
                    cursoropacitymin: 0.4,
                    cursoropacitymax: 0.9,
                    cursorwidth: "8px",
                    cursorborderradius: "3px",
                    horizrailenabled: false
                });
            });
        </script>

  </body>
</html>