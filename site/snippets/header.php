<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <?php echo css('assets/styles/styles.css') ?>
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  
  <script type="text/javascript">
	  $(document).ready(function() {
	    $('body').addClass('js');
	    var $menu = $('#menu'),
	      $menulink = $('.menu-link');
	    
	  $menulink.click(function() {
	    $menulink.toggleClass('active');
	    $menu.toggleClass('active');
	    return false;
	  });});
  </script>
  

</head>

<body>

  <header>
    <h1 class="logo"><a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logo.png') ?>" width="115" height="41" alt="<?php echo html($site->title()) ?>" /></a></h1>
  </header>
  
  <section class="wrapper">