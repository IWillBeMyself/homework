<?php
    require_once '../connect.php';
    //     通过$_POST函数获得modify.php中点击“提交”按钮所提交的name和content
    $name=$_POST['name'];
//     $name='zhangsan';
    $content=$_POST['content'];
//     更新数据库中的name和content
    $sql="UPDATE library SET content='$content'WHERE name='$name'";
    //     访问数据库成功则输出modify successful!的提示框，并且跳转到select.php
    //     访问失败也是一样    
    if(mysqli_query($con, $sql)){
        echo "<script>alert('modify successful!');
            window.location.href='select.php';</script>";
    }else{
        echo "<script>alert('modify failed!');
            window.location.href='select.php';</script>";
    }