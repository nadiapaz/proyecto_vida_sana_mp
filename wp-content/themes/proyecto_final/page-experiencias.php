<?php get_header(); ?>
<!-- Template Name:experiencias -->
<h1>Testimonios <i class="fas fa-comment fa-pulse"></i></h1>
<!--Section: Testimonials v.1-->
<div class="container">
<section class="section pb-3 text-center">
    <!--Section description-->
    <p class="section-description"></p>

    <div class="row">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

            <!--Card-->
            <div class="card testimonial-card ">

                <!--Background color-->
                <div class="card-up teal lighten-2">
                </div>

                <!--Avatar-->
                <div class="avatar mx-auto white"><img src="<?php echo get_theme_file_uri('/assets/img/isabel.jpg') ?>" class="img-fluid">
                </div>

                <div class="card-body">
                    <!--Name-->
                    <h4 class="card-title mt-1">Isabel</h4>
                    <hr>
                    <!--Quotation-->
                    <p><i class="fa fa-quote-left"></i>Es divertido participar de las clases, sentir el entusiasmo del grupo y la energía del instructor.</p>
                </div>

            </div>
            <!--Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

            <!--Card-->
            <div class="card testimonial-card">

                <!--Background color-->
                <div class="card-up blue lighten-2">
                </div>

                <!--Avatar-->
                

                <div class="avatar mx-auto white"><img src="<?php echo get_theme_file_uri('/assets/img/fabiola.jpg') ?>"  class="img-fluid">
                </div>

                <div class="card-body">
                    <!--Name-->
                    <h4 class="card-title mt-1">Fabiola</h4>
                    <hr>
                    <!--Quotation-->
                    <p><i class="fa fa-quote-left"></i> Gracias a Zumba fitness pude cambiar mi estilo de vida a través del ritmo de la música.</p>
                </div>

            </div>
            <!--Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

            <!--Card-->
            <div class="card testimonial-card">

                <!--Background color-->
                <div class="card-up deep-purple lighten-2"></div>

                <!--Avatar-->
                
                <div class="avatar mx-auto white"><img src="<?php echo get_theme_file_uri('/assets/img/nadia.png') ?>" alt="avatar mx-auto white"  class="img-fluid">
                </div>

                <div class="card-body">
                    <!--Name-->
                    <h4 class="card-title mt-1">Nadia</h4>
                    <hr>
                    <!--Quotation-->
                    <p><i class="fa fa-quote-left"></i> Son de lo más divertidas las coreografías, una hora que disfruto al máximo y doy mi mejor esfuerzo.</p>
                </div>

            </div>
            <!--Card-->

        </div>
        <!--Grid column-->

    </div>

</section>
</div>
<!--Section: Testimonials v.1-->


<div class="row p-5">
<?php 
        if ( have_posts() ) :
          while ( have_posts() ) : the_post(); ?>


<div class="append"> <?php the_content() ?></div>
<div class="prepend"> <?php the_field('prepend') ?></div>
<?php endwhile; else: ?>
<h1> no encontro nada</h1>
<?php endif; ?>
</div>

<!-- implemenacion de sidebar-->

<div id="%1$s" class="widget %2$s mt-4 container col-lg-4">
  <?php get_sidebar() ?>  
</div>
<?php get_footer(); ?>