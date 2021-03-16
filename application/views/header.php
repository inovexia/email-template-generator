<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>TELUS</title>
    <link rel="stylesheet" href="<?php echo base_url ('theme/assets/css/pure-min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url ('theme/assets/css/grids-responsive-min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url ('theme/assets/css/toastr.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url ('theme/assets/css/styles.css'); ?>">
</head>
<body>

<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="brand-logo">
            <a href="<?php echo site_url (); ?>">
                <img src="<?php echo base_url ('theme/assets/img/sidebar/set-logo.png'); ?>" width="60" height="22"><br>
                <img src="<?php echo base_url ('theme/assets/img/sidebar/set-text.png'); ?>" width="80" height="10">
            </a>
            <img src="<?php echo base_url ('theme/assets/img/sidebar/telus-logo.png'); ?>" width="120" height="25">
        </div>
        
        <?php echo $apanel; ?>

        <div id="messages"></div>

        <div class="sidebar-footer">
            <div class="footer-img">
                <img src="<?php echo base_url ('theme/assets/img/sidebar/powered-by.png'); ?>"  width="90" height="9" style="margin-top: 16px" >
                <img src="<?php echo base_url ('theme/assets/img/sidebar/jacobus-logo.png'); ?>" width="124" height="44" style="float: right; margin-right: 5px">
            </div>
        </div>
    </div>

    <!-- A wrapper for all the content -->
    <div class="content pure-u-1 pure-u-md-3-4">
        <div>