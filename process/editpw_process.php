<?php
    if($_POST["pw"]==$_POST["pwch"]){
        //패스워드 암호화
        $password = password_hash("{$_POST['pw']}",PASSWORD_DEFAULT);
        $conn = mysqli_connect("localhost","root","1234","mynormal");
        $sql = "update member
        set pw='{$password}'
        where id='{$_POST['id']}'";
        $result = mysqli_query($conn,$sql);
        if($result){
            ?>
            <script>
                //패스워드가 변경되었습니다.
                alert("패스워드가 변경되었습니다.");
                location.replace("../member/login.php");
            </script>
            <?php
        }else {
            ?>
            <script>
            //패스워드 변경을 다시 확인해 주십시오.
            alert("패스워드 변경을 다시 확인해 주십시오.");
            history.back();
            </script>
            <?php
        }
    }else {
        ?>
        <script>
            alert ("패스워드가 일치하지 않습니다.");
            history.back();
        </script>
        <?php
    }
?>