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
        <div class="center">
<div>
    <div class="jumbotron jumbotron-fluid">
    <h1><?php echo htmlspecialchars($sweet['sweetsName']);  ?></h1>      
    </div>

<div>
       <p> <img src="images/<?php echo htmlspecialchars($sweet['sweetsCode']); ?>.jpg"</p>
</div>
<div>

<div>
      <p><b>Your Price:</b>
        <?php echo '$' .  htmlspecialchars($sweet['listPrice']); ?></p>
   
        <b>Quantity:</b>&nbsp;
         <select name="quantity">
         <?php for($i = 1; $i <= 10; $i++) : ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
                <?php endfor; ?>
                </div>
        <input type="submit" value="Your goddie" />
        </div>
</div>
    </form>
    
</div>
    </body>
    </html>
