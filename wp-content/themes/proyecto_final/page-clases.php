<?php get_header(); ?>
<!-- Template Name:Clases -->
<h1>Horario de clases Zumba fitness</h1>
<div class="container">

<p>¡¡¡inscribete y participa!!!</p>
<div class="accordion" id="accordionExample">
  <?php 
        if ( have_posts() ) :
          while ( have_posts() ) : the_post(); ?>
  <div class="card">

    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <?php the_field('titulo') ?>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <?php the_content() ?>

      </div>
    </div>
  </div>
<?php endwhile; else: ?>
<h1> no encontro nada</h1>
<?php endif; ?>

  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          SEDE VILLA MARGARITA
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Horarios y lugares establecidos.<br> Recibe evaluaciones de salud y talleres de alimentación.<br>
        JUEVES - 20:00 a 21:00 horas<br>
        VIERNES - 18:00 a 19:00 horas<br>
        LUGAR - Crepúsculo con mediodía
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          CANCHA LOS JARDÍNES
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Horarios y lugares establecidos.<br> Recibe evaluaciones de salud y talleres de alimentación.<br>
        VIERNES - 19:30 a 20:30 horas<br>
        SÁBADO - 11:00 a 12:00 horas<br>
        LUGAR - Lo marcoleta con rio de la plata.

      </div>
    </div>
  </div>
</div>
</div>

<div class="container col-lg-4 col-md-6 col-sm-2">
<img src="<?php echo get_theme_file_uri('/assets/img/zumbahorarios.jpg') ?>" alt="" class="img-fluid ">
</div>


<?php get_footer(); ?>