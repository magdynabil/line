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
                <a href="movies/edit/" type="button" class="btn btn-info">add new movies </a>
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">category</th>
                    <th scope="col">discription</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Edit</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $i=1;
                if (count($movies))
                {

                    foreach($movies as $key=>$row){
                        echo ' <tr>
        <th scope="row">'.$i.'</th>
        <td>'.$row->name.'</td>
        <td>'.$row->category.'</td>
        <td>'.$row->discription.'</td>
        <td><a href="'.site_url('admin/movies/delete/'.$row->id).'" type="button" class="btn btn-danger">delete</a></td>
        <td><a href="'.site_url('admin/movies/edit/'.$row->id).'" type="button" class="btn btn-info">edit</a></td>


       
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