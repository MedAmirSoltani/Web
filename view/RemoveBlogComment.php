<?php
require '../Controller/CommentC.php';
require_once "../Controller/BlogC.php";

$BlogC = new BlogC();
$CommentC = new CommentC();
$comment = $CommentC->GetCommentbyID($_GET["Idcomment"]);
$CommentC->RemoveComment($_GET["Idcomment"]);
$nombre = $CommentC->NumberComment($comment["Idpost"]);
$BlogC->AddNcomments($nombre, $comment["Idpost"], $comment["ID_utilisateur"]);
header('Location:AdminViewBlogHome.php');
