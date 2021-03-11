<?php require_once '../pagesData/header.php'; ?>
    <section class="content">
        <div class="wrapper">
            <h1 class="content-title">Contact us</h1>
            <form enctype="multipart/form-data" action="./sendForm.php" method="POST" class="contact-form">
                <input type="text" name="name" placeholder="Имя">
                <input type="text" name="phone" placeholder="Телефон">
                <input type="text" name="email" placeholder="Email">
                <textarea name="message" cols="30" rows="10"  placeholder="Текст сообщения"></textarea>
                <input type="file" name="file">
                <p>Внимание, реализована отправка файла на указанный e-mail.</p>
                <button>Отправить</button>
            </form>
        </div>
    </section>

<?php require_once '../pagesData/footer.php'; ?>