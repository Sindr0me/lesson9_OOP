<?php
class Cnews{

private $title;
private $text;
private $author;
    public function getNews()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            echo $this->title=$_POST["title"];

        }
    }

    public function getNews2()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            echo $this->text=$_POST["text"];

        }
    }

    public function getNews3()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            echo $this->author=$_POST["author"];

        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Добавление новости</title>
    <meta charset="utf-8">
    <style type="text/css">
        .news1 {
            border: 1px solid black;
        }

        .main {
            padding: 20px;
            font-size: 20px;
        }
        .author {
            margin-top: 20px;
            font-size: 12px;
        }
    </style>
</head> 

<body>
    <h1>Добавить новость</h1>
    <hr />

    <form method="POST" action="add.php">
        <h3>Название новости</h3>
        <input type="text" name="title">
        <h3>Текст новости</h3>
        <textarea name="text" cols="40" rows="10"></textarea>
        <h3>Автор новости</h3>
        <input type="text" name="author">
        <br />
        <br />
        <button type="submit" name="add">Добавить новость</button>
</form>
</br>
<div class="news1">
    
        <?php
            $news = new Cnews();
        ?>

        <h1><?= $news->getNews();?></h1>
        <p class="main"><em><?=$news->getNews2();?></em></p>
        <p class="author">Автор: <?=$news->getNews3();?></p>
</div>
</body>
</html>