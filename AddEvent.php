<?php {
   
    ?>

    <html>
        <head>
            <meta charset="UTF-8">
            <title>Add Events</title>
            <link rel="stylesheet" type="text/css" href="Bakery.css"/>
        </head>
       
        <body>
            <h1> Add Events <img src="images/Cupcake.jpg" alt="Avatar" class="avatars">
            </h1>
           
            <ul>

                <li><a href="Admin_view.php"> Home </a></li>
            </ul>
            <form action="." method="post" id="aligned">
                <input type="hidden" name="action" value="add_event">
                <table>
                    <tr>
                        <th>Event Code</th>
                    <br>
                    <th>Event Name</th>
                    <br>
                 
                    <th>Description</th>
                    
                    <br>
                    <th>Location</th>
                    <br>
                    <th> Time </th>
                    <br>
                    <th>Cost</th>
                    <td> &nbsp;</th>
                        <br>
                        <br>

                        </tr>
                    <tr>
                        <td><input type="text" name="eventCode" required></td><br>
                    <td><input type="text" name="eventName" required></td><br>
                    <td><input type="text" name="eventDiscription" required></td><br>
                    <td><input type="text" name="eventLocation" required></td><br><br>
                    <td><input type="text" name="eventTime" required></td><br><br>
                    <td><input type="number" name="eventCost" required></td><br><br>
                    <td>  <input type="submit" value="Add event" name="event"> <br> </td>

                    </tr>
                </table>


            </form>

        <?php }
        ?>

    </body>
</html>