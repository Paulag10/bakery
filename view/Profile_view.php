<!-- Source         https://www.w3schools.com/html/html_youtube.asp
 Murach's PHP and MySQL (3rd Edition)
w3schoolbootstrap 
-->
<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="Bakery.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value="add" />

            <div class="center">
                <div>
                    <div class="jumbotron jumbotron-fluid">
                        <aside>

                            <ul>
                                <ul>
                                    <a href="index.php?action=viewHome"> Home </a>

                                </ul>
                            </ul>
                        </aside>

                        <h1><?php echo htmlspecialchars($sweet['sweetsName']); ?></h1>      
                    </div>

                    <div>
                        <p> <img src="images/<?php echo htmlspecialchars($sweet['sweetsCode']); ?>.jpg"</p>
                    </div>
                    <div>

                        <div>
                            <p><b>Your Price:</b>

<?php echo '$' . htmlspecialchars($sweet['listPrice']); ?></p>




                            <input type="submit" value="Your goddie" />
                        </div>
                    </div>
                    </form>

                </div>
                </body>
                </html>
