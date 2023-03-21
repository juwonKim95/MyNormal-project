<?php
    $file1 = $_FILES['p_soimg'];
    $file2 = $_FILES['p_bigimg'];
    //파일 위치이동 (임시저장경로에서 images폴더로 이동)
    if($file1){
        move_uploaded_file($file1['tmp_name'],"C:Apache24/htdocs/myNormal/images/{$file1['name']}");
    }
    if($file2){
        move_uploaded_file($file2['tmp_name'],"C:Apache24/htdocs/myNormal/images/{$file2['name']}");
    }
    $conn = mysqli_connect("localhost","root","1234","mynormal");
    $sql = "insert into products(p_title, p_soimg, p_bigimg, p_price, p_delprice, p_sodesc, p_desc,
    p_quantity)
    values('{$_POST['p_title']}',
    '/myNormal/images/{$file1['name']}',
    '/myNormal/images/{$file2['name']}',
    {$_POST['p_price']},
    {$_POST['p_delprice']},
    '{$_POST['p_sodesc']}',
    '{$_POST['p_desc']}',
    {$_POST['p_quantity']})";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "상품을 등록했습니다.";
    }else {
        echo "에러가 발생해 상품 등록을 실패했습니다.";
    }
    header("Location:../prod_list.php");
?>

