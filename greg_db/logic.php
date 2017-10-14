<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 15.09.2017
 * Time: 14:03
 */
include_once 'db.php';

function validation($string)
{
    $validation = filter_var($string, FILTER_VALIDATE_EMAIL);
    if ($validation) {

    } else {
        $output = 'wrong email address';
        return '<div class="alert alert-danger col-sm-4 offset-sm-4" role="alert">' . $output . '</div>';

    }
}

try {
    //проверяем заполнены ли поля
   if(!empty($_POST['email']['name']) && !empty($_POST['product'])) {

       $query = "INSERT INTO products.product (`name`) VALUES (:name)";
       $email = $pdo->prepare($query);
       $email->execute(['name' => $_POST['email']['name']]);

       // Получаем сгенирированный индификатор
       $email_id = $pdo->lastInsertId();


       $query = "INSERT INTO products.email (`name`,`description`,`email_id`) VALUES (:name, :description, :email_id)";
       $email = $pdo->prepare($query);
       $email->execute(['name' => $_POST['product']['name'], 'description' => $_POST['product']['describtion'], 'email_id' => $email_id]);
   }
}catch (PDOException $e){
    echo "Ошибка выполнения запроса:". $e->getMessage();
}

