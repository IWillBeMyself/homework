<?php
    require_once '../connect.php';
    //     ͨ��$_POST�������modify.php�е�����ύ����ť���ύ��name��content
    $name=$_POST['name'];
//     $name='zhangsan';
    $content=$_POST['content'];
//     �������ݿ��е�name��content
    $sql="UPDATE library SET content='$content'WHERE name='$name'";
    //     �������ݿ�ɹ������modify successful!����ʾ�򣬲�����ת��select.php
    //     ����ʧ��Ҳ��һ��    
    if(mysqli_query($con, $sql)){
        echo "<script>alert('modify successful!');
            window.location.href='select.php';</script>";
    }else{
        echo "<script>alert('modify failed!');
            window.location.href='select.php';</script>";
    }