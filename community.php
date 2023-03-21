<?php
    include_once "./include/header.php";
?>
<?php
    session_start();
?>
<?php
    $conn = mysqli_connect("localhost","root","1234","mynormal");
    $sql = "select * from freeboard LIMIT 100";
    $result = mysqli_query($conn, $sql);
    $lists="";
    while($row=(mysqli_fetch_array($result))){
        $list = $list."
        <tr>
            <td>{$row['num']}</td>
            <td><a href='detailview.php?no={$row['num']}'>{$row['subject']}</a></td>
            <td>{$row['name']}</td>
            <td>{$row['regist_day']}</td>
        </tr>
        ";
    }
?>
<div class="comunityContent">
    <div id="communityImg2"></div>
    <div class ="community_div">
        <h2 class ="community_logo"><img src="https://cdn.imweb.me/upload/S20200629b683866f4b1fb/af6c9479d0f64.png" alt=""></h2>
    </div>
    <table class="listTable">
        <tr>
            <td>No.</td>
            <td>Subject</td>
            <td>ID</td>
            <td>Date</td>
        </tr>
        <?=$list?>
    </table>
    <div class = "minBtn">
        <div></div>
        <button type="button" onclick="document.location.href='write.php'">글쓰기</button> 
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