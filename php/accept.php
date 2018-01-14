<?php
  require './connection.php';

  $id = $_GET['event_id'];

  $sql = "UPDATE events_table SET event_status = 'Accepted' WHERE event_id = '$id'";

  if ($conn->query($sql) === TRUE) {
    header("Location: ../templates/pending.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>