<!-- Source         https://www.w3schools.com/html/html_youtube.asp
 Murach's PHP and MySQL (3rd Edition)
w3schoolbootstrap 
-->
<?php

   
    $sweetType = $sweet['sweetTypeID'];
    $sweetsCode = $sweet['sweetsCode'];
    $sweetsName = $sweet['sweetsName'];
    $description = $sweet['description'];
    $list_price = $sweet['listPrice'];
    $tax = .50;
 $unit_price = $list_price + $tax;
 $unit_price_f = number_format($unit_price, 2);

   
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
    <h1><?php echo htmlspecialchars($sweetsName); ?></h1>      
    </div>

<div>
       <p> <img src="images/<?php echo htmlspecialchars($sweet['sweetsCode']); ?>.jpg"</p>
</div>
<div>

<div>
      <p><b>List Price:</b>
        <?php echo '$' . $list_price; ?></p>
    <p><b>Your Price:</b>
        <?php echo '$' . $unit_price_f; ?>
        (Your tax <?php echo '$' . $tax; ?>)</p>
    <form action="index.php" method="get" 
          id="cart_form">
        <input type="hidden" name="action" value="add" />
        <input type="hidden" name="sweetsID"
               value="<?php echo $sweetID; ?>" />
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
