<?php get_header(); ?>
  
  <section>
    <div class="container">
      
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
            
            <!-- Requisição secundária p/ mostrar os posts relacionados -->
            <h3>Posts Relacionados:</h3>
            <?php
              $categories = get_the_category(); //buscando categorias do post (é um array)

              $gp_query = new WP_Query(array(
                'posts_per_page' => 3, //quantidade de posts
                'post__not_in' => array( $post->ID ), //p/ não mostrar o post que está aberto
                'cat' => $categories[0]->term_id //pegando primeira categoria do post
              ));
              
              //Verificando se tem posts relacionados
              if($gp_query->have_posts()) {
                while($gp_query->have_posts()) {
                  $gp_query->the_post();
                  get_template_part('template_parts/related_post'); //Chamando arquivo related_post
                }

                //reseta e volta com requisições principais (por exemplo, p/ mostrar comentários e paginação)
                wp_reset_postdata();
              }
            ?>

            <div style="clear:both"></div>

            <hr class="linha">

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

    <?php get_sidebar(); ?>

    <div style="clear:both"></div>
  </section>

<?php get_footer(); ?>