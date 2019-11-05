<aside>
<?php
    //Verificando se existe sidebar
    if(is_active_sidebar('gb_sidebar')) {
        dynamic_sidebar('gb_sidebar');
    }
?>
</aside>