<?php

require 'connect.php';

if (isset($_POST)){

    if (isset($_POST["name"], $_POST["email"], $_POST["phone"], $_POST["msg"]) && !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["msg"])) {

        $name = strip_tags($_POST["name"]);
        $email = strip_tags($_POST["email"]);
        $phone = strip_tags($_POST["phone"]);
        $msg = strip_tags($_POST["msg"]);

        $sql = "INSERT INTO `messages`(`id`, `name`, `email`, `tel`, `msg`) VALUES (NULL, '$name', '$email', '$phone', '$msg')";

        $query = $db->prepare($sql);

        $query->bindValue($name, PDO::PARAM_STR);
        $query->bindValue($email, PDO::PARAM_STR);
        $query->bindValue($phone, PDO::PARAM_STR);
        $query->bindValue($msg, PDO::PARAM_STR);

        if(!$query->execute()){
            die("It seems that your informations has not been recorded");
        }

        $id = $db->lastInsertId();

        require_once 'thx-msg.php';

    }else{
        die("incomplete form");
    }

}

?>