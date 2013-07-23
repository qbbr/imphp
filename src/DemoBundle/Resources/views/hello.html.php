<? $title = 'hello page' ?>

<? ob_start() ?>

<? if (empty($surname)): ?>
    <h1>hello, <?= $name ?>!</h1>
<? else: ?>
    <h1>hello, <?= $surname ?>  <?= $name ?>!</h1>
<? endif ?>

<? $content = ob_get_clean() ?>


<? require 'layout.html.php' ?>
