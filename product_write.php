<?php
    include_once "./include/header.php";
?>
<?php
    session_start();
?>
            <div id="contents2">
                <h2>제품 등록하기</h2>
                <form action="process/productwrite_process.php" method="post"
                enctype="multipart/form-data" onsubmit="return inputCh()" name="productForm">
                <table class="writeTable">
                    <tr>
                        <td>제목</td>
                        <td>
                            <input type="text" name="p_title" required>
                        </td>
                    </tr>
                    <tr>
                        <td>가격</td>
                        <td>
                            <input type="text" name="p_price" required>
                        </td>
                    </tr>
                    <tr>
                        <td>배송료</td>
                        <td>
                            <input type="text" name="p_delprice">
                        </td>
                    </tr>
                    <tr>
                        <td>수량</td>
                        <td>
                            <input type="number" name="p_quantity" required>
                        </td>
                    </tr>
                    <tr>
                        <td>제품 리스트 사진</td>
                        <td>
                            <input type="file" name="p_soimg">
                        </td>
                    </tr>
                    <tr>
                        <td>제품 상세 사진</td>
                        <td>
                            <input type="file" name="p_bigimg">
                        </td>
                    </tr>
                    <tr>
                        <td>간략 설명(500자 이하)</td>
                        <td>
                            <textarea name="p_sodesc"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>상세 설명</td>
                        <td>
                            <textarea name="p_desc"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit">등록</button>
                            <button type="reset">취소</button>
                        </td>
                    </tr>
                </table>
                </form>
            </div>
            <script>
                function inputCh(){
                    //가격, 배송료 숫자인지 체크
                    const price = document.productForm.p_price;
                    const p_delprice = document.productForm.p_delprice;
                    if(isNaN(Number(price.value))){
                        alert("가격은 숫자만 입력하세요.");
                        return false;
                    }
                    if(p_delprice.value){
                        if(isNaN(Number(p_delprice.value))){
                            alert("배송료는 숫자만 입력하세요.");
                            return false;
                        }
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