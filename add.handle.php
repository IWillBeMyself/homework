<?php
    require_once '../connect.php';
//     用$_POST接收name content price 
    $name=$_POST['name'];
    $content=$_POST['content'];
    $price=$_POST['price'];
    echo $name;
//     在数据库中增加 name content price 
    $sql="INSERT INTO library(name,content,price)VALUES('$name','$content',$price)";
 /*    if(mysqli_query($con, $sql))
    {
        echo "successful!";
    } */
    
//     访问数据库成功则输出add successful!的提示框，并且跳转到select.php
//     访问失败也是一样
    if(mysqli_query($con, $sql)){
        echo "<script>alert('add successful!');
            window.location.href='select.php';</script>";
    }else{
        echo "<script>alert('add failed!');
            window.location.href='select.php';</script>";
    }