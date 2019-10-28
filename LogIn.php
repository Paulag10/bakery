<?php
if (!isset ($loginPassword)) { $loginPassword="";}

if (!isset($loginUName)) { $loginUName = '' ;}
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">

        <link href="Bakery.css" rel="stylesheet"/>
        <title> Log In </title>
    </head>
    
    <body>
       

        <form action="index.php" method="POST">
             <input type="hidden" name="action" value="logIn" />
            <div class="main-layouts wrapper">
                <h1> LogIn <img src="images/Cupcake.jpg" alt="Avatar" class="avatars">
                </h1>
               <div class="main-layouts wrapper">
                    <div class="agileits-top">
                        <label> User Name </label>
                        <input type="text" name="loginUName" required><br>


                        <label> Password </label>
                         <form action="index.php" method="POST">
             <input type="hidden" name="action" value="logIn" />
                        <input type="password" name="loginPassword">
                <input type="submit"  value="login">
                         </form>
                    </div>


                </div>
            </div>
        </form>
    </body>
</html>
