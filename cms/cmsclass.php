<?php
  include "DBConnection.php";

  class cmsCRUD
  {
      protected $db   = null;

      public function _construct()
      {
        $this->db = new DBConnection();
      }

      public function inputData($name, $age, $height)
        {
          $con      = $this->db->OpenCon();
          $title    = $con->real_escape_string($name);
          $age      = $con->real_escape_string($age);
          $height   = $con->real_escape_string($height);
          $query    = $con->prepare("INSERT INTO post(
                                                      article_name,
                                                      article_content,
                                                      img) VALUES(?, ?, ?)";
        }


  }
?>
