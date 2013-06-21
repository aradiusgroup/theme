<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <!-->

<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="content-language" content="<?php bloginfo('language'); ?>">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <meta name="copyright" content="Copyright <?php bloginfo('name');?> <?php echo date('Y');?>. All Rights Reserved.">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php echo wp_title();?></title>
    <?php wp_head();?>
</head>

<body <?php body_class(); ?>>
<!--[if lt IE 9]><p class="chromeframe">You are using an outdated browser. Upgrade your browser today or install Google Chrome Frame to better experience this site.</p><![endif]-->