<?php
    $conn = mysqli_connect("localhost","root","1234","mynormal");
    $sql = "select * from member where id='{$_POST['id']}'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_array($result);
        //연락처 체크하기
        if($row["tel"]==$_POST["tel"]){
            ?>
            <script>
                //비밀번호 수정하기 페이지 이동
                alert ("아이디와 연락처가 확인되셨습니다.");
                location.href="../member/editpw.php?id=<?=$row['id']?>";
            </script>
            <?php
        }else {
            ?>
            <script>
                //연락처를 확인해주세요 경고창 출력
                alert("연락처를 확인해주세요.");
                history.back();
            </script>
            <?php
        }
    }
    else {
        ?>
        <script>
            //아이디를 확인해주세요 경고창 출력
            alert("아이디를 확인해주세요.");
            history.back();
        </script>
    <?php
    }
?>