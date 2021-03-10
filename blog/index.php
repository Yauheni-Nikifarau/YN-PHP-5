<?php require_once '../pagesData/header.php'; 
require_once '../pagesData/data.php';?>
<section class="content">
    <div class="wrapper">
    
        <h1 class="content-title">blog</h1>

        <?php if (empty($_GET) || !isset($_GET['blogId'])) :

            foreach ($arBlog as $id => $data) :?>

                <div class="blog-new">
                    <h3 class="blog-new-title"><a href="./?blogId=<?= $id; ?>"><?= $data['title']; ?></a></h3>
                    <p class="blog-new-text"><?= $data['text']; ?></p>
                </div>

            <?php endforeach;

        else:

            $key = $_GET['blogId'];?>
            <div class="blog-new">
                <h3 class="blog-new-title"><?= $arBlog[$key]['title'];?></h3>
                <p class="blog-new-text"><?= $arBlog[$key]['text'];?></p>
            </div>

        <?php endif; ?>

    </div>
</section>
<?php require_once '../pagesData/footer.php'; ?>