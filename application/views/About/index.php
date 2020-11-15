<?php $this->load->view('Elements/Common/header'); ?>
<div class="animationload"><div class="loader">Loading...</div></div> <!-- End Preloader -->
       
<!--/HEADER SECTION -->
<?php $this->load->view('Elements/Common/navigation', array('pageName'=>$pageName)); ?>
<!-- end header -->

<!--main-content Start--->
<div class="main-content clearfix" style="padding-top:180px;">
    <div class="container">
        <div class="col-md-9 blog-content">
            <article data-scroll-reveal="enter from the bottom after 0.3s"> <!-- Start blog post -->
                <img src="<?php echo base_url(); ?>assets/img/about-us-banner.jpeg" class="img-responsive" alt=""/>
                <div class="post-head">
                    <h4><span class='txt-red'>Narshing Fire</span> & Safety Systems</h4>
                    
                </div>
                <ul class="comments">
                    <li data-scroll-reveal="enter from the bottom after 0.3s">
                        <div class="c-author">
                            <img src="<?php echo base_url(); ?>assets/img/logo_180.png" />
                        </div>
                        <div class="c-info" style="margin-left:10px;">
                            <p style="margin-left: 169px;"><span class='txt-red'>Narshing Fire</span> can overcome all your fire protection needs. When you truly love your family, your assets or your business, you protect them to the best of your ability. But you can’t do it all alone. At Narshing Fire, we help you understand fire risks and offer reliable fire safety products and solutions to safeguard everything you love.</p>
                        
                            <p><span class='txt-red'>Narshing Fire</span> can understand the demands placed on business owners and managers to maintain compliance and protect their employees, customers, and property can be overwhelming. Our goal is to offer a tailored program for each customer’s unique challenges.</p> 
                            
                        </div>
                    </li>
                </ul>  

                <strong>What sets us apart?</strong>
                <ul>
                    <li>Robust Infrastructure </li>
                    <li>Extensive Network </li>
                    <li>One Stop Shop </li>
                    <li>Expert Team </li>
                    <li>Advanced Equipment </li>
                </ul>
                <p>We take pride in knowing our fire protection systems offer the maximum level of safety and effectiveness. <span class='txt-red'>Narshing Fire</span> is committed to meet or exceed your expectations every day. </p>              
            </article>

        </div>

        <asidebar class="col-md-3" data-scroll-reveal="enter from the bottom after 0.1s">
            <?php $this->load->view('Elements/Common/sidebar_products'); ?>
            <div style="border-top: 1px solid #ddd;"></div>
            <?php $this->load->view('Elements/Common/sidebar_services'); ?>
            <div style="border-top: 1px solid #ddd;"></div>
            <?php $this->load->view('Elements/Common/sidebar_industries'); ?>
        </asidebar>
    </div>
</div>
<!--main-content end--->
<div class="clearfix"></div>
<section class="parallax" >
    <div class="overlay" style="padding-top: 7px;padding-bottom: 0px;">
        <div class="container">
            <?php $this->load->view('Elements/Common/our_client'); ?>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="footer-wrapper" style="padding-top: 0px !important;">    
<?php $this->load->view('Elements/Common/footer'); ?>
</section>