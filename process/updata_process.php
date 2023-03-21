<?php
    var_dump($_POST);
    $conn = mysqli_connect("localhost","root","1234","mynormal");
    $sql = "update freeboard set id='{$_POST['id']}',
    title='{$_POST['subject']}',contents='{$_POST['contents']}'
    where num={$_POST['num']}";
    echo $sql;
    //updata board set writer='선미',
    //title='24시간이 모자라',
    //contents=''
    //where no = 1
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "성공했습니다.";
    }else{
        echo "실패했습니다.";
    }
    header("Location:../community.php");
?>