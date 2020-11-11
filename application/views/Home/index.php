<?php $this->load->view('Elements/Common/header'); ?>
<div class="animationload"><div class="loader">Loading...</div></div> <!-- End Preloader -->
       
    <!--/HEADER SECTION -->
    <?php $this->load->view('Elements/Common/navigation', array('pageName'=>$pageName)); ?>
    <!-- end header -->
	
    <!--/SLIDER SECTION -->
    <?php $this->load->view('Elements/Common/slider'); ?>
    <!-- end slider -->
	
	<section id="features" class="feature-wrapper" style="padding-top: 0px;">
    	<div class="container">
            <div data-scroll-reveal="enter from the bottom after 0.3s" class="title text-center" data-scroll-reveal-id="2" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                <h2>Narshing <span class="txt-red">Fire Safety</span></h2>
                <p>With Narshing Fire, you can be confident your employees and your workplace are safe.</p>
                <hr>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            	<div class="widget">
                	<h3> WHY Choose <span class="txt-red">Narshing Fire </span>?</h3>
                    <p>Narshing fire plays crucial roles in preventing and mitigating casualties caused by fire. Narshing Fire can ensure your organization is prepared with life safety and fire protection services. Narshing fire is an eminent manufacturer, exporter, and supplier of all types of fire extinguishers. </p>
                    <?php $this->load->view('Elements/Common/why_choose'); ?>
                </div><!-- end widget -->
            </div><!-- end col-lg-6 -->
            
        	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12" style="height: 50px;">
                <?php $this->load->view('Elements/Common/our_equipment'); ?>
			</div><!-- end col-lg-6 -->
		</div><!-- end container -->
    </section><!-- end grey-wrapper -->
            
    
    <!--/ ABOUT SECTION -->   
    <section id="about" class="about-wrapper" style="padding-top: 0px;">
        <?php $this->load->view('Elements/Common/home_about'); ?>
    <div class="clearfix"></div>
              
    </section><!-- End About Section -->
            
    <!--/ SERVICE SECTION -->   
    <section id="services" class="white-wrapper" style="padding-top: 0px !important;">
        <div class="container">
            <div class="title text-center">
                <h2><span class="txt-red">Services</span> we offer</h2>
            </div><!-- end title -->
            <?php $this->load->view('Elements/Common/home_service'); ?>
            
                   
    <!-- TESTIMONIAL SECTION -->              
            <div class="testimonial text-center">
                <h2 class="three" data-scroll-reveal="enter from the bottom after 0.2s">And What<span class="txt-red"> They Say</span></h2>
            </div><!-- end title -->
            
            <div id="testimonial" class="owl-carousel owl-theme text-center">
                <div class="testimonial"  data-scroll-reveal="enter from the bottom after 0.3s">
                    <p>Excellent service of Narshing fire safety</p>
                    <h1> Harish Aggarwal </h1>
                </div>
                <div class="testimonial">
                    <p>Very nice service of Narshing fire, expert team</p>
                    <h1> Krihna jain </h1>
                </div>
                <div class="testimonial">
                    <p>Narshing fire also giving very good service</p>
                    <h1> DANIEL Smith </h1>
                </div>
            </div><!-- end #testimonial -->
            
            <div class="customNavigation">
                <a class="btn prev"><i class="fa fa-angle-left fa-2x"></i></a>
                <a class="btn next"><i class="fa fa-angle-right fa-2x"></i></a>
            </div><!-- end customnav -->
       </div> <!-- end container -->
    </section><!-- Service and Testimonial End -->

    <section id="footer" class="footer-wrapper" style="padding-top: 0px !important;">    
    <?php $this->load->view('Elements/Common/footer'); ?>
    </section>
     
   