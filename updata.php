<?php
    include_once "./include/header.php";
?>
<?php
    session_start();
?>
<?php
    $conn = mysqli_connect("localhost","root","1234","mynormal");
    $sql = "select * from freeboard where num={$_POST["num"]}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>
            <div class="update_inner">
                <div class="update_inner_h2">
                    <h2>게시글 수정하기</h2>
                </div>
                <form action="process/updata_process.php" method="post">
                <table class="writeTable">
                    <input type="hidden" name="num" value=<?=$row['num']?>>
                    <tr>
                        
                        <td>제목</td>
                        <td>
                            <input type="text" name="subject" value=<?=$row['subject']?>>
                        </td>
                    </tr>
                    <tr>
                        <td>글쓴이</td>
                        <td>
                            <input type="text" name="id" value=<?=$row['id']?>>
                        </td>
                    </tr>
                    <tr>
                        <td>내용</td>
                        <td>
                            <textarea name="contents" ><?=$row['contents']?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="update_inner_buttons" colspan="2">
                            <button class="loginNjoin_btn_br_small" type="submit">수정</button>
                            <button class="loginNjoin_btn_wh_small" type="reset">취소</button>
                        </td>
                    </tr>
                </table>
                </form>
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
