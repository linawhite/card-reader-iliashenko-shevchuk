<?php
    if (array_key_exists("pin", $_GET)) {
        $json = file_get_contents('data.json');
        $json_data = json_decode($json, true);

        if ($_GET["pin"] != $json_data["pin"] ) {
            echo json_encode(array('succes pin checking' => false));
            return;

        }
      }
    
      echo json_encode(array('succes pin checking' => true));
?>