<?php
    $conn = mysqli_connect("localhost","root","1234","mynormal");
    $sql = "select * from member where name='{$_POST['name']}'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_array($result);
        //연락처 체크하기
        if($row["tel"]==$_POST["tel"]){
            ?>
            <script>
                //회원님의 ID는 입니다. 경고창 출력
                alert("회원님의 ID는 <?=$row['id']?>입니다.");
                location.replace("../member/login.php");
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
            //이름을 확인해주세요 경고창 출력
            alert("이름을 확인해주세요.");
            history.back();
        </script>
    <?php
    }
?>