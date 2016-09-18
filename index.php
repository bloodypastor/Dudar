<!DOCTYPE html>
<html lang="en">
<head>
<?php
    $title = "Новини";
    require_once "blocks/head.php"
?>

</head>
<body>
 <?php  require_once "blocks/header.php" ?>
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
<?php require_once "blocks/right_bar.php" ?>
</div>
<?php require_once "blocks/footer.php" ?>
</body>
</html>
