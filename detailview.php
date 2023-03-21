<?php
    include_once "./include/header.php";
?>
<?php
    session_start();
?>
<?php
    $conn = mysqli_connect("localhost","root","1234","mynormal");
    $sql = "select * from freeboard where num={$_GET['no']}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>
<div>
    <h2>게시글 보기</h2>
    <table class="viewTable">
        <tr>
            <td colspan="4"><?=$row['title']?><span>등록일</span><?=$row['regist_day']?></td>
        </tr>
        <tr>
            <td>번호</td>
            <td><?=$row['num']?></td>
            <td>글쓴이</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td colspan="4">
            <?=$row['content']?>
            </td>
        </tr>   
    </table>
    <div class="boardBtn">
        <form action="updata.php" method="post">
            <input type="hidden" name="no" value="<?=$row['num']?>">
            <button type="submit">수정</button>
        </form>
        <form action="process/delete_process.php" method="post">
            <input type="hidden" name="no" value="<?=$row['num']?>">
            <button type="submit">삭제</button>
        </form>
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