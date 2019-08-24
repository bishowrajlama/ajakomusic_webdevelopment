<div class="signup-page">
    <div class="container">
        <div class="row">
            <!-- user-login -->
        <div class="signup-page-half">
            <div class="col-sm-5 spectator">
                <?php
                if(validation_errors())
                {
                    ?>
                    <div class="alert  alert-danger alert_box">
                        <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                    class="fa fa-times"></i></a>
                        <?php echo validation_errors();?>
                    </div>

                    <?php
                }
                ?>

                <?php if (isset($error)) {


                    ?>
                    <div class="alert alert-danger alert_box">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close"><i
                                    class="fa fa-times"></i></a>
                        <strong>Error!</strong>  <?php echo isset($error)?$error:"" ; ?>.
                    </div>
                    <?php
                }
                ?>
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
                <?php
                if ($this->session->flashdata('error') != "") {
                    ?>
                    <div class="alert alert-danger alert_box">
                        <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                    class="fa fa-times"></i></a>
                        <strong>Success !</strong> <?php echo $this->session->flashdata('error'); ?>.
                    </div>
                    <?php
                }
                ?>
                <div class="ragister-account account-login">

                    <div class="devider text-center"><h1 class="section-title title">User Login<h1></div>
                    <form id="registation-form" name="registation-form" action="<?php echo base_url().'user/login' ;?>" method="post">

                        <div class="form-group">

                            <input type="email" name="email" data-validation="required email"  placeholder="Email" class="form-control" value="<?php echo set_value('email');?>" required="required">
                        </div>
                        <div class="form-group">

                            <input type="password" name="password" data-validation="required confirmation length"  data-validation-length="max50"  class="form-control"  placeholder="Password" value="<?php echo set_value('password');?>">
                        </div>

                        <div class="form-group">

                            <input type="password" name="pass_confirmation" data-validation="required length"  data-validation-length="max50" class="form-control" placeholder="Retype Password" value="<?php echo set_value('pass_confirmation');?>">
                        </div>
                        <!-- checkbox -->
                        <div class="checkbox">
                            <label class="pull-left"><input type="checkbox" name="signing" id="signing"> Keep Me Login </label>
                            <a class="pull-right" data-toggle="modal" data-target="#myModalforget">Forgot Password?</a>

                        </div><!-- checkbox -->
                        <div class="submit-button text-center">
                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="btn btn-primary" value="Account Login">

                        </div>
                    </form>
                    <div class="new-user text-center">
                        <p>Don't have an account ? <a href="<?php echo base_url(); ?>login/register">Register Now</a> </p>
                    </div>
                    <!-- Modal to rest password -->
                    <form method="post" id="password-reset" action="<?php echo site_url('login/password_rest');?>" role="form">
                        <div class="modal fade" id="myModalforget" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Forgot Password</h4>
                                        <p>Enter email address associated with us.</p>
                                    </div>
                                    <div class="modal-body">

                                        <label for="recipient-name" class="control-label">Email:</label>
                                        <div class="form-group">
                                            <input type="text" name="user_email" class="form-control" data-validation="required email">

                                        </div>


                                    </div>
                                    <div class="modal-footer">

                                        <button type="submit"  class="form-control btn-primary btn btn-login">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- 
            <div class="col-sm-6">
                <?php
                if(validation_errors())
                {
                    ?>

                    <div class="alert  alert-danger alert_box">
                        <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                    class="fa fa-times"></i></a>
                        <?php echo validation_errors();?>
                    </div>
                    <?php
                }
                ?>

                <?php if (isset($error)) {


                    ?>
                    <div class="alert alert-danger alert_box">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close"><i
                                    class="fa fa-times"></i></a>
                        <strong>Error!</strong>  <?php echo isset($error)?$error:"" ; ?>
                    </div>
                    <?php
                }
                ?>
                <?php
                if ($this->session->flashdata('success') != "") {
                    ?>
                    <div class="alert alert-success alert_box">
                        <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                    class="fa fa-times"></i></a>
                        <strong>Success !</strong> <?php echo $this->session->flashdata('success'); ?>
                    </div>
                    <?php
                }
                ?>
                <?php
                if ($this->session->flashdata('error') != "") {
                    ?>
                    <div class="alert  alert-danger alert_box">
                        <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                    class="fa fa-times"></i></a>
                        <strong>Success !</strong> <?php echo $this->session->flashdata('error'); ?>.
                    </div>
                    <?php
                }
                ?>
            </div> -->
            <!-- user-login -->
            <div class="col-sm-5 spectators">
                <div class="amrit-design-s">
                    <div class="col-sm-12">
                        <h1 class="section-title title">Create an Account</h1>
                    </div>
                    <form id="registation-form" action="login/register" method="post" role="form" >


                        <div class="col-md-6">
                            <div class="form-group">

                                <select data-validation="required" class="form-control"  id="selectbasic" name="customer_title"  >
                                    <option value="Mr">Mr.</option>
                                    <option value="Mrs">Mrs.</option>
                                    <option value="Ms">Ms.</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">

                                <input type="text" name="first_name" class="form-control"  id="first_name" data-validation="required length custom" data-validation-length="max50" data-validation-regexp="^([\w\s]+)$"  placeholder="First Name" value="<?php echo set_value('first_name');?>" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <input type="text" name="middle_name" class="form-control"  id="middle_name" data-validation="length custom" data-validation-optional="true"  data-validation-length="max50" data-validation-regexp="^([\w\s]+)$"  value="<?php echo set_value('middle_name');?>" placeholder="Middle Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <input type="text" name="last_name" class="form-control"  data-validation="required length custom" data-validation-length="max50" data-validation-regexp="^([\w\s]+)$"  placeholder="Last Name" value="<?php echo set_value('last_name');?>">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">

                                <input type="text" name="email" class="form-control"   id="register_email"  placeholder="Email Address" value="<?php echo set_value('email');?>" data-validation="required email">

                            </div>
                        </div>


                        <div class="col-md-6">

                            <div class="form-group">

                                <input type="text" name="country" class="form-control"   data-validation="country"  id="country-suggestions" placeholder="Your Country" value="<?php echo set_value('country');?>" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <input type="text" name="city" class="form-control"   placeholder="City" data-validation="required length custom" data-validation-length="max150" data-validation-regexp="^([\w\s]+)$" value="<?php echo set_value('city');?>" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <input type="text" name="contact_number" class="form-control"   data-validation="required length alphanumeric" data-validation-length="max50"   data-validation-allowing="-+ " value="<?php echo set_value('contact_number');?>"    placeholder="Contact Number" >
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">

                                <input type="password" name="password" class="form-control"  data-validation="required length" id="password"  data-validation-length="max50" tabindex="2"  placeholder="Password" value="<?php echo set_value('password');?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <input type="password" name="confirm_password" class="form-control"  data-validation="required length"  id="confirm-password" data-validation-length="max50"  placeholder="Retype Password" value="<?php echo set_value('confirm_password');?>">
                                <span id="retype_error"></span>
                            </div>
                        </div>
                        <div class="col-md-12">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 pull-right">
                                        <input type="submit" name="login-submit" id="register-submit" tabindex="4" class="btn btn-primary pull-right" value="Register">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div><!-- user-login -->
        </div><!-- row -->
    </div><!-- container -->
</div><!-- signup-page -->



<script>
    $.validate();
</script>
