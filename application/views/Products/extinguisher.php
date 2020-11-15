<?php $this->load->view('Elements/Common/header'); ?>
<div class="animationload"><div class="loader">Loading...</div></div> <!-- End Preloader -->
       
<!--/HEADER SECTION -->
<?php $this->load->view('Elements/Common/navigation', array('pageName'=>$pageName)); ?>
<!-- end header -->

<div class="main-content" style="padding-top:180px;">
    <div class="container">
        <div class="col-md-9 blog-content">
            <?php $this->load->view('Elements/Products/extinguisher_product'); ?>
             
        </div>
        <asidebar class="col-md-3" data-scroll-reveal="enter from the bottom after 0.1s">
            <?php $this->load->view('Elements/Common/sidebar_services'); ?>
            <div style="border-top: 1px solid #ddd;"></div>
            <?php $this->load->view('Elements/Common/sidebar_industries'); ?>
        </asidebar>
    </div>
</div>

<div class="clearfix"></div>
<section class="footer-wrapper" style="padding-top: 0px !important;">    
    <?php $this->load->view('Elements/Common/footer'); ?>
</section>