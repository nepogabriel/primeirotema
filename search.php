<?php get_header(); ?>
  
  <section>
    <div class="container">

    <h1>Você pesquicou por: <?php echo get_search_query(); ?></h1>
      
      <!-- Verificar se tem posts -->
      <?php if(have_posts()): ?>
        <?php while(have_posts()): ?>
          <?php the_post(); ?>

            <!-- Chamar arquivo post.php (onde está a estrutura dos posts) -->
            <?php get_template_part('template_parts/post'); ?>

        <?php endwhile; ?>
      <?php endif; ?>


      <!-- Páginação -->
      <div class="paginacao">
        <div class="pagina_anterior">
          <?php previous_posts_link('< Página Anterior'); ?>
        </div>

        <div class="proxima_pagina">
          <?php next_posts_link('Próxima Página >') ?>
        </div>
      </div>

    </div>

    <?php get_sidebar(); ?>

    <div style="clear:both"></div>
  </section>

<?php get_footer(); ?>