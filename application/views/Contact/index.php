<?php $this->load->view('Elements/Common/header'); ?>
<div class="animationload"><div class="loader">Loading...</div></div> <!-- End Preloader -->
       
<!--/HEADER SECTION -->
<?php $this->load->view('Elements/Common/navigation', array('pageName'=>$pageName)); ?>
<!-- end header -->

<!--/SLIDER SECTION -->
<?php //$this->load->view('Elements/Common/slider'); ?>
<section id="home" class="sliderwrapper clearfix">    
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                    <img src="<?php echo base_url(); ?>assets/img/contactus-page-slider.png"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- end slider -->

    <section id="contact" class="contact-wrapper" style="padding-top: 0px !important; ">
        <div class="title text-center">
                <h2><span class="txt-red">GET IN TOUCH WITH</span> NARSHING FIRE</h2> 
                <p>"We are happy to hear from you again"</p>
                <hr>
        </div><!-- end title -->
        <div class="contact_tab text-center">
                    <ul id="myTab" class="container text-center nav nav-tabs" role="tablist">
                        <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Contact Details</a></li>
                        <li><a href="#tab2" role="tab" data-toggle="tab">Location Maps</a></li>
                    </ul>
           <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                        <div class="container">
                        <p>If you want to request a service, have a specific question, or want to learn more about our products and services, fill out the form and Narshing Fire will get back to you soon.</p>
                            <div id="message"></div>
                            <form id="contactform" action="" name="contactform" method="post" data-scroll-reveal="enter from the bottom after 0.4s">

                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Name"> 
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile"> 
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email Address"> 
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject"> 
                                </div>

                                <div class="clearfix"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Message"></textarea>
                                </div>

                                <div class="text-center">
                                    <div class="col-md-6 text-right">
                                        <button type="button" value="SEND" id="submit_enquiry" class="btn btn-lg btn-contact btn-primary" >SUBMIT</button>
                                    </div>

                                    <div class="col-md-6 text-left">
                                        <div class="redDiv" style="margin-top: 7%;color:red;"></div>
                                    </div>
                                </div>
                            </form> <!-- End Form -->
                        </div> <!-- End Container -->
                    </div><!-- End Tab Pane -->
            
                    <!-- /Google Map -->     
                    <div class="tab-pane fade" id="tab2">
                        <div id="map">
                            
                        </div>
                    </div>   
            </div><!-- /end my tab content -->  
        </div><!-- /contact_tab -->  
    
        <div class="container">
            <div class="title text-center">
                <div class="clearfix"></div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="contact-box" data-scroll-reveal="enter from the bottom after 0.6s">
                        <a title="" href="javascript:void(0)"><i class="fa fa-envelope-o aligncenter"></i></a>
                        <h2>narshingfire@gmail.com</h2>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="contact-box" data-scroll-reveal="enter from the bottom after 0.6s">
                        <a title="" href="javascript:void(0)"><i class="fa fa-map-marker aligncenter"></i></a>
                        <h2>Narshing Fire & Safety Systems</h2>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="contact-box"  data-scroll-reveal="enter from the bottom after 0.6s">
                         <a title="" href="javascript:void(0)"><i class="fa fa-phone aligncenter"></i></a>
                        <h2>8076887986, 9718040323 </h2>
                    </div>
                </div>
            </div> <!-- end title -->
        </div><!-- end container -->        
    </section>

<section id="footer" class="footer-wrapper" style="padding-top: 0px !important;">    
<?php $this->load->view('Elements/Common/footer'); ?>
</section>
     
<script type="text/javascript">
    $('#submit_enquiry').on('click', function(){
        if($('#first_name').val()==''){
            $('.redDiv').text('Name can not be blank');

          }else if($('#mobile').val()==''){
            $('.redDiv').text('Mobile can not be blank');

          }else{
            var uname = $('#first_name').val();
            var email = $('#email').val();
            var phone = $('#mobile').val();
            var subject = $('#subject').val();
            var message = $('#comments').val();
            $.ajax({
                url: "<?php echo base_url(); ?>Contact/submitForm",
                type: "post",
                data: {'uname':uname, 'email':email, 'phone':phone, 'subject':subject, 'message':message},
                beforeSend: function (xhr) {
                    $('.redDiv').html('<img src="<?php echo base_url() ?>assets/img/AjaxLoader.gif" /> Please wait..');
                },
                success: function (data) {
                    $('.redDiv').text('Thanks for showing your interest!, Soon you will get a call.');
                
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        }
    });
</script>