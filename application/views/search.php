

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Dineout | Alpha</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <!--bootstrap CSS-->
        <link href="<?php echo base_url();?>assets/<?php echo base_url();?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/search.css" rel="stylesheet">
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
                    <a class="navbar-brand" href="#">Dine Out</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="user-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li><a href="../navbar-static-top/"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                        <li>
                            <a href="#" style="height:54px;">
                                <span style="font-style:italic;">Welcome</span>, Balram Menon&nbsp;
                                <img src="<?php echo base_url();?>assets/img/John_Doe.jpg" height="35" style="margin-top:-6px;" class="img-circle">
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
                        <h4 style="font-size:45px;color:#fff;">Search Results</h4>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4" style="text-align:right;">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height:60px;font-size:18px;font-weight: 800;">
                                Sort By <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Top Rated</a></li>
                                <li><a href="#">Closer to Me</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Best ones near Me</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cards container">
            <div class="row isotope">
                
                <div class="col-sm-6 col-md-3 feeds">
                    <div class="thumbnail">
                        <img src="<?php echo base_url();?>assets/img/pic1.jpg" alt="image">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Read More</a></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-3 feeds">
                    <div class="thumbnail">
                        <img src="<?php echo base_url();?>assets/img/pic6.jpg" alt="image">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Read More</a></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-3 feeds">
                    <div class="thumbnail">
                        <img src="<?php echo base_url();?>assets/img/pic4.jpg" alt="image">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Read More</a></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-3 feeds">
                    <div class="thumbnail">
                        <img src="<?php echo base_url();?>assets/img/pic5.jpg" alt="image">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Read More</a></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-3 feeds">
                    <div class="thumbnail">
                        <img src="<?php echo base_url();?>assets/img/pic6.jpg" alt="image">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Read More</a></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-3 feeds">
                    <div class="thumbnail">
                        <img src="<?php echo base_url();?>assets/img/pic4.jpg" alt="image">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Read More</a></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-3 feeds">
                    <div class="thumbnail">
                        <img src="<?php echo base_url();?>assets/img/pic5.jpg" alt="image">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Read More</a></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-3 feeds">
                    <div class="thumbnail">
                        <img src="<?php echo base_url();?>assets/img/pic4.jpg" alt="image">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Read More</a></p>
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