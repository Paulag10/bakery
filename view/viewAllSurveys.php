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
  <li><a href="index.php?action=viewAdminHome"> Home </a></li>
  <table class="table table-striped">
    <thead>
      <tr>
          <th>User</th>
        <th>What did you enjoy the most about your treat?</th>
        <th>Will you be inviting a friend To Paula's Sweets?</th>
        <th>Any Comments or Suggestions?</th>
      
      </tr>
    </thead>
    <tbody>
       <?php foreach ($survey as $s) : ?>
            <tr>
                
               
              <td><?php echo $s['fk_user']; ?></td>
              <td><?php echo $s['quality']?></td>
              <td><?php echo $s['recommend']; ?></td>
              <td><?php echo $s['comments']; ?></td>
              
              <td>  
                   
                     <input type="submit" value="Message">
                  </td>
            </tr>
            <?php endforeach; ?>
    </tbody>
  </table>
</div>

</body>
</html>