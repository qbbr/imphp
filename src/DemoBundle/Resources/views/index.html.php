<? $title = 'index page' ?>

<? ob_start() ?>

<b>world</b>

<? $content = ob_get_clean() ?>


<? require 'layout.html.php' ?>
