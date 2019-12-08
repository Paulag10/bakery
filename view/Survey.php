<!DOCTYPE html>
<html>
    <head>
        <title>Survey</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Bakery.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
</head>
<body>
    <div class="jumbotron text-center">
        <h1> Paula's Sweets Survey <img src="images/Cupcake.jpg" alt="Avatar" class="avatars">
        </h1>
    </div>
    <ul>

        <a href="index.php?action=viewHome"> Home </a>

    </ul>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="images/customer-survey.png" style="width:90%" >      
            </div>
            <div class="col-sm-4">

                <form action="." method="post" id="aligned">
                    <input type="hidden" name="action" value="Log_survey">
                    <div>  
                        <p> What did you enjoy the most about your treat? </p>
                    </div>

                    <div>
                        <textarea rows="6" cols="30" name="quality" placeholder="What did you enjoy the most about your treat?" required></textarea>


                    </div>
                    <div>
                        <p>Will You be Inviting a Friend To Paula's Sweets?</p>
                    </div>

                    <div>

                        <input type="radio" name="recommend" value="Yes" required>YES<br>
                        <input type="radio" name="recommend" value="No" required>NO<br>


                    </div>
                    <div>
                        <p>Any Comments or Suggestions?</p>
                    </div>

                    <div>
                        <textarea rows="6" cols="30" name="comments" placeholder=" Leave a Suggestions" required></textarea>

                        <form action="index.php" method="POST">
                            <input type="hidden" name="action"
                                   value="Log_survey">
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


