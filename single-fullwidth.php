<?php
/*
Template Name: Post s/ Sidebar
Template Post Type: post
*/
?>
<?php get_header(); ?>
  
  <section>
    <div class="container fullwidth">
      
      <!-- Verificar se tem posts -->
      <?php if(have_posts()): ?>
        <?php while(have_posts()): ?>
          <?php the_post(); ?>

          <!-- Estrutura do post -->
          <article>

            <!-- Título do post -->
            <h2> <?php the_title(); ?> </h2>

            <!-- Imagem do post -->
            <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('large'); ?>
              </a>
            <?php endif; ?>

            <!-- Data, Autor e Categorias -->
            <p>
              <?php echo get_the_date(); ?> | 
              <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ) ?>"><?php the_author(); ?></a> | 
              <?php the_category(', '); ?>
            </p>
            
            <!-- Exibir conteúdo do post -->
            <p>
              <?php the_content(); ?>
            </p>

            <!-- Anterior e Próximo Post -->
            <div class="paginacao">
              <div class="pagina_anterior">
                <?php previous_post_link(); ?>
              </div>

              <div class="proxima_pagina">
                <?php next_post_link() ?>
              </div>
            </div>

            <br><br><hr>

            <!-- Comentários -->
            <p>
              <?php comments_number('0 comentários', '1 comentário', '% comentários'); ?>
            </p>

            <!-- Verificando se sem comentários -->
            <?php 
              if( comments_open() ) {
                comments_template();
              }
            ?>

          </article>

        <?php endwhile; ?>
      <?php endif; ?>

    </div>

    <div style="clear:both"></div>
  </section>

<?php get_footer(); ?>