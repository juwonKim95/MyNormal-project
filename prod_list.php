<?php
    include_once "./include/header.php";
?>
<?php
    session_start();
?>
<?php
    $conn = mysqli_connect("localhost","root","1234","mynormal");
    $sql = "select * from products";
    $result = mysqli_query($conn,$sql);
    $list = "";
    while($row=(mysqli_fetch_array($result))){
        $list = $list."
        <li class='shop_item'>
            <a href='/myNormal/prod_detail.php?pno={$row['p_no']}'><img src='{$row['p_soimg']}'></a>
            <h4>{$row['p_title']}</h4>
            <div class='text_price'>
            <p>{$row['p_price']}</p>
            <span>원</span>
        <li>
        ";
    }
?>
    <div class="prod_main_img"></div>
        <div class="inner_prod">
            <div class="prod_logo_All">
                <img src="https://cdn.imweb.me/upload/S20200629b683866f4b1fb/cc2e258232241.png" alt="">
            </div>
            <div class="prod_detail_menu">
                <ul class="prod_detail_list">
                    <?=$list?>
                </ul>
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