<!-- Banner Ends Here -->


<?php
if (count($movies)) {
    foreach ($movies as $key => $row) {

        echo '
<div class="heading-page header-text">
    <section class="page-heading" style="background-image: url(' . base_url(trim($row->poster_path, '\", ')) . ');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>' . $row->name . '</h4>
                        <h2>' . $row->discription . '</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<section class="blog-posts grid-system">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
       </video>
                                </div>
                                        
                                    </div>
                                          <hr class="m-5">
                                            <div class="post-options">
                                    
                                   
                                           <div class="blog-thumb">
                                   <video width="100%" height="240" controls>
                                    <source src="' . base_url(trim($row->film_path, '\", ')) . '"alt="' . $row->film_alt . '  >
                            
                               
                                    </video>                                </div>
                                <div class="down-content">
                                    <span>' . $row->name . '</span>
                                    <ul class="post-info">
                                        <li><a href="' . site_url('movies/category_show/' . $row->category_id) . '">' . $row->category_name . '</a></li>
                                        <li><a href="#">' . $row->created_at . '</a></li>
                                        <li><a href="#">'.count($comments).' Comments</a></li>
                                    </ul>
                                    <p>' . $row->discription . ' </p>
                                    <div class="post-options">
                                       <span>' . $row->trailer_title . '</span>
                                         
                                           <div class="blog-thumb">
                                   <video width="100%" height="240" controls>
                                    <source src="' . base_url(trim($row->trailer_path, '\", ')) . '"alt="' . $row->trailer_alt . ' >
                            
                               
                                    </video>
                                </div>
                                        
                                    </div>
                                         
                                            <div class="post-options">
                                   
                                   
                                           <div class="blog-thumb">
                                 
                                </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="sidebar-item comments">
                                <div class="sidebar-heading">
                                    <h2>'.count($comments).' comments</h2>
                                </div>
                                <div class="content">
                                <ul>';
        foreach ($comments as $comment => $data) {
            echo '<li>
                                            <div class="author-thumb">
                                      
                                            </div>
                                            <div class="right-content col-lg-12">
                                                <h4>'.$data->name.'<span>'.$data->created_at.'</span></h4>
                                                <p>'.$data->comment.'</p>
                                            </div>
                                        </li>';
        }


        echo '
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="sidebar-item submit-comment">
                                <div class="sidebar-heading">
                                    <h2> add comment</h2>
                                </div>';
                                if($this->session->userdata('id')){
                                   echo '<div class="content">
                                    ' . validation_errors() . '
                                     ' . form_open() . '
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <textarea name="comment" rows="6" id="message" placeholder="Type your comment" required=""></textarea>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <button type="submit"value="' . $row->id . '" name="movies_id" id="form-submit" class="main-button">Submit</button>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </form>
                                </div>';
                                }

       echo '
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    }
} ?>
<div class="col-lg-4">
    <div class="sidebar">
        <div class="row">
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
