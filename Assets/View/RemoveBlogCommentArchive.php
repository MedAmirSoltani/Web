<?php
    require '../Controller/CommentC.php';

    $CommentC = new CommentC();
    $CommentC->RemoveCommentArchive($_GET["Idcomment"]);
    header('Location:AdminViewBlogHomeArchive.php');
    
?>