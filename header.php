<?php
// header TEMPLATEPATH


?>
<!DOCTYPE html>
<html lang="<?php language_attributes();"?>
<>
    <meta charset="<?php bloginfo(' chaeset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
<body <?php body_class(); ?>>
<?php wp_body_open();?>

<?php 
if(function_exists('wp_body_open')){
wp_body_open();
}

?>

<div id="page" class="site">
<header id="masthead" class="site-header" role="banner">
  <?php get_template_part('template-parts/header/nav.php'); ?>
</header>
<div id="content" class="site-content">

