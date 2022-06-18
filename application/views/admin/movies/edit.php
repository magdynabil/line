<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>movies</h4>
                        <h2>add new movies or edit your movies</h2>
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
                                    <?php echo $upload_error; ?>
                                    <?php echo validation_errors(); ?>
                                    <?php echo form_open_multipart(); ?>
                                    <div class="row">
                                        <?php
                                        if (count($languages)) {
                                            foreach ($languages as $language) {
                                                echo ' <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                            <label for="">name ' . $language . '</label>';
                                                echo form_input('name' . $language . '', set_value('name', $movies["name$language"]));
                                                echo '</fieldset>
                                              </div> 
                                              <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                            <label for="">description ' . $language . '</label>';
                                                echo form_input('description' . $language . '', set_value('description', $movies["description$language"]));
                                                echo '</fieldset>
                                               </div>';
                                            }
                                        }
                                        ?>

                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <label for="">poster title</label>
                                                <?php echo form_input('poster_title',set_value('poster_title', $upload["poster_title"])); ?>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <label for="">poster alt</label>
                                                <?php echo form_input('poster_alt',set_value('poster_alt', $upload["poster_alt"])); ?>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <label for="">poster</label>
                                                <?php echo form_upload('poster',set_value('poster', $upload["poster"])); ?>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <label for="">trailer title</label>
                                                <?php echo form_input('trailer_title',set_value('trailer_title', $upload["trailer_title"])); ?>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <label for="">trailer alt</label>
                                                <?php echo form_input('trailer_alt' ,set_value('trailer_alt', $upload["trailer_alt"])); ?>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <label for="">trailer</label>
                                                <?php echo form_upload('trailer',set_value('trailer', $upload["trailer"])); ?>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <label for="">film title</label>
                                                <?php echo form_input('film_title',set_value('film_title', $upload["film_title"])); ?>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <label for="">film alt</label>
                                                <?php echo form_input('film_alt',set_value('film_alt', $upload["film_alt"])); ?>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <label for="">film</label>
                                                <?php echo form_upload('film',set_value('film', $upload["film"])); ?>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <fieldset>
                                                <?php echo form_dropdown('category', $categories_no_parant, $this->input->post('category') ? $this->input->post('category') : $movies["category"]); ?>
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
