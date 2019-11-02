
<!DOCTYPE html>
<html>


    <head>
        <title>Sweets</title>
        <link rel="stylesheet" type="text/css" href="Bakery.css" />
    </head>

      <table>
            <tr>
                <th>User Name</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($Users as $user) : ?>
            <tr>
                <td><?php echo $user['uName']; ?></td>
                <td><?php echo $user['fName']; ?></td>
                <td><?php echo $user['lName']; ?></td>
                <td><form action="index.php" method="POST">
                    <input type="hidden" name="action"
                           value="delete_User">
                    <input type="hidden" name="uName"
                           value="<?php echo $user['uName']; ?>">
                     <input type="submit" value="Delete">
               </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
</html>
