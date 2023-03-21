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
            <div class="join_inner">
                <div class="join_main_Contents_inner">
                    <div class="join_main_Contents_h2">
                        <h1 class="join_main_Image">
                            <a href="/myNormal/index.php"><img src="https://cdn.imweb.me/thumbnail/20220718/6db4e87380aa3.png" alt="#"></a>
                        </h1>
                    </div>
                    <div class="join_main_Contents_form">
                        <form name="memberForm" action="../process/join_process.php" method="post" 
                            onsubmit="return false" >
                            <div class="join_main_Contents_st">
                                <p>이름</p>
                                <input type="text" name="username">
                            </div>
                            <div class="join_main_Contents_st">
                                <p>아이디</p>
                                <input type="text" name="userid" id="userid">
                                <button class="loginNjoin_btn" onclick="idCh()">ID중복체크</button></p>
                                <p id="idtext"></p>
                            </div>
                            <div class="join_main_Contents_st">
                                <p>비밀번호</p>
                                <input type="password" name="userpw">
                            </div>
                            <div class="join_main_Contents_st">
                                <p>비밀번호 체크</p>
                                <input type="password" name="userpwch">
                            </div>
                            <div class="join_main_Contents_st">
                                <p>연락처</p>
                                <input type="text" name="usertel">
                            </div>
                            <div class="join_main_Contents_ed">
                                <button class="loginNjoin_btn_big_br" type="submit" onclick="formSubmit()">회원가입</button>
                                <button class="loginNjoin_btn_big_wh" type="reset">취소</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script>
    let isPw = false;
    let isIdch = false;
    function formSubmit(){
    document.memberForm.submit();
}
   async function idCh(){
        let useridInput = document.querySelector("#userid");
        console.log(useridInput);
        try{
                const res = await fetch(`http://localhost/myNormal/process/idcheck_process.php?id=${useridInput.value}`);
                const result = await res.text();
                if(result == "yes") {
            document.querySelector("#idtext").innerHTML = "이미 등록된 아이디 입니다.";
            isIdch = false;
        } else {
            document.querySelector("#idtext").innerHTML = "사용가능한 아이디 입니다.";
            isIdch = true;
        }
            }
            catch(e){
                console.log(e);
            }
    }
</script>
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

