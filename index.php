<?php
/*
* This template for displaying the header
*/
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header_area" class="<?php echo get_theme_mod('sadiky_menu_position'); ?>">
  <div id="header_area">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
        <a href=""><img src="<?php echo get_theme_mod('flora_logo'); ?>" alt="sfsdf"></a>
        </div>
        <div class="col-md-9">
           <ul class="nav">
            <li><a href="">Home</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="">Solution</a></li>
            <li><a href="">Projects</a></li>
            <li><a href="">Contact Us</a></li>
           </ul>

        </div>
      </div>
    </div>
  </div>



  <?php wp_footer(); ?>
</body>
</html>