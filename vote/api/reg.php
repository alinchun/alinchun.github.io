<?php include_once "../db.php";



if(!empty($_POST) && $_POST['acc']!="" && $_POST['pw']!=""){
    $sql="insert into `members` (`acc`,`pw`,`name`,`address`,`email`) 
                          values('{$_POST['acc']}',
                                 '{$_POST['pw']}',
                                 '{$_POST['name']}',
                                 '{$_POST['address']}',
                                 '{$_POST['email']}')";
$pdo->exec($sql);
    header("location:../index.php");
}else{
    header("location:../index.php?do=reg&error=1");
}

