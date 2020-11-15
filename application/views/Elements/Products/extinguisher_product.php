<div class="comment-section">
    <h6 data-scroll-reveal="enter from the bottom after 0.3s">
        <span class="commenthr bottomline"><span class="txt-red">Fire</span> Extinguishers</span>
    </h6>
    <ul class="comments">
        <!--section-1-->
        <li data-scroll-reveal="enter from the bottom after 0.3s">
            <div class="c-author">
                <img src="<?php echo base_url(); ?>assets/img/product/dry_extinguisher.jpg" class="img-responsive" alt="">
            </div>
            <div class="c-info">
                <h4><span class="txt-red">DRY EXTINGUISHER </span></h4>
                <p><span class="txt-blk">Dry chemical extinguishers put out fire by coating the fuel with a thin layer of dust, separating the fuel from the oxygen in the air. The powder also works to interrupt the chemical reaction of fire, so these extinguishers are extremely effective at putting out fire.</span></p>
                <a class="reply txt-blue" href="javascript:void(0)" onclick="productEnquiry('Dry Extinguisher');">Enquiry</a>
            </div>
        </li>
                    
        <li>
            <div class="c-author">
                 <img src="<?php echo base_url(); ?>assets/img/product/foam_extinguisher.jpg" class="img-responsive" alt="">
            </div>
            <div class="c-info">
                <h4>FOAM <span class="txt-red">EXTINGUISHER</span></h4>
                <p><span class="txt-blk">Foam fire extinguishers can be used on Class A and B fires. They are most suited to extinguishing liquid fires such as petrol or diesel and are more versatile than water jet extinguishers because they can also be used on solids such as wood and paper.</span></p>
                <a class="reply txt-blue" href="javascript:void(0)" onclick="productEnquiry('Foam Extinguisher');">Enquiry</a>
            </div>
        </li>

        <li data-scroll-reveal="enter from the bottom after 0.3s">
            <div class="c-author">
                <img src="<?php echo base_url(); ?>assets/img/product/gas_extinguisher.jpg" class="img-responsive" alt="">
            </div>
            <div class="c-info">
                <h4><span class="txt-red">GAS</span> EXTINGUISHER </h4>
                <p><span class="txt-blk">A gas extinguishing system is a fire extinguishing system that extinguishes fire with the help of a gaseous extinguishing agent either through oxygen displacement (reduction of oxygen content) or physical effects (heat extraction). In contrast to a sprinkler system, a gas extinguishing system is designed to extinguish and not only suppress fire.</span></p>
                <a class="reply txt-blue" href="javascript:void(0)" onclick="productEnquiry('Gas Extinguisher');">Enquiry</a>
            </div>
        </li>     
        

        <li>
            <div class="c-author">
                 <img src="<?php echo base_url(); ?>assets/img/product/portable_extinguisher.jpg" class="img-responsive" alt="">
            </div>
            <div class="c-info">
                <h4><span class="txt-red">PORTABLE</span> EXTINGUISHER</h4>
                <p><span class="txt-blk">NFPA 10 provides recommended markings for portable fire extinguishers so users can quickly identify the classes of fire on which the extinguisher will be effective. The marking system combines pictographs of both recommended and unacceptable extinguisher types on a single identification label. Extinguisher markings from Annex B of NFPA 10 are shown below.</span></p>
                <a class="reply txt-blue" href="javascript:void(0)" onclick="productEnquiry('Portable Extinguisher');">Enquiry</a>
            </div>
        </li>

        <li>
            <div class="c-author">
                 <img src="<?php echo base_url(); ?>assets/img/product/water_fire_extinguisher.jpg" class="img-responsive" alt="">
            </div>
            <div class="c-info">
                <h4><span class="txt-red">WATER FIRE</span> EXTINGUISHER</h4>
                <p><span class="txt-blk">Water fire extinguishers are used to extinguish class A fires, or in other words fires involving flammable solids such as paper, wood, and textile materials. ... Water is a conductor of electricity, and as such it could cause extreme damage if a water fire extinguisher is used.</span></p>
                <a class="reply txt-blue" href="javascript:void(0)" onclick="productEnquiry('Water Fire Extinguisher');">Enquiry</a>
            </div>
        </li>

    </ul>                            
    <div class="clearfix"></div>                                                    
</div>
<input type='hidden' id='inquiry_product'>

<!-- modal box -->
<div id="prdEnqry" class="modal fade" style="top:11%;z-index: 9999;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header txt-red" id='m_header'></div>
            <div class="modal-body">

                <form class="form-horizontal" action="" >
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Name*</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Mobile*</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Enter mobile number">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                        </div>
                    </div>
                  
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="button" class="btn btn-danger" onclick="submitEnquiryFrm()">Submit</button>
                          <span class="txt-red" id='msgdiv'></span>
                        </div>
                      </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function productEnquiry(ep){
        $('#inquiry_product').val(ep);
        $('#m_header').text(ep);
        $("#prdEnqry").modal('show');
    }

    function submitEnquiryFrm(){
        var first_name= $('#first_name').val();
        var mobile_no= $('#mobile_no').val();
        var email= $('#email').val();
        var inquiry_product= $('#inquiry_product').val();

        if(first_name==''){
            $('#msgdiv').text('Please enter your name');

        }else if(mobile_no==''){
            $('#msgdiv').text('Please enter your mobile number');

        }else{
            $.ajax({
                url: "<?php echo base_url(); ?>Products/submitEnquiryFrm",
                type: "post",
                data: {'first_name':first_name, 'email':email, 'mobile_no':mobile_no, 'inquiry_product':inquiry_product},
                beforeSend: function (xhr) {
                    $('#msgdiv').html(' Please wait..');
                },
                success: function (data) {
                    $('#msgdiv').text('Thanks for showing your interest!, Soon you will get a call.');
                
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        }
    }

</script>