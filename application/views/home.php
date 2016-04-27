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
        <link href="<?php echo base_url();?>assets/css/home.css" rel="stylesheet">
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
            <div class='row' style="padding-top:150px;">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-default" aria-haspopup="true" aria-expanded="false" type="button" style="height:60px;font-size:18px;font-weight: 800;"><i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;&nbsp;Hotels</button>
                        </span>
                        <form id="search" method="post" action="<?php echo base_url().'user/find_dist'; ?>">
                        <select class="form-control" id="" placeholder="Time" style="height:60px;font-size:18px;font-weight: 800;width:30%;">
                            <option>Breakfast</option>
                            <option>Lunch</option>
                            <option>Dinner</option>
                            <option>Breaks</option>
                        </select>
                        <select class="form-control" id="" name="type" placeholder="Veg or NonVeg" style="height:60px;font-size:18px;font-weight: 800;width:35%;">
                            <option>Veg</option>
                            <option>Non-Veg</option>
                            <option>Both</option>
                            <option>Egg</option>
                        </select>
                        <input type="text" id="searchTextField" class="form-control" placeholder="Location" style="height:60px;font-size:18px;font-weight: 800;width:35%;">
                        <input type="hidden" id="Loc" name="Loc" />     
                        <input type="hidden" id="Loclat" name="Loclat" />
                        <input type="hidden" id="Loclng" name="Loclng" /> 
                        </form>
                        <span class="input-group-btn">
                            <button class="btn btn-default" id="submit" type="button" style="height:60px;font-size:18px;font-weight: 800;">&nbsp;<i class="fa fa-search" aria-hidden="true"></i>&nbsp;</button>
                        </span>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
            </div>  
        </div>
        <div class="cards container">
            <div class="row isotope">
       
            <?php 
                    $i=0;
                    while($hotel[$i])
                    {
                    echo '
                <div class="col-sm-6 col-md-3 feeds">
                    <div class="thumbnail">
                        <a href="'.base_url().'admin/hotel/'.$hotel[$i]['id'].'">
                        <img src="'.base_url().'assets/uploads/'.$hotel[$i]['image'].'" alt="image">
                        <div class="caption">
                            <h3>'.$hotel[$i]['name'].'</h3>
                        </div></a>
                    </div>
                </div>';
                    $i++;
                    }
                ?>  
                
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
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>
        <script>
            $( "#submit" ).click(function() {
                $( "#search" ).submit();
            });
        </script>
        <script type="text/javascript">
            function initialize() {
                var input = document.getElementById('searchTextField');
                var autocomplete = new google.maps.places.Autocomplete(input);
                google.maps.event.addListener(autocomplete, 'place_changed', function () {
                    var place = autocomplete.getPlace();
                    document.getElementById('Loc').value = place.name;
                    document.getElementById('Loclat').value = place.geometry.location.lat();
                    document.getElementById('Loclng').value = place.geometry.location.lng();
                    //alert("This function is working!");
                    //alert(place.name);
                    
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