<?php
    include_once "./include/header.php";
    session_start();
?>
<?php
    $conn = mysqli_connect("localhost","root","1234","mynormal");
    $sql = "select * from products where p_no={$_GET['pno']}";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
?>

<div id="productDetail">
    <table class="productDetail">
        <form method="post" action="./process/cartAdd_process.php">
            <input type="hidden" name="c_pno" value="<?=$row['p_no']?>">
            <?php
                if(isset($_SESSION['userid'])){
            ?>
            <input type="hidden" name="c_memberid" value="<?=$_SESSION['userid']?>">
            <?php
                }
            ?>
        <tr class="prod_detail_main_IMG">
            <td class="prod_detail_main_IMG_left">
            <!-- 치즈냥이 - 제품메인사진 -->
                <img src='<?=$row['p_soimg']?>'>
            </td>
            <td class="prod_detail_main_IMG_right">
                <h2 class="prod_detail_main_h2">
                    <?=$row['p_title']?>
                </h2>
                <div class="prod_detail_main_topDiv">
                    <div class="prod_detail_main_IMG_P gray_line">
                        <p class="gray_text">판매가</p>
                        <p class="prod_detail_price"><?=$row['p_price']?><span>원</span></p>
                    </div>
                    <div class="prod_detail_main_IMG_P">
                        <p class="gray_text">배송비</p>
                        <p class="prod_detail_price"><?=$row['p_delprice']?><span>원</span></p>
                    </div>
                    <div class="prod_detail_main_IMG_P">
                        <p class="gray_text">수량</p>
                        <input class=".prod_detail_price" name="c_quantity" type="number" min="1" max="<?=$row['p_quantity']?>">
                        <span class=".prod_detail_price">개</span>
                    </div>
                </div>

                <div class="prod_detail_main_topButton">
                    <button type="submit" class="loginNjoin_btn_big_br">바로구매</button>
                    <button type="submit" class="loginNjoin_btn_big_wh">장바구니</button>
                </div>
            </td>
        </tr>
        <tr class="prod_detail_more_IMG">
            <td colspan="2" id="detailView">
                <!-- 까만냥이 - 상세설명사진 -->
                <img src="<?=$row{'p_bigimg'}?>">
            </td>
        </tr>
        </form>
    </table>
<?php
    include_once "./include/footer.php";
?>