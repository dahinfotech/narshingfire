<div class="container">
    
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-effect="helix">
            <div class="pricing-box" style="border-top:none; margin-top:0px;">
                <div class="title txt-yellow" ><h3>Narshing Fire & Safety Systems</h3></div>
                
                <ul class="pricing clearfix">
                    <li><a href="<?php echo base_url(); ?>Home">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>About">About Us</a></li>
                    <li><a href="<?php echo base_url(); ?>Careers">Career</a></li>
                    <li><a href="<?php echo base_url(); ?>Clients">Clients</a></li>
                    <li><a href="<?php echo base_url(); ?>Privacy">Privacy Policy</a></li>
                    <li><a data-scroll="" href="#features">Why Us</a></li>
                </ul>
            </div><!-- Pricing Box -->
        </div><!-- Column 1 -->
            
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-effect="helix">
            <div class="pricing-box" style="border-top:none; margin-top:0px;">
                <div class="title txt-yellow"><h3>PRODUCTS & SERVICES</h3></div>
                
                <ul class="pricing clearfix">
                    <li><a href="">Backflow Devices</a></li>
                    <li><a href="">Distributed Antenna Systems</a></li>
                    <li><a href="">Dryer Vent Cleaning</a></li>
                    <li><a href="">Emergency | Exit Lighting</a></li>
                    <li><a href="">Fire Alarms</a></li>
                </ul>
            </div><!-- Pricing Box -->
        </div><!-- Column 2 -->
            
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-effect="helix">
            <div class="pricing-box" style="border-top:none; margin-top:0px;">
                <div class="title txt-yellow"><h3>CONTACT US</h3></div>
                
                <ul class="pricing clearfix">
                    <li class="footer-li">
                        <p>Head Office: 
                    89A, East of Kailash, Near Church New Delhi-110065</p></li>
                    <li class="footer-li">
                        <p>Regd Office: 
                    TA-178/1, Tughlakabad Extn, New Delhi-110019</p></li>
                    <li class="footer-li">
                        <p>Mob: 
                    8076887986, 9643936240, 9718040323</p></li>
                </ul>
                <div class="socialFooter">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
            </div><!-- Pricing Box -->
        </div><!-- Column 3 -->
    </div><!-- end row -->
    <div class="row">
        <div class="col-sm-4">
            <p>Designed by 
            <a href="http://www.dahinfotech.com" target="_blank">DAH INFOTECH PVT LTD</a></p>
        </div>
        <div class="col-sm-4 text-center">
            <a data-scroll-reveal="enter from the bottom after 0.3s" href="#home"><i class="fa fa-angle-up"></i></a></div>
        <div class="col-sm-4 text-right"><p>Copyright © 2020</p></div>
    </div>
</div><!-- end container -->

<!-- <img src="<?php //echo base_url(); ?>assets/img/diwali-dia.gif" class="happy-diwali-sticky" /> -->

    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>   
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/smooth-scroll.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.easypiechart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.jigowatt.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.unveilEffects.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.isotope.min.js"></script>

        

    <script>
        (function ($) {
            var $container = $('.masonry_wrapper'),
                colWidth = function () {
                    var w = $container.width(), 
                        columnNum = 1,
                        columnWidth = 0;
                    if (w > 1200) {
                        columnNum  = 3;
                    } else if (w > 900) {
                        columnNum  = 3;
                    } else if (w > 600) {
                        columnNum  = 2;
                    } else if (w > 300) {
                        columnNum  = 1;
                    }
                    columnWidth = Math.floor(w/columnNum);
                    $container.find('.item').each(function() {
                        var $item = $(this),
                            multiplier_w = $item.attr('class').match(/item-w(\d)/),
                            multiplier_h = $item.attr('class').match(/item-h(\d)/),
                            width = multiplier_w ? columnWidth*multiplier_w[1]-4 : columnWidth-4,
                            height = multiplier_h ? columnWidth*multiplier_h[1]*0.5-4 : columnWidth*0.5-4;
                        $item.css({
                            width: width,
                            height: height
                        });
                    });
                    return columnWidth;
                }
                            
                function refreshWaypoints() {
                    setTimeout(function() {
                    }, 1000);   
                }
                            
                $('nav.portfolio-filter ul li a').on('click', function() {
                    var selector = $(this).attr('data-filter');
                    $container.isotope({ filter: selector }, refreshWaypoints());
                    $('nav.portfolio-filter ul li a').removeClass('active');
                    $(this).addClass('active');
                    return false;
                });
                    
                function setPortfolio() { 
                    setColumns();
                    $container.isotope('reLayout');
                }
        
                isotope = function () {
                    $container.isotope({
                        resizable: true,
                        itemSelector: '.item',
                        masonry: {
                            columnWidth: colWidth(),
                            gutterWidth: 0
                        }
                    });
                };
            isotope();
            $(window).smartresize(isotope);
        }(jQuery));
    </script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        
        <script type="text/javascript">
            var revapi;
            jQuery(document).ready(function() {
            revapi = jQuery('.tp-banner').revolution(
            {
                delay:9000,
                startwidth:1170,
                startheight:500,
                hideThumbs:10,
                fullWidth:"off",
                fullScreen:"on",
                fullScreenOffsetContainer: ""
             });
           });  //ready
        </script>
        
        
    
    <!-- Animation Scripts-->
    <script src="<?php echo base_url(); ?>assets/js/scrollReveal.js"></script>
    <script>
            (function($) {
            "use strict"
                window.scrollReveal = new scrollReveal();
            })(jQuery);
    </script>
    
   
    <script type="text/javascript">
        $(document).ready(function() {
            $(".owl-carousel-home").owlCarousel({
                autoPlay: 3000,
                items : 4,
                itemsDesktop : [1199,3],
                itemsDesktopSmall : [979,3],
                center: true,
                nav:true,
                loop:true,
                responsive: {
                    600: {
                        items: 4
                    }
                }
            });

            $(".owl-carousel").owlCarousel({
                autoPlay: 3000,
                items : 4,
                itemsDesktop : [1199,3],
                itemsDesktopSmall : [979,3],
                center: true,
                nav:true,
                loop:true,
                responsive: {
                    600: {
                        items: 4
                    }
                }
            });
        });
    </script>
    
</body>
</html>