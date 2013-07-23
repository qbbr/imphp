<!doctype html>
<html>
    <head>
        <title><?= isset($title) ? $title : 'default title' ?></title>
    </head>
    <body>
        <?= isset($content) ? $content : 'default content' ?>
    </body>
</html>