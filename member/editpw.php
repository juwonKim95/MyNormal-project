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
                <div class="editpw_inner">
                    <div class="editpw_main_Contents_inner">
                        <div class="editpw_main_Contents_h2">
                            <h2>패스워드 변경</h2>
                        </div>
                        <div class="editpw_main_Contents_move">
                            <div class="editpw_main_Contents_p">
                                <p>회원님의 개인정보를 안전하게 보호하고, 개인정보 도용으로 인한 피해를 예방하기 위해
                                90일 이상 비밀번호를 변경하지 않은 경우 비밀번호 변경을 권장하고 있습니다.</p>
                            </div>
                            <div class="editpw_main_Contents_form">
                                <form action="../process/editpw_process.php" method="post">
                                    <input type="hidden" value="<?=$_GET['id']?>" name="id">
                                    <div class="editpw_main_Contents_st">
                                        <div class="editpw_main_Contents_st_triangle">
                                            <i class="fa-solid fa-play"></i>
                                            <p>비밀번호<p>
                                        </div>
                                        <input type="password" name="pw"></input>
                                    </div>
                                    <div class="editpw_main_Contents_st">
                                        <div class="editpw_main_Contents_st_triangle">
                                            <i class="fa-solid fa-play"></i>
                                            <p>비밀번호 확인</p>
                                        </div>
                                        <div>
                                            <input type="password" name="pwch">
                                            <div>
                                                <button class="loginNjoin_btn_br_small" type="submit">찾기</button>
                                                <button class="loginNjoin_btn_wh_small"  type="reset">취소</button>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="editpw_main_Contents_ed">
                                        <button class="loginNjoin_btn_big_br" onclick="location.href='findid.php'">아이디 찾기</button>
                                        <button class="loginNjoin_btn_big_wh" onclick="location.href='findpw.php'">비밀번호 찾기</button>
                                    </div>
                                </form>
                            </div>
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