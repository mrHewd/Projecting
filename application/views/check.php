<html>
<head>
    <meta charset="UTF-8">
    <title>Книжный интернет-магазин</title>
    <body>
    <?php
        try {
            include 'C://xampp/htdocs/BookShop/application/controllers/check.php';
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    ?>
    <br>
    <a>
        <div class="getemail-main-left-btn-outer">
            <button onclick="location.href='http://localhost/BookShop';">Обратно на сайт</button>
        </div>
    </a>
</body>
</html>