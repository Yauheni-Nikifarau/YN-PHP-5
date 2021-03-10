<?php require_once '../pagesData/header.php'; ?>
    <section class="content">
        <div class="wrapper">
            <h1 class="content-title">Contact us</h1>
            <form action="./sendForm.php" method="GET" class="contact-form">
                <input type="text" name="name" placeholder="Имя">
                <input type="text" name="phone" placeholder="Телефон">
                <input type="text" name="email" placeholder="Email">
                <textarea name="message" cols="30" rows="10"  placeholder="Текст сообщения"></textarea>
                <button>Отправить</button>
            </form>
        </div>
    </section>

<?php require_once '../pagesData/footer.php'; ?>