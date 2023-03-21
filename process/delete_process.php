<?php
echo $_POST["num"];
$conn = mysqli_connect("localhost","root","1234","mynormal");
$sql = "delete from freeboard where num={$_POST["no"]}";
var_dump($sql);
$result = mysqli_query($conn, $sql);
var_dump($result);
if($result){
    echo "삭제했습니다.";
}else{
    echo "실패했습니다.";
}
header("Location:../community.php");
?>