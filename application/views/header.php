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
            <span>                
                <img src="<?php echo base_url ('theme/assets/img/sidebar/set-logo.png'); ?>" width="70" height="25">
                <img src="<?php echo base_url ('theme/assets/img/sidebar/set-text.png'); ?>" width="100" height="12">
            </span>
            <img src="<?php echo base_url ('theme/assets/img/sidebar/telus-logo.png'); ?>" width="150" height="30">
        </div>

        <?php echo $apanel; ?>

        <div id="messages"></div>

        <div class="sidebar-footer">
            <img src="<?php echo base_url ('theme/assets/img/sidebar/powered-by.png'); ?>"  width="80" height="6">
            <img src="<?php echo base_url ('theme/assets/img/sidebar/jacobus-logo.png'); ?>" width="80" height="20">
        </div>
    </div>

    <!-- A wrapper for all the content -->
    <div class="content pure-u-1 pure-u-md-3-4">
        <div>