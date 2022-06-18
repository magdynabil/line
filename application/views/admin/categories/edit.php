<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>categories</h4>
                        <h2>add new categories or edit your categories</h2>
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
                                        <?php
                                        if (count($languages)) {
                                            foreach ($languages as $language) {
                                                echo ' <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                            <label for="">name ' . $language . '</label>';
                                                echo form_input('name' . $language . '', set_value('name', $categories["name$language"]));
                                                echo '</fieldset>
                                              </div> 
                                              <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                            <label for="">description ' . $language . '</label>';
                                                echo form_input('description' . $language . '', set_value('description', $categories["description$language"]));
                                                echo '</fieldset>
                                               </div>';
                                            }
                                        }
                                        ?>


                                        <div class="col-md-12 col-sm-12">
                                            <fieldset>
                                                <?php echo form_dropdown('parent_category', $categories_no_parant, $this->input->post('parent_category') ? $this->input->post('parent_category') : $categories["parent_category"]); ?>
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
