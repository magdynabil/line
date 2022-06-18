<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>login</h4>
                        <h2>let’s start with us</h2>
                        <h5><span class="text-light">if you don’t have account </span> <a  href="<?php echo site_url('user/edit'); ?>">sign up</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="contact-us">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="down-contact">
                    <div class="row">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-7">
                            <div class="sidebar-item contact-form">
                                <div class="sidebar-heading">
                                    <h2>login</h2>
                                </div>
                                <div class="content">
                                    <?php echo validation_errors(); ?>
                                    <?php echo form_open(); ?>
                                    <div class="row">
                                        <div class="col-md-12s col-sm-12">
                                            <fieldset>
                                                <?php echo form_input('email'); ?>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <fieldset>
                                                <?php echo form_password('password'); ?>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12 text-lights">
                                            <fieldset>
                                                <?php echo form_submit('submit', 'login', 'class="main-button btn-info "'); ?>
                                            </fieldset>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

