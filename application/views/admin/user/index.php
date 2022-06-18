<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>user control</h4>
                        <h2>You can delete  users and also you can make them partners in the site</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="contact-us">
    <div class="container">
        <div class="row">
            <a href="user/edit/" type="button" class="btn btn-info">add new user </a>

            <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Delete</th>
        <th scope="col">set admin</th>
        <th scope="col">edit</th>
    </tr>
    </thead>
    <tbody>

    <?php
    $i=1;
    if (count($user))
    {

        foreach($user as $key=>$row){
            echo ' <tr>
        <th scope="row">'.$i.'</th>
        <td>'.$row->name.'</td>
        <td>'.$row->email.'</td>
        <td><a href="'.site_url('admin/user/delete/'.$row->id).'" type="button" class="btn btn-danger">delete</a></td>
        <td><a href="'.site_url('admin/user/set_admin/'.$row->id).'" type="button" class="btn btn-success">set admin</a></td>
        <td><a href="'.site_url('admin/user/edit/'.$row->id).'" type="button" class="btn btn-info">edit</a></td>
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