<?php
    require_once '../connect.php';
//     ��$_POST����name content price 
    $name=$_POST['name'];
    $content=$_POST['content'];
    $price=$_POST['price'];
    echo $name;
//     �����ݿ������� name content price 
    $sql="INSERT INTO library(name,content,price)VALUES('$name','$content',$price)";
 /*    if(mysqli_query($con, $sql))
    {
        echo "successful!";
    } */
    
//     �������ݿ�ɹ������add successful!����ʾ�򣬲�����ת��select.php
//     ����ʧ��Ҳ��һ��
    if(mysqli_query($con, $sql)){
        echo "<script>alert('add successful!');
            window.location.href='select.php';</script>";
    }else{
        echo "<script>alert('add failed!');
            window.location.href='select.php';</script>";
    }