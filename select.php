<?php
//     ��connect.php��������
    require_once '../connect.php';
    $sql="SELECT * FROM library ";
//     $temp�Ǹ�mysql_result���͵ı���
    $temp=mysqli_query($con, $sql);
    //ͨ��mysql_fetch_assoc���Խ�����$temp�е�id ,name,content,price�ó�����ÿ��ȡ����һ��
     while ($row=mysqli_fetch_assoc($temp))
    {
        //ÿ��ȡ������һ�����ݷŵ�$data������
        $data[]=$row;
    }
?>
<!-- html5��php����䲻�ܻ����һ����д -->
<!--     ����add������ -->
    <a href="add.php">add</a>
<?php 
    echo "<br>";
//     ��data�����е�ÿһ��Ԫ�����
    foreach ($data as $everyData)
    {
        echo $everyData['name'].":".$everyData['price'].
        "&nbsp&nbsp&nbsp".$everyData['content'];
?>
<!--     ����delete��modify�ĳ����ӣ������������name�ǵ���������ύ�Ĳ��� -->
    <a href="delete.handle.php?name=<?php echo $everyData['name']?>">delete</a>
    <a href="modify.php?name=<?php echo $everyData['name']?> ">modify</a>
<?php 
    echo "<br>";
    }
?>
