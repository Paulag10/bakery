<!DOCTYPE html>
<html lang="en">
<head>
  <title>Events</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Upcoming Events</h2>
  <p>Please join us for an Event.</p> 
  <li><a href="index.php?action=viewHome"> Home </a></li>
  <table class="table table-striped">
    <thead>
      <tr>
          <th>&nbsp;</th>
        <th>Event</th>
        <th>Description</th>
        <th>Time & Location</th>
        <th>Cost</th>
      </tr>
    </thead>
    <tbody>
       <?php foreach ($event as $e) : ?>
            <tr>
                
               <td><img src="images/<?php echo htmlspecialchars($e['eventCode']); ?>.jpg"</td>
              <td><?php echo $e['eventName']; ?></td>
              <td><?php echo $e['eventDiscription']; ?></td>
              <td><?php echo $e['eventLocation']?> .<?php echo $e['eventTime']?> </td>
              <td><?php echo $e['eventCost']; ?></td>
              
              <td>  <form action="index.php" method="POST">
                    <input type="hidden" name="action"
                           value="select">
                    <input type="hidden" name="event_id"
                           value="<?php echo $e['eventID']; ?>">
                     <input type="submit" value="Select">
                  </form></td>
            </tr>
            <?php endforeach; ?>
    </tbody>
  </table>
</div>

</body>
</html>