<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <title>BAMS</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>/assets/images/favicon.ico">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/third_party/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/third_party/fontawesome/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/third_party/selectize/selectize.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/template.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/custom_print.css">
    </style>

  </head>
<body <?php echo $login ?"":"class='position-absolute d-flex flex-column vw-100 vh-100 overflow-hidden'"?>>
  
  
  <?php if($login):?>
    <?php echo view($content) ?>
  <?php else:?>
    <?php echo view('admin_template');?>
 <?php endif?>
 <?php echo ! empty($print) ? view($print) : ""; ?>
<script src="<?php echo base_url()?>/assets/third_party/bootstrap/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/assets/third_party/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/assets/third_party/selectize/selectize.js"></script>
<!-- <script type="text/javascript" src="<?php //echo base_url()?>/assets/js/sidenav.js"></script> -->
<?php echo ! empty($javascript) ? view($javascript) : ""; ?>

</body>
</html>
