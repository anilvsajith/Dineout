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
                    <a class="navbar-brand" href="#">Dine Out</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-cutlery" aria-hidden="true"></i><span>&nbsp;Restaurants (4)</span> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Hotel 1</a></li>
                                <li><a href="#">Hotel 2</a></li>
                                <li><a href="#">Hotel 3</a></li>
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
                        <h4 style="font-size:45px;color:#fff;">Add New Hotel</h4>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4" style="text-align:right;">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="cards container">
            <div class="row isotope">
                
                <div class="col-sm-6 col-md-12 feeds">
                    <div class="thumbnail" style="min-height:350px;">
                        <div class="caption">
                            <h3>Main Info: </h3>
                            <div class="row">
                                <form method="post" action="<?php echo base_url().'admin/input_hotel';?>">
                                <div class="col-lg-6">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-cutlery"></span></span>
                                        <input type="text" class="form-control" name="hotelname" placeholder="Name" aria-describedby="sizing-addon1">
                                    </div>
                                </div>
                            
                                <div class="col-lg-6">
                                    <div class="input-group input-group-lg" style="">
                                        <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-map-marker"></span></span>
                                        <input type="text" id="searchTextField" class="form-control" placeholder="Location" aria-describedby="sizing-addon1">
                                        
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="col-lg-12">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-road"></span></span>
                                        <input type="text" class="form-control" name="hoteladdr" placeholder="Address" aria-describedby="sizing-addon1">
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="col-lg-6">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-clock-o"></i></span>
                                        <input type="text" class="form-control" name="topen" placeholder="Opening Time" aria-describedby="sizing-addon1">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-clock-o"></i></span>
                                        <input type="text" class="form-control" name="tclose" placeholder="Closing Time" aria-describedby="sizing-addon1">
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="col-lg-6">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-apple"></span></span>
                                        <select class="form-control" id="" name="hoteltype" placeholder="Veg or NonVeg" style="">
                                            <option>Veg</option>
                                            <option>Non-Veg</option>
                                            <option>Both</option>
                                            <option>Egg</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-phone"></span></span>
                                        <input type="text" class="form-control" name="hotelphn" placeholder="Phone No" aria-describedby="sizing-addon1">
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="col-lg-6">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                                        <input type="email" class="form-control" name="hotelemail" placeholder="Email" aria-describedby="sizing-addon1">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-globe"></span></span>
                                        <input type="text" class="form-control" name="hotelweb" placeholder="Website" aria-describedby="sizing-addon1">
                                    </div>
                                </div>
                                <input type="hidden" id="Loclat" name="hotellat" />
                                <input type="hidden" id="Loclng" name="hotellng" />
                                <br><br><br>
                                <div class="col-lg-6">
                                    <div class="fileUpload btn btn-primary">
                                        <span>Upload Cover Image</span>
                                        <input type="file" class="upload" />
                                    </div>
                                </div>
                                
                                <div class="col-lg-6" style="text-align:right;">
                                    <div class="fileUpload btn btn-primary">
                                        <span>Add this hotel</span>
                                        <input type="submit" class="upload" />
                                    </div>
                                </div>
                                </form>
                            </div>
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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKwGo0vPZC0HUDBMTB-FI-tHx-bc4cQ0U&libraries=places" type="text/javascript"></script>
        <script type="text/javascript">
            function initialize() {
                var input = document.getElementById('searchTextField');
                var autocomplete = new google.maps.places.Autocomplete(input);
                google.maps.event.addListener(autocomplete, 'place_changed', function () {
                    var place = autocomplete.getPlace();
                    document.getElementById('Loclat').value = place.geometry.location.lat();
                    document.getElementById('Loclng').value = place.geometry.location.lng();            
                });
            }
            google.maps.event.addDomListener(window, 'load', initialize); 
        </script>
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