<!DOCTYPE HTML>
<html lang = "en">
  <head>
    <title>Settings Page</title>
    <meta charset = "UTF-8" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="../css/styles.css">
  </head>

  <body>
    <!-- Nav bar -->
    <div class="navbar">
      <a class="navIcon"><i class="glyphicon glyphicon-calendar navIcon"></i></a>
      <a href="#">Create Event</a>
      <a href="#">Create Group</a>
      <div class="logout">
        <a href="./login.php" class="logout">Logout</a>
      </div>
    </div>

    <!-- Main Page Container -->
    <div class="mainContainer">
      <!-- Title -->
      <h1>Create Event</h1>
      
      <div class='formContainer'>
        <form action="../php/create.php" method="post">
          <div class="form-group">
            <label>Event Title:</label>
            <input name="event_title" type="text" class="form-control form_text" id="EventTitle" placeholder="Enter Title">
          </div>
          <div class="form-group date-container">
            <label>Date:</label>
            <input name="event_date" type="date" class="form_date">
          </div>
          <div class="form-group">
            <label>Attendee:</label>
            <input class="form-control form_text" type="text" placeholder="user@email.com" readonly>
          </div>
          <div class="form-group">
            <label>Description:</label>
            <textarea name="event_description" class="form-control form_description" id="EventDescription" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
    </div>
  </body>
</html>