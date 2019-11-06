<?php get_header(); ?>
  
  <section>
    <div class="container">
      
      <!-- Verificar se tem posts -->
      <?php if(have_posts()): ?>
        <?php while(have_posts()): ?>
          <?php the_post(); ?>

          <!-- Estrutura do post -->
          <article>

            <!-- Miniatura do post (imagem) -->
            <?php if(has_post_thumbnail()): ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('large', array('class' => 'post_miniatura')); ?>
              </a>
            <?php endif; ?>
            
            <!-- Título do post -->
            <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>

          </article>

        <?php endwhile; ?>
      <?php endif; ?>

    </div>

    <?php get_sidebar(); ?>

    <div style="clear:both"></div>
  </section>

<?php get_footer(); ?>