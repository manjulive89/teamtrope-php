<!-- start headers -->
<?php if (is_category()) { ?>
<h3 class="headerpad"><?php printf( __( 'You are browsing the archive for %1$s.', 'studio' ), wp_title( false, false ) ); ?></h3>
<?php } else if (is_tag()) { ?>
<h3 class="headerpad"><?php printf( __( 'You are browsing the archive for %1$s.', 'studio' ), wp_title( false, false ) ); ?></h3>
<?php } else if (is_archive()) { ?>
<h3 class="headerpad"><?php printf( __( 'You are browsing the archive for %1$s.', 'studio' ), wp_title( false, false ) ); ?></h3>
<?php } else if (is_single()) { ?>
<?php } else if (is_search()) { ?>
<h3 class="headerpad"><?php _e( 'Search Results', 'studio' ); ?></h3>
<?php } else {?>
<h3 class="headerpad"><?php _e( 'Blog', 'studio' ); ?></h3>
<?php } ?>
<!-- end headers -->