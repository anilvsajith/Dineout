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
        <link href="<?php echo base_url();?>assets/css/userhotel.css" rel="stylesheet">
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
                        <li><a href="<?php echo base_url();?>assets/files/readme.rst">Read Me</a></li>
                        <li><a href="<?php echo base_url();?>assets/files/report.pdf">Report</a></li>
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
                        <li><a href="<?php echo base_url().'user/logout';?>"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                        <li>
                            <a href="#" style="height:54px;">
                                <span style="font-style:italic;">Welcome</span>, <?php echo $userdata['user_name'];?>&nbsp;
                                <img src="<?php echo base_url();?>assets/img/John_Doe.jpg" height="35" style="margin-top:-6px;" class="img-circle">
                            </a>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class="topbg">
            <div class="container">
                <div class="row" style="padding-top:120px;">
                    <div class="col-lg-8">
                        <h4 style="font-size:45px;color:#fff;">Hotel Name Abcdefg</h4>
                        <h6 style="font-size:25px;color:#fff;"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Cochin, Kerala</h6>
                        <h6 style="font-size:25px;color:#fff;"><i class="fa fa-clock-o" aria-hidden="true"></i>Opens:
                            &nbsp;06:00&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-clock-o" aria-hidden="true"></i>Closes:&nbsp;22:00</h6>
                    </div>
                    <div class="col-lg-4" style="text-align:right;">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default" aria-haspopup="true" aria-expanded="false" style="margin-top:30%;height:60px;font-size:18px;font-weight: 800;">
                                Rate Us Now!
                            </button>
                        </div>
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
                google.maps.event.addDomListener(input, 'keydown', function(e) { 
                if (e.keyCode == 13) { 
                    e.preventDefault(); 
                    }
                });                
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
        <script type="text/javascript">
	       $(window).load(function(){
  	         $("#submit").click(function(){
                 $.ajax({
                    type:"POST",
                    url: <?php echo base_url().'admin/input_hotel';?>,
                    data: $('#form1').serialize(),
                    fileElementId: 'pic',	
                    success: function(data, status){
                        console.log(data);
                        var obj=JSON.parse(data);
                        },
                   error: function(){
                        alert("There was an error in passing....please excuse us.");
                    }
                });
               });
            });
        </script>
                        

  </body>
</html>