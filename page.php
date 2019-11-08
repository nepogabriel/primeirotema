<?php get_header(); ?>
  
  <section>
    <div class="container">
      
        <!-- Verificar se tem conteúdo na pág. -->
        <?php while(have_posts()): ?>
          <?php the_post(); ?>

          <!-- Estrutura do post -->
          <article>

            <!-- Título do post -->
            <h2> <?php the_title(); ?> </h2>
            
            <!-- Exibir conteúdo do post -->
            <p>
              <?php the_content(); ?>
            </p>

            

            <!-- Verificando se sem comentários -->
            <?php 
              if( comments_open() ) {
                ?>
                <hr>
                <!-- Comentários -->
                <p>
                    <?php comments_number('0 comentários', '1 comentário', '% comentários'); ?>
                </p>
                <?php
                comments_template();
              }
            ?>

          </article>

        <?php endwhile; ?>

    </div>

    <?php get_sidebar(); ?>

    <div style="clear:both"></div>
  </section>

<?php get_footer(); ?>