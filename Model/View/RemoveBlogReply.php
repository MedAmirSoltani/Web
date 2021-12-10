<?php
    require '../Controller/ReplyC.php';

    $ReplyC = new ReplyC();
    $ReplyC->RemoveReply($_GET["Idreply"]);
    header('Location:AdminViewBlogHome.php');
?>