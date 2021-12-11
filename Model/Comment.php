<?php
class Comment
{
  private $Idpost;
  private $Comment_text;
  private $Date_Comment;







  function __construct($idpo, $comment_text, $date_Comment)
  {
    $this->Idpost = $idpo;
    $this->Comment_text = $comment_text;
    $this->Date_Comment = $date_Comment;
  }

  function setIdpost(string $Idpost)
  {
    $this->Idpost = $Idpost;
  }
  function setDate_Comment(string $Date_Comment)
  {
    $this->Date_Comment = $Date_Comment;
  }

  function setComment_text(string $Comment_text)
  {
    $this->Comment_text = $Comment_text;
  }


  function getIdpost()
  {
    return $this->Idpost;
  }
  function getDate_Comment()
  {
    return $this->Date_Comment;
  }

  function getComment_text()
  {
    return $this->Comment_text;
  }
}
?>