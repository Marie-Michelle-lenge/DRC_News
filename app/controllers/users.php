<?php
include("C:/xampp/htdocs/RDCNews/app/database/db.php"); 

if (isset($_POST['register-btn'])) {
    unset($_POST['register-btn'], $_POST['passwordconfirme']);
    $_POST['admin']=0;
    $_POST['password']= password_hash($_POST['password'], PASSWORD_DEFAULT);

    $user_id= create('user', $_POST);
    $user= selectOne('user', ['id'=> $user_id]);
    dd($user);



}

?>