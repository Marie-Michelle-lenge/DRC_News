<?php
include("C:/xampp/htdocs/RDCNews/app/database/db.php"); 

$nom='';
$email='';
$password='';
$passwordConfirme='';
if (isset($_POST['register-btn'])) {
    
    $errors= array();
    if (empty($_POST['nom'])) {
       array_push($errors,'username is required');
    }

    if (empty($_POST['email'])) {
        array_push($errors,'email is required');
     }

     if (empty($_POST['password'] !== $_POST['passwordConfirme'])) {
        array_push($errors,'Password do not match');
     }
     

     if (count($errors) === 0){
        unset($_POST['register-btn']);
        unset($_POST['passwordConfirme']);
    
        $_POST['admin']=0;
        $_POST['password']= password_hash($_POST['password'], PASSWORD_DEFAULT);
    
        $user_id= create('user', $_POST);
        $user= selectOne('user', ['id'=> $user_id]);
        dd($user);
     }

    
   


}

?>