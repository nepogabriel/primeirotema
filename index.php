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

            <!-- Data, Autor e Categorias -->
            <p>
              <?php echo get_the_date(); ?> | 
              <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ) ?>"><?php the_author(); ?></a> | 
              <?php the_category(', '); ?>
            </p>
            
            <!-- Exibir resumo do post -->
            <p>
              <?php the_excerpt(); ?>
            </p>

            <!-- Comentários / leia mais -->
            <p>
              <?php comments_number('0 comentários', '1 comentário', '% comentários'); ?> | 
              <a href="<?php the_permalink(); ?>">LEIA MAIS</a>
            </p>

          </article>

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