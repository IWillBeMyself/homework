<?php
    require_once '../connect.php';
    //�˴���nameΪ����ɾ����name
//     $name='lisi';
//     ͨ��$_GET�������select.php�е��delete���������ύ��name
    $name=$_GET['name'];
//     ɾ�����ݿ�������Ϊ$name ��һ������
    $sql="DELETE FROM library WHERE name='$name'";
//     �������ݿ�ɹ������delete successful!����ʾ�򣬲�����ת��select.php
//     ����ʧ��Ҳ��һ��
    if(mysqli_query($con, $sql)){
        echo "<script>alert('delete successful!');
            window.location.href='select.php';</script>";
    }else{
        echo "<script>alert('delete failed!');
            window.location.href='select.php';</script>";
    }