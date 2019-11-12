<!-- Source         https://www.w3schools.com/html/html_youtube.asp
 Murach's PHP and MySQL (3rd Edition)-->
 
<!DOCTYPE html>
<html>

    <head>'

        <title>Paula's Sweets </title>
        <link href="Bakery.css" rel="stylesheet"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
           <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <main>
            <form action="index.php">
                <div class="jumbotron jumbotron-fluid">
    <h1>Sweet Shop</h1>      
    </div>
               <aside>


                    <nav>
                        <ul>
                             
                           <li><a href="index.php?action=logOut">Log Out</a></li>
                            <li><a href="ProfileHome.php">Home</a></li>
                             <?php foreach ($sweetTypes as $sweetType) : ?>
                                <li>
                                    <a href="?action=list_sweets&amp;SweetTypeID=<?php echo $sweetType->getSweetTypeID(); ?>">
                                        <?php echo $sweetType->getSweetTypeName(); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </aside>
                <section>

                        <table class="table table-striped">
    
    <tbody>
       <tr>
                            <?php if (count($sweets) == 0) : ?>
                            <ul><li>Select a Sweet Treat.</li></ul>
                            <div class="center">
                                <iframe width="420" height="345" src="https://www.youtube.com/embed/YsxtAMlWfj8?autoplay=1">
                                </iframe>

                            </div>

                        <?php else: ?>
                           
                            <tr>
                                <?php foreach ($sweets as $sweet) : ?>
                
               <td>   <a href="?action=view_sweets&amp;sweetsID=<?php echo $sweet['sweetsID']; ?>"><br> <br> <br>
                      <h3> <?php echo $sweet['sweetsName']; ?><br></h3>
                       <td>  <?php echo $sweet['description']; ?></td>
                      
                       <td> <img src="images/<?php echo htmlspecialchars($sweet['sweetsCode']); ?>.jpg"</td>

                                </a></td>
             
              
               
            </tr>
            <?php endforeach; ?>
         <?php endif; ?>
    </tbody>
  </table>
</div>

 </html>

