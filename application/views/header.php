<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>TELUS</title>

    <link rel="stylesheet" href="<?php //echo base_url ('theme/assets/css/pure-min.css'); ?>">
    <link rel="stylesheet" href="<?php //echo base_url ('theme/assets/css/grids-responsive-min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url ('theme/assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url ('theme/assets/css/toastr.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url ('theme/assets/css/styles.css'); ?>">
</head>
<body>

<main role="main">
    <div class="container-fluid">

        <div class="row">
            <div class="sidebar">
                <!-- logo -->
                <div class="d-flex justify-content-between pt-2">
                    <div>
                        <a href="<?php echo site_url (); ?>">
                            <img src="<?php echo base_url ('theme/assets/img/sidebar/set-logo.png'); ?>" width="60" height="22"><br>
                            <img src="<?php echo base_url ('theme/assets/img/sidebar/set-text.png'); ?>" width="80" height="10">
                        </a>
                    </div>
                    <div>
                        <img src="<?php echo base_url ('theme/assets/img/sidebar/telus-logo.png'); ?>" width="120" height="25">
                    </div>
                </div>
                <!--// logo -->
                
                <?php echo $apanel; ?>

                <div id="error-messages" class="text-danger mt-3">
                    <?php echo validation_errors (); ?>
                    <?php
                    if (isset($pdf_string) && is_array($pdf_string) && $pdf_string['status'] == false) {
                        echo $pdf_string['error'];
                    }
                    ?>
                </div>

                <div class="fixed-bottom ">
                    <div class="d-flex justify-content-start align-items-center ml-4 mb-2 ">
                        <img src="<?php echo base_url ('theme/assets/img/sidebar/powered-by.png'); ?>"  width="80" height="8" >
                        <img src="<?php echo base_url ('theme/assets/img/sidebar/jacobus-logo.png'); ?>" width="100" height="30" class="ml-2">
                    </div>
                </div>

            </div>

            <div class="col main" >
                <div class="row justify-content-center">
                    <div class="col-md-9 bg-white">


