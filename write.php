<?php
    include_once "./include/header.php";
?>
    <div class="write_inner">
        <div class="write_inner_h2">
            <h2>게시판 > 글쓰기</h2>
        </div>
            <form name="board" method="post" action="insert.php">
                <ul class="board_form">
                    <li>
                        <span class="col1">이름 : </span>
                        <span class="col2"><input name="name" type="text"></span>
                    </li>		
                    <li>	
                        <span class="col1">비밀번호 : </span>
                        <span class="col2">
                            <input name="pass" type="password">
                        </span>
                    </li>				
                    <li>
                        <span class="col1">제목 : </span>
                        <span class="col2"><input name="subject" type="text"></span>
                    </li>	    	
                    <li class="area">	
                        <span class="col1">내용 : </span>
                        <span class="col2">
                            <textarea name="content"></textarea>
                        </span>
                    </li>
                </ul>
                <ul class="write_inner_buttons">
                    <li><button class="loginNjoin_btn_br_small" type="submit" onclick="check_input()">저장하기</button></li>
                    <li><button class="loginNjoin_btn_wh_small" type="button" onclick="location.href='community.php'">목록보기</button></li>
                </ul>
        </form>
    </div>
    </div>
            <footer>
                <div>
                    <div>
                        <img src="" alt="">
                    </div>
                    <div>
                        <ul>
                            <li>제휴문의 </li>
                            <li>인스타그램</li>
                            <li>카카오톡 채널</li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>이용약관</li>
                            <li>개인정보처리방침</li>
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