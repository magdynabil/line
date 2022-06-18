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
            <a href="categories/edit/" type="button" class="btn btn-info">add new categories </a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">parent</th>
                    <th scope="col">discription</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $i=1;
                if (count($categories))
                {

                    foreach($categories as $key=>$row){
                        echo ' <tr>
        <th scope="row">'.$i.'</th>
        <td>'.$row->parent_name.'</td>
        <td>'.$row->parent_category.'</td>
        <td>'.$row->parent_description .'</td>
        <td><a href="'.site_url('admin/categories/delete/'.$row->id).'" type="button" class="btn btn-danger">delete</a></td>
        <td><a href="'.site_url('admin/categories/edit/'.$row->id).'" type="button" class="btn btn-info">edit</a></td>


       
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