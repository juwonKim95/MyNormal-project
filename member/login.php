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
    <link rel="stylesheet" href="../css/member_style.css">
    <link rel="stylesheet" href="../css/style.css">
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
                        <?php
                        }else{
                        ?>
                        <li><a href="/myNormal/member/login.php"><i class="fa-solid fa-arrow-right-to-bracket headericon">로그인</i></a></li>
                        <li><a href="/myNormal/member/join.php"><i class="fa-solid fa-door-open headericon">회원가입</i></a></li>
                        <?php
                        }
                        ?>
                        <li><a href="/myNormal/cart.php"><i class="fa-solid fa-cart-shopping headericon">CART</i></a></li>
                        <li><i class="fa-solid fa-magnifying-glass headericon">search</i></li>
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

<div class="login_inner">
    <div class="login_main_Contents_inner">
        <div class="login_main_Contents_h1">
            <h1 class="login_main_Image">
                <a href="/myNormal/index.php"><img src="https://cdn.imweb.me/thumbnail/20220718/6db4e87380aa3.png" alt="#"></a>
            </h1>
        </div>
        <div class="login_main_Contents_form">
            <form action="../process/login_process.php" method="post">
                <div class="login_main_Contents_st">
                    <p>아이디</p>
                    <input type="text" name="id">
                    <button class="loginNjoin_btn" onclick="location.href='findid.php'">아이디 찾기</button>
                </div>
                <div class="login_main_Contents_st">
                    <p>패스워드</p>
                    <input type="password" name="pw">
                    <button class="loginNjoin_btn" onclick="location.href='findpw.php'">비밀번호찾기</button>
                </div>
                <div class="login_main_Contents_ed">
                    <button class="loginNjoin_btn_big_br" type="submit">로그인</button>
                    <button class="loginNjoin_btn_big_wh" type="button" onclick="location.href='join.php'">회원가입</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<footer>
    <div>
        <div>
            <img class="logo" src="https://cdn.imweb.me/thumbnail/20211019/2e151050ea563.png" alt="">
        </div>
        <div>
            <ul>
                <li class="footer_icons">
                    <i class="fa-solid fa-envelope"></i>
                    <p>제휴문의</p> 
                </li>
                <li class="footer_icons">
                    <i class="fa-brands fa-instagram"></i>
                    <p>인스타그램</p>
                </li>
                <li class="footer_icons">
                    <i class="fa-solid fa-phone"></i>
                    <p>고객지원팀</p>
                </li>
            </ul>
        </div>
    </div>
    <div>
        <address>법인명 (주)마이노멀컴퍼니 ㅣ사업자등록번호 612-88-00913</address>
    </div>
</footer>
</div>
</div>
</body>
</html>