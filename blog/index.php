<?php require_once '../pagesData/header.php';?>
<section class="content">
    <div class="wrapper">
    
        <h1 class="content-title">blog</h1>

        <?php if (!isset($_GET['blogId'])) :

            foreach ($arBlog as $id => $data) :?>

                <div class="blog-new">
                    <h3 class="blog-new-title"><a href="./?blogId=<?= $id; ?>"><?= $data['title']; ?></a></h3>
                    <p class="blog-new-text"><?= $data['text']; ?></p>
                </div>

            <?php endforeach;

        elseif (array_key_exists($_GET['blogId'], $arBlog)):

            $post = $arBlog[$_GET['blogId']];?>
            <div class="blog-new">
                <h3 class="blog-new-title"><?= $post['title'];?></h3>
                <p class="blog-new-text"><?= $post['text'];?></p>
            </div>

        <?php else: ?>

            <div class="blog-new">
                <h3 class="blog-new-title">Страница не найдена</h3>
                <p class="blog-new-text"><a href="./">Вернуться назад.</a> </p>
            </div>

        <?php endif; ?>

    </div>
</section>
<?php require_once '../pagesData/footer.php'; ?>