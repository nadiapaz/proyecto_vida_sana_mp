<?php get_header(); ?>

<h1>Vida sana Zumba fitness <i class="fas fa-apple-alt fa-lg fa-pulse ir-arriba"></i></h1> 

<!-- Video-->
<div class="container">
  <section class="embed-responsive embed-responsive-16by9 video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/BlH_soiYbnk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <div class="video__inner">
    </div>
  </section>
</div>
  <h2> <i class="fas fa-walking"></i> Información vida Sana</h2>

<!-- comienza el header-->
<section class="section1">
    <div class="card-deck col-lg-12 col-md-12 col-sm-12">
        <?php 
            $arg = array(
              'post_type' => 'noticia',
              'post_per_page' => 10,
              //'post_not_in' => array($post->ID),
              'paged' =>$paged
            );
            $get_arg = new WP_Query( $arg );
            while ( $get_arg->have_posts() ) {
              $get_arg->the_post();
        ?>

  <div class="card">
    <?php the_post_thumbnail('post-custom-size', array('class' => 'img-fluid')); ?>
    
    <div class="card-body">
      <h5 class="card-title"> <?php the_title()?> </h5>
      <p class="card-text">
     <small class="text-muted"> <?php the_field('texto_1')?></small></p>
    </div>
    
  </div>
  <?php } wp_reset_postdata(); ?>

<div class="card">
    <?php 
      $arg = array(
        'post_type' => 'noticia2',
        'post_per_page' => 10,
        //'post_not_in' => array($post->ID),
        'paged' =>$paged
      );
      $get_arg = new WP_Query( $arg );
      while ( $get_arg->have_posts() ) {
        $get_arg->the_post();
      ?>

  <?php the_post_thumbnail('post-custom-size', array('class' => 'img-fluid')); ?>
    
    <div class="card-body">
      <h5 class="card-title"> <?php the_title()?> </h5>
      <p class="card-text">
     <small class="text-muted"> <?php the_field('noticia2')?></small></p>
    </div>
  </div>
  <?php } wp_reset_postdata(); ?>



  <div class="card">
    <?php 
      $arg = array(
        'post_type' => 'noticia3',
        'post_per_page' => 10,
        //'post_not_in' => array($post->ID),
        'paged' =>$paged
      );
      $get_arg = new WP_Query( $arg );
      while ( $get_arg->have_posts() ) {
        $get_arg->the_post();
      ?>
      <?php the_post_thumbnail('post-custom-size', array('class' => 'img-fluid')); ?>

    
      <div class="card-body">
        <h5 class="card-title"></h5>
          <p class="card-text"><small class="text-muted">#NUTRIRECETAS: Sopaipillas Saludables Preparemos está deliciosa receta saludable Revisa la receta aquí<br> 👉🏼
          <a class="btn btn-success" href="https://www.saludquilicura.cl/sopaipillassaludables" target="_blank" role="button">Leer más</a>
          </small></p>
      </div>
  </div>

<?php } wp_reset_postdata(); ?>
</div>

</section>

<!-- Comienza el Blog-->

<h3> Tips de alimentación <i class="fas fa-utensils"></i></h3>


<div class="container">
<div class="row">
  <div class="col-lg-4 col-md-6 col-sm-12">
    <img class="img-fluid alimentacion" src="<?php echo get_theme_file_uri('/assets/img/alimentacion.jpg') ?>"></div>
  <div class="col-lg-4 col-md-6 col-sm-12 blog_alimentacion">  
  <p>¿cual es la dieta perfecta o la más indicada?, lo cierto es que existen personas que tienen una salud y un físico a gran nivel  💪 que siguen dietas de lo más variadas. No existe la dieta perfecta 🍅 🌽.
<a class="btn btn-warning" href="https://www.yogateca.com/los-secretos-la-alimentacion-saludable/" role="button">Leer más</a></p></div>

</div>
</div>

<h4> Calidad del aire <i class="fas fa-cloud"></i></h4>


<div class="container">
<div class="row">
  <div class="col-lg-4 col-md-6 col-sm-12">
    <img class="img-fluid aire" src="<?php echo get_theme_file_uri('/assets/img/chile.jpg') ?>"></div>
  <div class="col-lg-4 col-md-6 col-sm-12 blog_aire">
<p>Se recomienda en días de preemergencia y emergencia ambiental el uso de mascarillas en adultos mayores, niños, embarazadas y enfermos crónicos.<br>
Prefiera el transporte público y/o comparta su auto.<br>
No fume al interior de su casa, lugar de trabajo o estudio.<br>
<a class="btn btn-warning" href="http://airechile.mma.gob.cl/" role="button">Leer más</a>
</p>

</div>
</div>
</div>

<h5> Ejercita en casa <i class="fas fa-home"></i></h5>

<div class="container">
<div class="row">
  <div class="col-lg-4 col-md-6 col-sm-12 blog_ejercita"> <p>
    Sólo hay que organizar el tiempo y el espacio para hacer actividad física en el hogar. “Se pueden hacer distintos tipos de ejercicios sin necesidad de ir a un gimnasio, todo depende de las necesidades de cada persona, para adelgazar.<br>
<a class="btn btn-danger" href="http://www.novedadesvidaintegra.cl/noticia.php?id_noticia=179" role="button">Leer más</a>
  </p>
    </div>
  <div class="col-lg-4 col-md-6 col-sm-12"> 
<img class="features__img img-fluid" src="<?php echo get_theme_file_uri('/assets/img/en-casa.jpg') ?>"></div>
</div>
</div>

<h6> Recreos saludables <i class="fas fa-child"></i></h6>
<div class="container">
<div class="row">
  <div class="col-lg-4 col-md-6 col-sm-12"> 
    <img class="activo img-fluid" src="<?php echo get_theme_file_uri('/assets/img/recreo1.png') ?>"></div>
  <div class="col-lg-4 col-md-6 col-sm-12"> <p>
    Hoy en día es muy común ver a los niños embobados frente a sus celulares, tablets o aparatos electrónicos durante los recreos, dejando atrás las pausas donde jugaban al luche, el elástico o la pinta.<br>
<a class="btn btn-danger" href="http://ww2.educarchile.cl/UserFiles/P0001/Image/pasionxliderar/2011/pdf/competencia11/C11_AC1_R2_ejemplo.pdf" role="button">Leer más</a></p>
    </div>
</div>
</div>

<div class="container">
<p>Es importante calcular tu índice de masa corporal, solo necesitas tu talla y peso pincha el siguiente link y sigue los pasos ✅ ✅</p>
</div>

<!--calcula tu imc-->
<div class="container">
<p class="features_imc"> Calcula tu IMC <a class="btn btn-light" href="https://www.yazio.com/es/calculadora-imc" role="button" target="_blank">Link</a></p>
</div>

<div class="container">
<p style="text-align: center;">Para más información dirigete a la sección contacto o pincha en el siguiente botón<div class="footer-copyright text-center py-3">
<a class="btn btn-primary" href="contacto" role="button">Sección Contacto</a>
  </div></p>
</div>

<!--boton ir arriba-->

<?php get_footer(); ?>