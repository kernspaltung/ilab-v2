
<?php
// $args_social = cpt('social');
$args_social = array(
  'post_type' => 'social',
  'orderby' => 'ID',
	'order'   => 'ASC',
  'posts_per_page' => 6, //maximo 6 redes
);
// $args_social = array('p' => $id, 'post_type' => 'social');

$query_social = new WP_Query( $args_social );

if ( $query_social->have_posts() ) :
  while ( $query_social->have_posts() ) : $query_social->the_post();

?>

  <div class="columns small-2 p-l-0 p-r-0 h-a end v-center">

    <div class="columns p-0 h-a text-center">

      <a class="columns p-0 font-s font-sm-m" href="<?php get_post_meta(get_the_ID(),"social-link",true);?>" target="_blank">

        <!-- <i class="fa fa-<?php //echo $redes[$i];?>"></i> -->
        <i class="fa fa-<?php echo get_post_meta(get_the_ID(),"social-icono",true);?>"></i>



      </a>

    </div>

  </div>


  <?php
endwhile;
endif;

?>
