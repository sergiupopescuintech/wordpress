<!DOCTYPE html>
<html>
<head>
  <title>- Caroll Center - Our Founder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <?php wp_head(); ?>

</head>
<body>
<div class="meniutelefon">
  <p class="cuvantmeniutelefon" onclick="myFunction()" >MENU</p>
</div>
<script>
  function myFunction(){

    if(document.getElementById("navbar").style.display=="")
      document.getElementById("navbar").style.display="block";
    else
      document.getElementById("navbar").style.display="";
  }
</script>
<div class="container-fluid container1">
  <div class=" container2">
    <nav id="navbar">
        <?php
        $args = array( 'theme_location' => 'primary');
        ?>
        <?php wp_nav_menu( $args);?>
    </nav>
  </div>
</div>
<?php $bimg= wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<div class="container3" style="background: url('<?php echo $bimg[0] ?>') no-repeat; background-size: 100% 100%;">
<div class="daneloo">
  <div class="container4">
      <div class="row">
          <div class="col-12" >
            <p class="titlupagina"><?php echo get_post_meta($post->ID, 'TitluPagina', true); ?></p>
          </div>
      </div>
      <div class="row">
          <div class="col-12">
            <img src="http://localhost/test2/wp-content/uploads/2018/08/q2.png" class="q1">
            <p class="citatpagina"><?php echo get_post_meta($post->ID, 'Citat', true); ?></p>
            <img src="http://localhost/test2/wp-content/uploads/2018/08/q1.png" class="q2">
          </div>
      </div>
  </div>
</div>


</div>

<div class="containertext">
