<?php
    $conn = mysqli_connect("localhost","root","1234","mynormal");
    if(empty($_POST['c_memberid'])){
        ?>
        <script>
            alert("로그인 해주세요.");
            location.replace("../member/login.php");
        </script>
        <?php
    }else{
        $sql = "insert into shoppingcart(c_memberid,c_pno,c_quantity)
        values('{$_POST['c_memberid']}','{$_POST['c_pno']}','{$_POST['c_quantity']}')";
        $result = mysqli_query($conn,$sql);
        if($result){
        ?>
        <script>
            alert ("장바구니에 담았습니다.");
            history.back();
        </script>
        <?php
        }else {
            echo "실패";
        }
    }
?>