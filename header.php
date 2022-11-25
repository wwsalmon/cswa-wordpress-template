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
    <img style="width: 64px; height: 64px;" src="<?php echo get_template_directory_uri() . '/img/logo.png'; ?>">
    <span style="font-weight: 700; font-size: 28px; margin-left: 24px">CSWA</span>
    <a href="" style="display: block; font-size: 20px; color: white; background-color: var(--accent-color); padding: 8px 16px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; margin-left: auto; text-decoration: none">Get involved</a>
</nav>