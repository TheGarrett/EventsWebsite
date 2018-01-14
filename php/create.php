<?php
  require './connection.php';

  $sql="INSERT INTO events_table (event_title, event_date, event_attendees, event_sender, event_description, event_status)
  VALUES
  ('$_POST[event_title]','$_POST[event_date]', 2, 'admin@email.com', '$_POST[event_description]', 'Pending')";

  // After it takes you back to the pending table
  if ($conn->query($sql) === TRUE) {
    header("Location: ../templates/settings.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>