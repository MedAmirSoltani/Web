<?php
require '../Controller/ReplyC.php';
include_once     '../Controller/utilisateurC.php';
include_once '../Model/utilisateur.php';
require '../Controller/CommentC.php';

session_start();

$ReplyC = new ReplyC();
$CommentC = new CommentC();
$reply=$ReplyC->GetReplybyID($_GET['Idreply']);
$comment=$CommentC->GetCommentbyID($reply["idcomment"]);
$ReplyC->RemoveReply($_GET["Idreply"]);

$id=$comment["Idpost"];

if (($x["admin_bool"]) == 1) {

    header('Location:AdminViewBlogHome.php');
} else {

    header("location:GeneralViewBlogPost.php?Idpost=$id");
}
