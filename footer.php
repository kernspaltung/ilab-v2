
<aside id="sidebar-sticky" class="columns small-12 large-3 p-1 h-100-v">

  <?php get_template_part('sidebar'); ?>

</aside>



</main><!-- fin main -->




<footer id="footer" class="columns p-0 color-claro-bg">

  <div class="columns small-12 h-a h-md-15-v v-center">

    <div class="menu-pagina p-0 columns text-center">

      <?php
      menu_paginas('menu-footer', 'menu-footer' );
      ?>

    </div>

    <hr>

</div>


<?php
get_template_part('secciones/general/footer-widgets');
?>


</footer>

<?php wp_footer(); ?>


</body>
</html>
