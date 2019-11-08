<!-- Arquivo onde está a estrutura que irá aparecer como posts relacionados.  -->
          <!-- Estrutura do post -->
          <div class="post_related_item">

            <!-- Miniatura do post (imagem) -->
            <?php if(has_post_thumbnail()): ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('large', array('class' => 'post_miniatura')); ?>
              </a>
            <?php endif; ?>
            
            <!-- Título do post -->
            <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>

            <!-- Comentários / leia mais -->
            <p>
              <?php comments_number('0 comentários', '1 comentário', '% comentários'); ?><br>

              <a href="<?php the_permalink(); ?>">LEIA MAIS</a>
            </p>

          </div>