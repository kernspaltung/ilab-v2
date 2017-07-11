<?php

/*
Template Name: Search Page
*/

get_header();

global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

if( strlen($query_string) > 0 ) {
	foreach($query_args as $key => $string) {
		$query_split = explode("=", $string);
		$search_query[$query_split[0]] = urldecode($query_split[1]);
	} // foreach
} //if

$search = new WP_Query($search_query);
?>

<section id="content" class="content columns small-12 medium-8 large-9">

  <div class="columns p-t-1">



<?php get_search_form(); ?>



  </div>

</section>

<?php get_footer();
