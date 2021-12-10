<?php
require_once '../Controller/BlogC.php';
require_once "../Model/Blog.php";
require_once "../Controller/CommentC.php";
require_once "../Controller/ReplyC.php";
require_once "../Model/Comment.php";
require_once "../Model/Reply.php";

////////////////////////////////////////////////////////////////////////:
$BlogC = new BlogC();
$CommentC = new CommentC();
$ReplyC = new ReplyC();
/////////////////////////////////::////////////////////////////////////////:
$idp = $_GET["Idpost"];
$blog = $BlogC->GetPostArchivebyID($idp);
$Blog = new post($blog['Title'], $blog['Picture'], $blog['Date'], $blog['Description']);
$comments = $CommentC->ShowCommentArchive($blog["Idpostar"]);
foreach ($comments as $comment) {
    $Comment = new Comment($idp, $comment['Comment_text'], $comment['Date_Comment']);
    $CommentC->RestoreComment($Comment,$idp,$comment["Idcommantar"]);
   /* $replys = $ReplyC->ShowReplyArchive($comment["Idcommantar"]);
    foreach ($replys as $reply) {
        $Reply = new Reply($reply["idcommentar"], $reply['Reply_text'], $reply['Date_reply']);
        $ReplyC->RestoreReply($Reply, $reply["idcommentar"], $reply["Idreply"]);
    }*/
}
////////////////////////////////////////:////////////////////////////////////////:
////////////////////////////////////////////////////////////////////////////////////////////////////////

$BlogC->RestoreBlog($Blog, $idp);
$BlogC->RemoveBlogArchive($idp);
header('Location:AdminViewBlogHomeArchive.php');
