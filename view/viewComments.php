<!DOCTYPE html>
<html>
    <head>
        <title>Comment</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Bakery.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

<body>
    <div class="jumbotron text-center">
        <h1> Admin Comments <img src="images/Cupcake.jpg" alt="Avatar" class="avatars">
        </h1>
    </div>
    <ul>

        <li><a href="index.php?action=viewAdminHome"> Home </a></li>

    </ul>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="images/customer-survey.png" style="width:90%" >      
            </div>
            <div class="col-sm-4">

                <form action="." method="post" id="aligned">
                    <input type="hidden" name="action" value="addComment">

                    <div>
                        <p>Admin Comments</p>
                    </div>

                    <div>
                        <textarea rows="10" cols="40" name="comment" placeholder="Leave a Comment !" required></textarea>

                        <form action="index.php" method="POST">
                            <input type="hidden" name="action"
                                   value="addComment">
                            <input type="submit" value="Select" style="width: 80%;">
                        </form>

                    </div>


            </div>
            <div class="col-sm-4">
                <img src="images/customer-survey.png" style="width:90%" >      

            </div>
        </div>
    </div>

</body>
</html>
