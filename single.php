



<?php get_template_part('templates/content-single', get_post_type()); ?>



<?php if (get_post_type() === "forever"): ?>


<?php get_template_part('templates/content-forever', get_post_type("forever")); ?>


<?php endif; ?>
