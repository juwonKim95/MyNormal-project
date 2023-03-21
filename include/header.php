<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/b036935a3a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="wrap">
            <header>
                <div class="left_menu">               
                    <h2><a href="/myNormal/index.php"><img class="logo" src="https://cdn.imweb.me/thumbnail/20211019/2e151050ea563.png" alt=""></a></h2>
                    <div class="top_menu">
                        <ul>
                            <li><a href="/myNormal/brand.php">Brand</a></li>
                            <li><a href="/myNormal/prod_list.php">Shop</a></li>
                            <li><a href="/myNormal/community.php">Community</a></li>
                        </ul>
                    </div>
                </div>
                <div class="shopping_menu">
                    <ul>
                        <?php
                            if(isset($_SESSION['userid'])){
                        ?>
                        <li><?=$_SESSION['userid']?>님 안녕하세요</li>
                        <li><a href="/board/process/logout_process.php"><i class="fa-solid fa-arrow-right-to-bracket header icon">로그아웃</i></a></li>
                        <li><a href="/myNormal/cart.php"><i class="fa-solid fa-cart-shopping headericon">CART</i></a></li>
                        <?php
                        }else{
                        ?>
                        <li><a href="/myNormal/member/login.php"><i class="fa-solid fa-arrow-right-to-bracket headericon">로그인</i></a></li>
                        <li><a href="/myNormal/member/join.php"><i class="fa-solid fa-door-open headericon">회원가입</i></a></li>
                        <?php
                        }
                        ?>
                        <?php
                            if($_SESSION['userid']=="admin"){
                            ?>
                            <li><a href="/myNormal/product_write.php">제품등록</a></li>
                            <?php
                            }
                        ?>
                    </ul>
                </div>
            </header>
            <div id="contents">
