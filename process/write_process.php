<?php
$conn = mysqli_connect("localhost","root","1234","mynormal");
$sql = "insert into freeboard(id,subject,content,regist_day)
values('{$_POST['id']}','{$_POST['subject']}','{$_POST['content']}', NOW())";
echo $sql;
$result = mysqli_query($conn, $sql);
if($result){
    echo "성공";
}else{
    echo "실패";
}
header("Location:../community.php");
?>
