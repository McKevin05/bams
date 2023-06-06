<?php echo view('header')?>
<main class="d-flex flex-grow-1 overflow-hidden print_hide">
    <!-- Sidebar -->
    <?php echo view('sidebar')?>
    

    <!-- Content -->
    <div class="content flex-grow-1 overflow-y-auto p-sm-0 p-md-3 p-lg-3 p-xl-5">
        <?php echo view($content);?>
    </div>
</main>