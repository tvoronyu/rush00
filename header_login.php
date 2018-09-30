<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rush00</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="header"  style="background: linear-gradient(#55a7ff 30%, #d920ff 70%)">
    <div class ="header-main">
        <div class = "left-part_logo">
            <a href="#">Store</a>
        </div>
        <div class="right-part">
            <div class ="nav_menu">
                <ul>
                    <li><a href="">Logout</a></li>
                    <li><a href="index.php"><?php var_dump($_POST);
                            ?></a></li>
                    <li><a href="">Basket</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="main">
    <div class="content">
        <div class="category">
            <div class="filtr_category">
                <ul class="input_cptegory">
                    <li><h2>GOODS</h2></li>
                    <li><input type="checkbox" name="goods" value="t-shirst">Футболки</li>
                    <li><input type="checkbox" name="goods" value="">Обувь</li>
                    <li><input type="checkbox" name="goods" value="">Джинсы</li>
                    <li><input type="checkbox" name="goods" value="">Аксессуары</li>
                </ul>
            </div>
        </div>
        <div class="content-category">
            <table id="mini_gallery">
                <tr>
                    <td class="img">
                        <div class="img_goods">
                            <a href=""><img src="https://www.pratik.com.ua/image/cache/catalog/2015/08/obyv0101-100-630x420.jpg" width="30%"></a>
                            <span>Описание</span>
                        </div>
                    </td>
                    <td class="img">
                        <div class="img_goods">
                            <a href=""><img src="https://www.pratik.com.ua/image/cache/catalog/2015/08/obyv0101-100-630x420.jpg" width="30%"></a>
                            <span>Описание</span>
                        </div>
                    </td>
                <tr>
                    <td class="img">
                        <div class="img_goods">
                            <a href=""><img src="https://www.pratik.com.ua/image/cache/catalog/2015/08/obyv0101-100-630x420.jpg" width="30%"></a>
                            <span>Описание</span>
                        </div>
                    </td>
                    <td class="img">
                        <div class="img_goods">
                            <a href=""><img src="https://www.pratik.com.ua/image/cache/catalog/2015/08/obyv0101-100-630x420.jpg" width="30%"></a>
                            <span>Описание</span>
                        </div>
                    </td>
                <tr>
                    <td class="img">
                        <div class="img_goods">
                            <a href=""><img src="https://www.pratik.com.ua/image/cache/catalog/2015/08/obyv0101-100-630x420.jpg" width="30%"></a>
                            <span>Описание</span>
                        </div>
                    </td>
                    <td class="img">
                        <div class="img_goods">
                            <a href=""><img src="https://www.pratik.com.ua/image/cache/catalog/2015/08/obyv0101-100-630x420.jpg" width="30%"></a>
                            <span>Описание</span>
                        </div>
                    </td>
                <tr>
                    <td class="img">
                        <div class="img_goods">
                            <a href=""><img src="https://www.pratik.com.ua/image/cache/catalog/2015/08/obyv0101-100-630x420.jpg" width="30%"></a>
                            <span>Описание</span>
                        </div>
                    </td>
                    <td class="img">
                        <div class="img_goods">
                            <a href=""><img src="https://www.pratik.com.ua/image/cache/catalog/2015/08/obyv0101-100-630x420.jpg" width="30%"></a>
                            <span>Описание</span>
                        </div>
                    </td>
                <tr>
                    <td class="img">
                        <div class="img_goods">
                            <a href=""><img src="https://www.pratik.com.ua/image/cache/catalog/2015/08/obyv0101-100-630x420.jpg" width="30%"></a>
                            <span>Описание</span>
                        </div>
                    </td>
                    <td class="img">
                        <div class="img_goods">
                            <a href=""><img src="https://www.pratik.com.ua/image/cache/catalog/2015/08/obyv0101-100-630x420.jpg" width="30%"></a>
                            <span>Описание</span>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
</body>

</html>
