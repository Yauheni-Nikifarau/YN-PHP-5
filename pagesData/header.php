<?php
define('PATH',$_SERVER['DOCUMENT_ROOT']);
require_once PATH.'/pagesData/data.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Document'; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@400;700" rel="stylesheet">
    <link rel="stylesheet" href="<?= '/css/style.css'; ?>">
</head>
<body>
    <div class="site">
        <header class="header">
            <div class="wrapper">
                <img src="<?= '/img/leaf.png'; ?>" alt="logo" class="header-logo">
                <input type="checkbox" id="toggle">
                <label for="toggle" class="toggle">Menu</label>
                <nav class="header-navigation">
                    <ul class="header-list">

                        <?php foreach ($arMenu as $name => $link) : ?>
                        <li class="header-list-item"><a href="<?= $link; ?>" class="header-navigation-link"><?= $name; ?></a>
                            <?php if ($name == 'Blog') : ?>
                            <ul>
                                <?php foreach ($arBlog as $postId => $postData) : ?>
                                <li><a href="<?= "{$link}?blogId={$postId}"; ?>" class="header-navigation-link"><?= $postData['title']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                       <?php endforeach; ?>

                    </ul>
                </nav>
            </div>
        </header>