<div class="post-item">
  <h2 class="headline headline--medium headline--post-title"><a
      href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

  <div class="generic-content">
    <?php the_excerpt(); ?>
    <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>

    <hr>
    <?php
    $skyColorValue = sanitize_text_field(get_query_var('skyColor'));
    $grassColorValue = sanitize_text_field(get_query_var('grassColor'));

    if (get_query_var('skyColor') == 'blue' and $grassColorValue == 'green') {
      echo '<p>The sky is blue today and the grrass is green..</p>';
    }

    ?>

    <form method="get">
      <input type="text" name="skyColor" placeholder="Sky Color">
      <input type="text" name="grassColor" placeholder="Grass Color">
      <button>Submit</button>
    </form>

  </div>

</div>