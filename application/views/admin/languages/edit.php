<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>language edit</h4>
                        <h2>edit your language</h2>
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
                                    <h2>enter your language data</h2>
                                </div>
                                <div class="content">
                                    <?php echo validation_errors(); ?>
                                    <?php echo form_open(); ?>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <?php echo form_input('name', set_value('name', $languages->name)); ?>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <?php echo form_input('language_shortcut', set_value('language_shortcut', $languages->language_shortcut)); ?>
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
<?php
