<?php $this->load->view('Elements/Common/header'); ?>
<div class="animationload"><div class="loader">Loading...</div></div> <!-- End Preloader -->
       
<!--/HEADER SECTION -->
<?php $this->load->view('Elements/Common/navigation', array('pageName'=>$pageName)); ?>
<!-- end header -->

<div class="main-content" style="padding-top:180px;">
    <div class="container">
        
        <?php $this->load->view('Elements/Services/air_duct_cleaning'); ?>
             
        
    </div>
</div>

<div class="clearfix"></div>
<section class="footer-wrapper" style="padding-top: 0px !important;">    
    <?php $this->load->view('Elements/Common/footer'); ?>
</section>