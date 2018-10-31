<!-- Footer -->

<footer class="page-footer font-small teal pt-4">

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold"></h5>
          <p>"Quilicura avanza con más ganas"
            <i class="fas fa-walking fa-lg"></i><br>
            © 2018 Nadia Valderrama // MP Quilicura
          </p>
      <?php echo get_template_part('template_part/map') ?>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-6 mb-md-0 mb-3">

          <!-- Content -->
    <h5 class="text-uppercase font-weight-bold"></h5>
    <p>"Proyecto página web mujeres programadoras Quilicura"
        
    <img src="<?php echo get_theme_file_uri('/assets/img/logo-quilicura.jpg') ?>" alt="" class="img-fluid">
    </p>
    <p>
      <i class="fab fa-twitter fa-2x"></i> 
      <i class="fab fa-facebook fa-2x"></i>
      <i class="fab fa-instagram fa-2x"></i>
    </p>

    </div>

      </div>
      <!-- Grid row -->

    </div>
  </footer>



<?php wp_footer() ?>

</body>
</html>