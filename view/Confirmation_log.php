<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <title>Bakery</title>
        <script src="https://bootstrapcreative.com/wp-bc/wp-content/themes/wp-bootstrap/codepen/bootstrapcreative.js?v=1"></script>

        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css'>

 </head>
    <aside>

        <ul>
            <ul>
                <a href="index.php?action=viewHome"> Home </a>

            </ul>
        </ul>
    </aside>
    <body>

        <div class="jumbotron text-xs-center">
            <h1 class="display-3">Thank You!</h1>

            <td><?php echo $selectedUser->getFName() . " " . $selectedUser->getLName(); ?></td>
            <p class="lead"><strong> For Signing up for this Event!!</p>

            <p> <img src="images/<?php echo htmlspecialchars($selectedEvent['eventCode']); ?>.jpg"</p>
            <hr>
            <p>
                <?php echo htmlspecialchars($selectedEvent['eventName']); ?>
            </p>
            <p>
                <?php echo htmlspecialchars($selectedEvent['eventDiscription']); ?>
            </p>

            <p class="lead">
                <label> Location and Time </label>&nbsp;<br>
                <?php echo htmlspecialchars($selectedEvent['eventLocation']) . " <br>" . htmlspecialchars($selectedEvent['eventTime']); ?>
            </p>
        </div>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js'></script>

 </body>
</html>
