<?php
	require_once('config.php');
	//mysqli_connect�������ݿ�
	if(!($con = mysqli_connect(HOST, USERNAME, PASSWORD,"test"))){
		echo mysqli_error();
	}
    //ѡ�����ݿ⣬ע����Ҫ������
	if(!mysqli_select_db($con,'test')){
		echo mysqli_error();
	}
    //���ñ������ͣ���ʾ����
	if(!mysqli_query($con,'set names utf8')){
		echo mysqli_error();
	}
?>