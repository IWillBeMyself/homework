<?php
//     ͨ��$_GET�������select.php�е��delete���������ύ��name
    $name=$_GET['name'];
?>
<html>
<body>   
<!--     �˱���ύ�Ķ���Ϊmodify.handle.php ����ʽΪpost-->
<form action="modify.handle.php" method="post">
<!--     ֱ�ӽ���õ�name������д��name���� -->
        name:<input type="text" name="name" value=<?php echo $name?>><br>
        content:<input type="text" name="content"><br>
        price:<input type="text" name="price"><br>
        <input type="submit" value="�ύ">
</form>
</body>
</html>

