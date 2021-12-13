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
$blog = $BlogC->GetPostbyID($idp);
$Blog = new post($blog['Title'], $blog['Picture'], $blog['Date'], $blog['Description']);
$BlogC->AddBlogArchive($Blog, $idp,$blog['ID_utilisateur']);
$comments = $CommentC->ShowComment($blog["Idpost"]);
foreach ($comments as $comment) {
    $Comment = new Comment($comment["Idpost"], $comment['Comment_text'], $comment['Date_Comment']);
    $CommentC->AddCommentArchive($Comment, $comment["Idpost"], $comment["Idcomment"],$comment['ID_utilisateur']);
    $replys = $ReplyC->ShowReply($comment["Idcomment"]);
    foreach ($replys as $reply) {
        $Reply = new Reply($reply["idcomment"], $reply['Reply_text'], $reply['Date_reply']);
        $ReplyC->AddReplyArchive($Reply, $reply["idcomment"], $reply["Idreply"],$reply["ID_utilisateur"]);
    }
}
////////////////////////////////////////:////////////////////////////////////////:
////////////////////////////////////////////////////////////////////////////////////////////////////////


$BlogC->RemoveBlog($idp);
header('Location:AdminViewBlogHome.php');
