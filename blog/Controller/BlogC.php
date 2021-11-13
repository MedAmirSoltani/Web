<?php
require_once "../assets/utilis/Config.php";
require_once '../Model/Blog.php';
class BlogC
{

    function uploadFile()
    {
        $target_dir = "../assets/uploads/";
        $target_file = $target_dir . basename($_FILES["Picture"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["Picture"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["Picture"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["Picture"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["Picture"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    function ShowBlog()
    {
        $requete = "select * from post";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetchAll();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    function GetPostbyID($idp)
    {
        $requete = "select * from post where Idpost=:idp";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(
                [
                    'idp' => $idp
                ]
            );
            $result = $querry->fetch();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function AddBlog($Blog)
    {
        
        $config = config::getConnexion();
        try {
       // $this->uploadFile();
            $querry = $config->prepare('
            INSERT INTO post 
            (Idpost,Title,Picture,Description,Date)
            VALUES
            (:Idpost,:Title,:Picture,:Description,:Date)
            ');
            $querry->execute([
                'Idpost' => $Blog->getIdpost(),
                'Title' => $Blog->getTitle(),
                'Picture' => $Blog->getPicture(),
                'Date' => $Blog->getDate(),
                'Description' => $Blog->getDescription(),



            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    function modifierBlog($Blog)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            UPDATE post SET
             Date=:Date, Description=:Description, Picture=:Picture, Title=:Title

            where Idpost=:Idpost
            ');
            $querry->execute([
                'Idpost' => $Blog->getIdpost(),
                'Title' => $Blog->getTitle(),
                'Picture' => $Blog->getPicture(),
                'Description' => $Blog->getDescription(),
                'Date' => $Blog->getDate(),

            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function supprimerBlog($idp)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            DELETE FROM post WHERE Idpost =:idp
            ');
            $querry->execute([
                'idp' => $idp
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
}
?>