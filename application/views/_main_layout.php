<?php $this->load->view('components/page_head'); ?>
<!-- Page Content -->
<!-- Banner Starts Here -->
<header class="mb-5">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?php echo site_url('movies'); ?>"><h2>line<em>.</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php if ($this->session->userdata('id')) {
                echo '   <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                        <a class="nav-link" href="' . site_url('user/logout') . '">log out</a>
                    </li>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                <li class="nav-item">
                        <a class="nav-link" href="' . site_url('languages') . '">set languages</a>
                    </li>';
                if ($this->session->userdata('status') == 1) {
                    echo ' <li class="nav-item">

                        <a class="nav-link" href="' . site_url('admin/dash_board') . '">dashboard</a>
                    </li>';
                }

                echo ' </ul>
            </div>';
            } else {
                echo '   <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                        <a class="nav-link" href="' . site_url('user/login') . '">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="' . site_url('languages') . '">set languages</a>
                    </li>';}
            ?>

        </div>
    </nav>
</header>
<?php $this->load->view($subview); ?>


<!-- Bootstrap core JavaScript -->

<?php $this->load->view('components/page_tail'); ?>


