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
/*$comments = $CommentC->ShowComment($blog["Idpost"]);
foreach ($comments as $comments) {
    $Comment = new Comment($comments["Idpost"], $comments['Comment_text'], $comments['Date_Comment']);
    $Replys = $ReplyC->ShowReply($comments["Idcomment"]);
    foreach ($Replys as $Replys) {
        $Reply = new Reply($Replys["Idcomment"], $Replys['Reply_text'], $Replys['Date_reply']);
    }
}*/
////////////////////////////////////////:////////////////////////////////////////:
////////////////////////////////////////////////////////////////////////////////////////////////////////

$BlogC->AddBlogArchive($Blog,$idp);
$BlogC->RemoveBlog($idp);
header('Location:AdminViewBlogHome.php');
?>