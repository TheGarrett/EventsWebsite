<!DOCTYPE HTML>
<html lang = "en">
  <head>
    <title>Home Page</title>
    <meta charset = "UTF-8" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
  </head>

  <body>
    <!-- Nav bar -->
    <div class="navbar">
      <a class="navIcon"><i class="glyphicon glyphicon-calendar navIcon"></i></a>
      <a href="#">Home</a>
      <a href="./templates/pending.php">Pending</a>
      <div class="logout">
        <a href="./templates/login.php" class="logout">Logout</a>
      </div>
    </div>

    <!-- Main Page Container -->
    <div class="mainContainer">
      <!-- Title -->
      <h1>Home Page</h1>

      <?php
        require './php/connection.php';

        $sql = "SELECT * FROM events_table WHERE event_status = 'Accepted' ORDER BY event_date";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // Displays data in table brought back from query
          
          echo "<div class='tableContainer'>
            <table class='table'>
              <thead>
                <tr>
                  <th scope='col'>ID</th>
                  <th scope='col'>Event Title</th>
                  <th scope='col'>Date</th>
                  <th scope='col'>Sender</th>
                  <th scope='col'>Description</th>
                </tr>
              </thead>
              <tbody>";
              while($row = $result->fetch_assoc()) {
                echo "<tr>
                  <th>". $row["event_id"] ."</th>
                  <td>". $row["event_title"] ."</td>
                  <td>". $row["event_date"] ."</td>
                  <td>". $row["event_sender"] ."</td>
                  <td>". $row["event_description"] ."</td>
                </tr>";
              }
              echo "</tbody>
            </table>
          </div>";
    
        }
        else {
          echo "<br />You don't have any events, please check the <a class='textLink' href ='./templates/pending.php'>Pending</a> page to see if you have any invites!";
        }
      ?>

    </div>
  </body>
</html>