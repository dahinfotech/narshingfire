

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