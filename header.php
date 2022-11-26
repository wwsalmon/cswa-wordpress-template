<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, target-densityDpi=device-dpi' name='viewport'/>
    <title><?php echo wp_get_document_title(); ?></title>
<?php
date_default_timezone_set("America/New_York");
wp_head();
?>

</head>
<body>
<nav>
    <a href="<?php echo get_site_url(); ?>">
        <img class="nav-logo" src="<?php echo get_template_directory_uri() . '/img/logo.png'; ?>">
    </a>
    <a href="<?php echo get_site_url(); ?>" style="color: #222; text-decoration: none">
        <span class="nav-title">CSWA</span>
    </a>
    <a href="<?php echo get_site_url() . "/get-involved"; ?>" class="nav-button">Get involved</a>
</nav>