<?php {
    ?>

    <html>
        <head>
            <meta charset="UTF-8">
            <title>Add Events</title>
            <link rel="stylesheet" type="text/css" href="Bakery.css"/>
            <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        </head>

        <body>
            <h1> Add Events <img src="images/Cupcake.jpg" alt="Avatar" class="avatars">
            </h1>

            <ul>

                <li><a href="index.php?action=viewAdminHome"> Home </a></li>
            </ul>
            <form action="." method="post" id="aligned">
                <input type="hidden" name="action" value="add_event">



                <div class="container-fluid">
                    <div class="container">
                        <div class="formBox">


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="inputBox ">
                                        <div class="inputText">Event Code</div>
                                        <textarea  type="text" name="eventCode" style="width:80%;" required></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="inputBox">
                                        <div class="inputText">Event Name</div>
                                        <textarea  type="text" name="eventName" style="width:80%;"  required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="inputBox">
                                        <div class="inputText">Description</div>
                                        <textarea type="text" name="eventDiscription" style="width:80%;"  required></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="inputBox">
                                        <div class="inputText">Location</div>
                                        <textarea type="text" name="eventLocation" style="width:80%;"  required></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="inputBox">
                                        <div class="inputText">Time</div>
                                        <textarea  type="text" name="eventTime" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="inputBox">
                                        <div class="inputText">Cost</div>
                                        <textarea  type="number" name="eventCost" required></textarea>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>  



                <div style="text-align:center">  
                    <input type="submit" value="Add event" name="event" > 

                </div>


            </form>

        <?php }
        ?>

    </body>
</html>