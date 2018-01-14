<?php
  require './connection.php';

  $id = $_GET['event_id'];

  // Deletes the event from the table
  $sql = "DELETE FROM events_table WHERE event_id = '$id'";

  // After it takes you back to the pending table
  if ($conn->query($sql) === TRUE) {
      header("Location: ../templates/pending.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>