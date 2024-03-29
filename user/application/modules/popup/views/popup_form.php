
<div class="row">
    <div class="col-lg-12">
        <?php
        if ($this->session->flashdata('success') != "") {
            ?>
            <div class="alert alert-success alert_box">
                <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                        class="fa fa-times"></i></a>
                <strong>Success !</strong> <?php echo $this->session->flashdata('success'); ?>.
            </div>
        <?php
        }
        ?>
        <?php if ($this->session->flashdata('error') != "") {

            ?>
            <div class="alert alert-danger alert_box">
                <a href="#" class="close" data-dismiss="alert" aria-label="close"><i
                        class="fa fa-times"></i></a>
                <strong>Error!</strong>  <?php echo $this->session->flashdata('error'); ?>.
            </div>
        <?php
        }
        ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <?php echo (isset($title) && $title !="") ? $title:""; ?>
            </div>

            <div class="panel-body">

                <form class="tab_form" method="post" action="" enctype="multipart/form-data">
                    <div class="tab-content">

                        <div class="tab-pane fade active in" id="home">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Title<span class="asterisk">*</span></label>
                                        <input type="text" name="title" data-validation="required" class="form-control">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Link<span class="asterisk">*</span></label>
                                        <input type="text" name="link" data-validation="required" class="form-control">


                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Image</label>
                                    <?php
                                    if(isset($records['popup_image']))
                                    {

                                        ?>
                                        <div class="remove_option">

                                            <?php
                                            $path  =  '../uploads/popup/';
                                            ?>
                                            <img src="<?php echo $path. $records['popup_image'];?>" alt="popup_image" style="max-width: 940px; max-height: 360px;">

                                            <span class="btn btn-info remove_btn" id="btn_remove">Remove</span>
                                        </div>
                                        <input type="hidden" name="pre_popupimg" value="">
                                        <div id="image_input">
                                            <input type="file" class="form-control" name="popup_image" id="popup_image">
                                            <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.
                                            </p>
                                        </div>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <input type="file" class="form-control" name="popup_image"  id="popup_image">
                                        <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>

                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Body</label>
                                    <textarea rows="5" cols="10" name="body" id="body"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Is Active? </label>
                                    <input type="radio" name="publish_status" class="regular-text" data-validation="required" value="1">Yes
                                    <input type="radio" name="publish_status" class="regular-text" data-validation="required" value="0">No

                                </div>
                            </div>

                        </div>
                        <p class="submit"> 
                            <input type="submit" name="submit" id="submit" class="btn btn-danger" value="Save">
                        </p>



                    </div>
                </form>
            </div>
        </div>


    </div>
</div>

<script>
    CKEDITOR.replace( 'body'  ,{

        filebrowserBrowseUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );


    KEDITOR.replace( 'contact-detail' );
</script>


<script>

    $('#submit').click(function(e)
    {
        var a=0;
        var ext1 =  $('#popup_image').val().split('.').pop().toLowerCase();
        
        if(ext1 == "")
        {
            a = 1;
        }
        else
        {
            if($.inArray(ext1, ['gif','png','jpg','jpeg']) == -1)
            {
                a = 0
            }
            else
            {
                a = 1;
            }
        }
        
        if(a != "1")
        {
            alert('Invalid Popup Image');
            e.preventDefault();
        }
        else{
            e.submit;
        }

    });
</script>
<script>
    $.validate();
</script>


