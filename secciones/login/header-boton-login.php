<div class="columns p-0-1">

  <div class="button columns h-a p-0-1 text-center color-blanco font-xs font-sm-s font-lg-m">

    <?php
    if ( is_user_logged_in() ) {
      // echo "Logout";
      wp_loginout(home_url());
    } else {
      echo "Login";
    }
    ?>

  </div>

</div>
