<?php
  if (array_key_exists("chip", $_GET)) {
    $json = file_get_contents('data.json');
    $json_data = json_decode($json, true);

    if (!in_array($_GET["chip"], $json_data["chips"])) {
      array_push($json_data["chips"], $_GET["chip"]);
      file_put_contents('data.json', json_encode($json_data));
    }

    echo json_encode(array('success' => true));
    return;
  }

  echo json_encode(array('success' => false));

?>