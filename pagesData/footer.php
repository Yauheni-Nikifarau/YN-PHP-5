<?php
$path = (file_exists('./pagesData/data.php') ? './pagesData/data.php' : '../pagesData/data.php');
require_once $path;
?>
        <footer class="footer">
            <div class="wrapper">
                <section class="footer-section">
                    <h3 class="footer-section-title">Contact Us</h3>
                    <p class="footer-section-item footer-place">55 Main St.Toronto, ON M1H 3A5</p>
                    <p class="footer-section-item footer-phone">(416) 555-5252</p>
                    <p class="footer-section-item footer-mail">hello@treehouse.com</p>
                </section>
                <section class="footer-section">
                    <h3 class="footer-section-title">Latests Posts</h3>
                    <?php foreach ($arBlog as $postId => $postData) : ?>
                        <p class="footer-section-item footer-new"><a href="<?= file_exists('./blog/index.php') ? "./blog/index.php?blogId={$postId}" : "../blog/index.php?blogId={$postId}"; ?>"><?= $postData['title']; ?></a></p>
                    <?php endforeach; ?>
                </section>
                <section class="footer-section">
                    <h3 class="footer-section-title">Latests Tweets</h3>
                    <p class="footer-section-item footer-tweet">Confucius: Life is really simple, but we insist on making it 
                        complicated.<br /> 
                        #famousquotes<br />
                        8 mins ago
                        </p>
                    <p class="footer-section-item footer-tweet">Grab the Free Treehouse web template at FreebiesXpress!<br /> 
                        #freebies #templates<br />
                        2 days ago
                        </p>
                </section>
            </div>
        </footer>
        <section class="socials-section">
            <div class="wrapper">
                <p class="socials-copyrigth">&#169; Copyright 2014 FreebiesXpress.com</p>
                <div class="socials">
                    <a href="#" class="social social-twitter"></a>
                    <a href="#" class="social social-facebook"></a>
                    <a href="#" class="social social-pinterest"></a>
                    <a href="#" class="social social-gplus"></a>
                </div>
            </div>
        </section>
    </div>
    
</body>
</html>