<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My site</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div id="logo">
        <a href="/" title="Перейти на головну"><span>N</span>ews</a>
    </div>
    <div id="head-menu">
        <a href="/about.php"><div>About us</div></a>
        <a href="/feedback.php"><div>Feedback</div></a>
    </div>
    <div id="registration">
        <a href="/sign.php">Sign up</a> | <a href="/log.php">log in</a>
    </div>
</header>
<div id="wrapper">
    <div id="left-bar">
        <div id="big_article">
            <img src="img/article_1.jpg" alt="Article 1">
            <h2>Article 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque hic impedit
                quaerat. Corporis eaque fugit iure neque obcaecati quibusdam quod reiciendis
                repellendus? Commodi dolorum eius et nulla quam, velit veniam! Cupiditate n
                am odit porro quibusdam. Dolor laudantium pariatur possimus repellat.</p>
            <a href="article.php"><div>More...</div></a>

        </div>

        <div class="clear"><br></div>
        <div class="article">
            <img src="img/article_2.jpg" alt="Article 1">
            <h2>Article 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque hic impedit
                quaerat. Corporis eaque fugit iure neque obcaecati quibusdam quod reiciendis
                repellendus? Commodi dolorum eius et nulla quam, velit veniam! Cupiditate n
                am odit porro quibusdam. Dolor laudantium pariatur possimus repellat.</p>
            <a href="article.php"><div>More...</div></a>
        </div>
        <div class="article">
            <img src="img/article_3.jpg" alt="Article 1">
            <h2>Article 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque hic impedit
                quaerat. Corporis eaque fugit iure neque obcaecati quibusdam quod reiciendis
                repellendus? Commodi dolorum eius et nulla quam, velit veniam! Cupiditate n
                am odit porro quibusdam. Dolor laudantium pariatur possimus repellat.</p>
            <a href="article.php"><div>More...</div></a>
        </div>
    </div>
    <div id="right-bar">
        <div class="banner">
            <img src="img/banner_1.jpg" alt="Banner1">
        </div>
        <div class="banner">
            <img src="img/banner_2.jpg" alt="Banner2">
        </div>
    </div>
</div>
<footer>
    <div id="social">
        <a href="http://vk.com" target="_blank"><img src="img/vk.png" alt="vk"></a>
        <a href="http://facebook.com" target="_blank"><img src="img/fb.png" alt="fb"></a>
        <a href="http://twitter.com" target="_blank"><img src="img/tw.png" alt="tw"></a>
    </div>

    <div id="copyright">All rights reserved &copy; <?=date('Y')?> </div>
</footer>
</body>
</html>
