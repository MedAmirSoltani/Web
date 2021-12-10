<?php
class Reply
{
  private $Idcomment;
  private $Reply_text;
  private $Date_reply;







  function __construct($idco, $reply_text, $date_reply)
  {
    $this->Idcomment = $idco;
    $this->Reply_text = $reply_text;
    $this->Date_reply = $date_reply;
  }

  function setIdcomment(string $Idcomment)
  {
    $this->Idcomment = $Idcomment;
  }
  function setDate_reply(string $Date_reply)
  {
    $this->Date_reply = $Date_reply;
  }

  function setreply_text(string $Reply_text)
  {
    $this->Reply_text = $Reply_text;
  }


  function getIdcomment()
  {
    return $this->Idcomment;
  }
  function getDate_reply()
  {
    return $this->Date_reply;
  }

  function getReply_text()
  {
    return $this->Reply_text;
  }
}
?>