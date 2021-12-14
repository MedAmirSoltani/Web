<?php
require '../Controller/CommentC.php';
require_once "../Controller/BlogC.php";
include_once     '../Controller/utilisateurC.php';
include_once '../Model/utilisateur.php';


session_start();

$BlogC = new BlogC();
$CommentC = new CommentC();
$comment = $CommentC->GetCommentbyID($_GET["Idcomment"]);
$CommentC->RemoveComment($_GET["Idcomment"]);
$nombre = $CommentC->NumberComment($comment["Idpost"]);
$BlogC->AddNcomments($nombre, $comment["Idpost"], $comment["ID_utilisateur"]);
$id = $comment["Idpost"];
if (($x["admin_bool"]) == 1) {

    header('Location:AdminViewBlogHome.php');
} else {

    header("location:GeneralViewBlogPost.php?Idpost=$id");
}
