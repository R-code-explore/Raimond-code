<?php

require 'connect.php';

if (isset($_POST["name"], $_POST["email"], $_POST["mess"]) && !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["mess"])) {

        $NomPrenomForm = strip_tags($_POST["name"]);
        $EmailForm = strip_tags($_POST["email"]);
        $TextArea = ($_POST["mess"]);

        $sql = "INSERT INTO `mess`(`id`, `name`, `email`, `mess`) VALUES (NULL, :name, :email, :mess)";

        $query = $db->prepare($sql);

        $query->bindValue(":name", $NomPrenomForm, PDO::PARAM_STR);
        $query->bindValue(":email", $EmailForm, PDO::PARAM_STR);
        $query->bindValue(":mess", $TextArea, PDO::PARAM_STR);

        if(!$query->execute()){
            die("Il semble que vos infos n'ont pas été enregistrés");
        }

        header("Location: ./merci_msg.php");

    }else{
        die("Il semble que votre message n'a pas été envoyer");
    }


?>