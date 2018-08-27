<?php



  function text_process($text_input,$link){



    $sql_qu = "SELECT * FROM `dv_data_bot_question` ORDER BY `dv_data_bot_question`.`id_ques` ASC ";
    $dv_qy_sq = mysqli_query($link , $sql_qu);

    while ($result = mysqli_fetch_array($dv_qy_sq)) {
     $text_db = $result['dv_ques'];

     if ($text_input == $text_db) {

      return $text_db;
    }else {
  

    }

    }


  }

 ?>
