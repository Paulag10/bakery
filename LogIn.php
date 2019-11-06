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
              <div class="main-agileinfo">
                <div class="agileits-top">
                    <lable> User Name </lable>
                    <input class="forms" type="text" name="loginUName" required><br>
                    
                    <label> Password </label> 
                    <input class="forms" type="password" name="loginPassword" required><br>
                    
                    <input class="sub" type="submit" value="Submit"><br>
                    <p> Not Yet a member!
                        <a href="index.php?action=register"> Join Us </a></p>
                </div>
                </div>

        </form>

        </form>
    </body>
</html>