<?php
//Verificando se o post tem senha p/ ñ exibir os comentários
if(post_password_required()) {
    return;
}

//Verificando se existe comentários
if(have_comments()) {

    //Dados de quem comentou
    foreach($comments as $comments) {
        ?>
        
        <!-- Formatação dos comentários -->
        <div class="comentario">

            <!-- Foto de quem comentou -->
            <div class="comentario_foto">
                <?php echo get_avatar($comment, 60); ?>
            </div>

            <div class="comentario_area">
                <!-- Nome e data -->
                <strong><?php comment_author(); ?></strong> - <?php comment_date(); ?><br>
                <!-- Texto do comentário -->
                <?php comment_text(); ?>
            </div>

        </div>

        <?php
    }

     the_comments_pagination();

}

//Formulario de comentários
comment_form(array(
    'comment_field' => 'Seu comentário:<br><textarea name="comment"></textarea><br>',
    'fields' => array(
        'author' => 'Nome:<br><input type="text" name="author"><br>',
        'email' => 'E-mail:<br><input type="email" name="email"><br>',
        'url' => 'Site:<br><input type="text" name="url">'
    ),

    'class_submit' => 'botao', //classe do botão
    'label_submit' => 'Envie seu comentário', //mudar texto do botão
    'title_reply' => 'Deixe um comentário'
));

?>