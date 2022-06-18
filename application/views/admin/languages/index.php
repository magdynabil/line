<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>language control</h4>
                        <h2>You can delete  languages and also you can edit languages </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="contact-us">
    <div class="container">
        <div class="row">
            <a href="languages/edit/" type="button" class="btn btn-info">add new language </a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Delete</th>
                    <th scope="col">edit</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $i=1;
                if (count($languages))
                {

                    foreach($languages as $key=>$row){
                        echo ' <tr>
        <th scope="row">'.$i.'</th>
        <td>'.$row->name.'</td>
        <td>'.$row->language_shortcut.'</td>
        <td><a href="'.site_url('admin/languages/delete/'.$row->id).'" type="button" class="btn btn-danger">delete</a></td>
        <td><a href="'.site_url('admin/languages/edit/'.$row->id).'" type="button" class="btn btn-info">edit</a></td>
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