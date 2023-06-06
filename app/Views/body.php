<?php echo view('navbar')?>
<section class="home-section">
    <div class="container-fluid main-content">
        <!-- <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h5 class="content-title"><?php echo $title_page; ?></h5>
                <div class="content-nav-links">
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><?php echo $title_page; ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                    </nav>
                </div>
            </div>
        </div> -->
        <?php echo view($content)?>
    </div>
</section>