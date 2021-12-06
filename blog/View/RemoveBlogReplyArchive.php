<?php
    require '../Controller/ReplyC.php';

    $ReplyC = new ReplyC();
    $ReplyC->RemoveReplyArchive($_GET["Idreply"]);
    header('Location:AdminViewBlogHomeArchive.php');
?>