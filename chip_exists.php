<?php
  if (array_key_exists("chip", $_GET)) {
    $json = file_get_contents('data.json');
    $json_data = json_decode($json, true);

    if (in_array($_GET["chip"], $json_data["chips"])) {
      echo json_encode(array('success' => true));
    } else {
      echo json_encode(array('success' => false));
    }
  }
?>