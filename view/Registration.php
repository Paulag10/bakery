<?php
if (!isset($fName)) {
    $fName = '';
}
if (!isset($lName)) {
    $lName = '';
}
if (!isset($uName)) {
    $uName = '';
}
if (!isset($loginUName)) {
    $loginUName = '';
}
if (!isset($email)) {
    $email = '';
}
if (!isset($password)) {
    $password = "";
}
if (!isset($loginPassword)) {
    $loginPassword = "";
}
if (!isset($err['fName'])) {
    $err['fName'] = "";
}
if (!isset($err['lName'])) {
    $err['lName'] = "";
}
if (!isset($err['uName'])) {
    $err['uName'] = "";
}
if (!isset($err['noEmail'])) {
    $err['noEmail'] = "";
}
if (!isset($err['email'])) {
    $err['email'] = "";
}
if (!isset($err['invalidEmail'])) {
    $err['invalidEmail'] = "";
}
if (!isset($err['NameTaken'])) {
    $err['NameTaken'] = "";
}
if (!isset($err['emailTaken'])) {
    $err['emailTaken'] = "";
}
if (!isset($err['shortPass'])) {
    $err['shortPass'] = "";
}
if (!isset($err['lcasePass'])) {
    $err['lcasePass'] = "";
}
if (!isset($err['ucasePass'])) {
    $err['ucasePass'] = "";
}
if (!isset($err['digPass'])) {
    $err['digPass'] = "";
}
if (!isset($err['uNamefirstchar'])) {
    $err['uNamefirstchar'] = "";
}
if (!isset($err['lNamefirstchar'])) {
    $err['lNamefirstchar'] = "";
}
if (!isset($err['fNamefirstchar'])) {
    $err['fNamefirstchar'] = "";
}
?>



<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <link href="Bakery.css" rel="stylesheet"/>

        <title>Join Us</title>
    </head>
    <body>
        <ul>

            <li><a href="index.php?action=default"> Home </a></li>
            <img src="images/Rustic.jpg" style="width:10%">
            <img src="images/Smores.jpg" style="width:10%">
            <img src="images/Oreo-Truffles.jpg" style="width:10%">
            <img src="images/Rustic.jpg" style="width:10%">
            <img src="images/Smores.jpg" style="width:10%">
            <img src="images/Oreo-Truffles.jpg" style="width:10%">
            <img src="images/Rustic.jpg" style="width:10%">
            <img src="images/Smores.jpg" style="width:10%">
            <img src="images/Oreo-Truffles.jpg" style="width:10%">

        </ul>

        <form action="index.php" method="post">
            <input type="hidden" name="action" value="register" />

            <div class="main-layouts wrapper">
                <h1>Paula Sweets  <img src="images/Cupcake.jpg" alt="Avatar" class="avatars">
                </h1>
                <div class="main-agileinfo">
                    <div class="agileits-top">


                        <label>First Name:</label>

                        <input type="text" name="fName" value="<?php echo htmlspecialchars($fName); ?>">
                        <label class="err"><?php
                            echo htmlspecialchars($err['fName']);
                            echo htmlspecialchars($err['fNamefirstchar']);
                            ?></label>

                        <br>
                        <label>Last Name:</label>

                        <input type="text" name="lName" value="<?php echo htmlspecialchars($lName); ?>">
                        <label class="err"><?php
                            echo htmlspecialchars($err['lName']);
                            echo htmlspecialchars($err['lNamefirstchar'])
                            ?></label><br>

                        <label>Email Address:</label>
                        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
                        <label class="err"><?php echo htmlspecialchars($err['email']) . htmlspecialchars($err['emailTaken']); ?></label><br>

                        <label>User Name:</label>
                        <input type="text" name="uName" value="<?php echo htmlspecialchars($uName); ?>">
                        <label class="err"><?php
                            echo htmlspecialchars($err['uName']);
                            echo htmlspecialchars($err['NameTaken']);
                            echo htmlspecialchars($err['uNamefirstchar']);
                            ?></label><br>

                        <label>Password</label>
                        <input type="password" name="password" value="<?php echo htmlspecialchars($password); ?>">
                        <label class="err"><?php
                            echo htmlspecialchars($err['shortPass']);
                            echo htmlspecialchars($err['lcasePass']);
                            echo htmlspecialchars($err['ucasePass']);
                            echo htmlspecialchars($err['digPass']);
                            ?></label><br>

                            <input type="submit" value="SIGNUP" style="width: 80%;"> 

                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
