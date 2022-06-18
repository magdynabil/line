<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>sign in</h4>
                        <h2>let’s start with us</h2>
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
                        <div class="col-lg-12">
                            <div class="sidebar-item contact-form">
                                <div class="sidebar-heading">
                                    <h2>enter your data</h2>
                                </div>
                                <div class="content">
                                    <?php echo validation_errors(); ?>
                                    <?php echo form_open(); ?>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <?php echo form_input('name', set_value('name', $user->name)); ?>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <?php echo form_input('email', set_value('email', $user->email)); ?>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <fieldset>
                                                    <?php echo form_password('password'); ?>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <fieldset>
                                                    <?php echo form_password('password_confirm'); ?>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <?php echo form_submit('submit', 'Save', 'class="main-button"'); ?>
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
