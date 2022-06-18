<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>categories control</h4>
                        <h2>You can delete  categories and also you can edit categories</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="contact-us">
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">language name</th>
                    <th scope="col">set as default language</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $i=1;
                if (count($languages))
                {

                    foreach($languages as $languag){
                        echo ' <tr>
        <th scope="row">'.$i.'</th>
        <td>'.$languag->name.'</td>
        <td><a href="'.site_url('languages/set_language/'.$languag->language_shortcut).'" type="button" class="btn btn-danger">set as site language</a></td>

       
    </tr>';
                        ++$i;
                    }
                } ?>


                </tbody>
            </table>

        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</section>