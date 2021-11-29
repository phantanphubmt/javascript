<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @media screen and (min-width: 768px) {
            .container {
                width: 700px;
                padding: 0 20px;
            }
        }
        @media screen and (min-width: 992px) {
            .container {
                width: 900px;
                padding: 0 20px;
            }
        }
        @media screen and (min-width: 1280px) {
            .container {
                width: 1160px;
                padding: 0 20px;
            }
        }

        .container {
            width: 100%;
            padding: 0 20px;
        }

        .list-item {
            display:flex;
            flex-wrap:wrap;
        }
        .list-item .item {
            width: 50%;
            display: flex;
        }
        .list-item .item .img {
            width: 33.333%;
        }
        .list-item .item .img img {
            max-width: 100%;
        }
        .list-item .item .content-right {
            width: 66.666%;
        }
    </style>
</head>
<body>
    <header>
        <div class="nav-header">
            <input type="checkbox">
            <div class="menu-icon">
                <div class="menu-line">
                </div>
            </div>

            <div class="menu-item">
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Conact</a></li>
            </div>
        </div>

    </header>
    <?php include "banner.php"; ?>

    <div class="container">
        <div class="list-item">
            <div class="item">
                <div class="img">
                    <img src="banhmi.jpg" />
                </div>
                <div class="content-right">
                    <div class="name">Name</div>
                    <div class="price">12.000</div>
                    <div class="content">Cillum est nisi commodo ut voluptate aliquip esse irure laborum fugiat esse.</div>
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <img src="banhmi.jpg" />
                </div>
                <div class="content-right">
                    <div class="name">Name</div>
                    <div class="price">12.000</div>
                    <div class="content">Cillum est nisi commodo ut voluptate aliquip esse irure laborum fugiat esse.</div>
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <img src="banhmi.jpg" />
                </div>
                <div class="content-right">
                    <div class="name">Name</div>
                    <div class="price">12.000</div>
                    <div class="content">Cillum est nisi commodo ut voluptate aliquip esse irure laborum fugiat esse.</div>
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <img src="banhmi.jpg" />
                </div>
                <div class="content-right">
                    <div class="name">Name</div>
                    <div class="price">12.000</div>
                    <div class="content">Cillum est nisi commodo ut voluptate aliquip esse irure laborum fugiat esse.</div>
                </div>
            </div>
        </div>

        <div class="img-from">images from</div>
    </div>

    
</body>
</html>
