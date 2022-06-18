<div class="heading-page header-text">
    <section class="page-heading" style="background-image: url(' . base_url(trim($row->poster_path, '\", ')) . ');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-content">
                    <?php  foreach($category as $key=>$row) { echo'<h4>'. $row->name. '</h4><h2>'.$row->description.'</h2>';}?>

                </div>
            </div>
        </div>
    </div>
    </section>
</div>
<section class="blog-posts mt-5 ">
    <div class="container mt-5 " style="margin-top:100px;padding-top: 50px">
        <div class="row mt-5">
            <div class="col-lg-9 mt-5" >
                <div class="all-blog-posts mt-5">
                    <div class="row ">

                        <?php
                        if (count($movies))
                        {

                            foreach($movies as $key=>$row) {
                                if(!$row->name){
                                    continue;
                                }
                                echo '<div class="col-lg-6 ">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img style="width: 100% ;height: 150px"src="'.base_url(trim($row->poster_path, '\", ')).'"  alt="">
                                </div>
                                <div class="down-content">
                                    <span style="font-size: 10px">'.$row->name.'</span>
                                    <a href="' . site_url('movies/movies_show/' . $row->id) . '" ><h4 style="font-size: 15px">'.$row->discription.'</h4></a>
                                    <ul class="post-info">
                                        <li><a href="' . site_url('movies/sub_category_show/' . $row->category_id) . '">'.$row->category_name.'</a></li>
                                        <li><a href="#">'.$row->created_at.'</a></li>
                                    </ul>
                                    <p>'.$row->discription.' </p>
                                 
                                </div>
                                
                            </div>
                        </div>';
                            }
                        }
                        ?>


                        <div class="col-lg-12">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-5">
                <div class="sidebar mt-5">
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="sidebar-item tags">
                                <div class="sidebar-heading">
                                    <h2>categories</h2>
                                </div>
                                <div class="content">
                                    <ul>
                                        <?php
                                        if (count($categories)) {
                                            foreach ($categories as $key => $row) {
                                                if(!$row){
                                                    continue;
                                                }
                                                echo '<li><a href="' . site_url('movies/sub_category_show/' . $key) . '">' . $row . '</a></li>';
                                            }
                                        }
                                        ?>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
