<!DOCTYPE html>
<html lang="en">
<head>
  <title>Events</title>
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
 <h1> Paula Sweets Survey <img src="images/Cupcake.jpg" alt="Avatar" class="avatars">
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
    <textarea name="quality"> </textarea>
          
    </div>
         <div>
                   <p>Will You be Inviting a Friend To Paula's Sweets?</p>
      </div>
  
      <div>
       
        <input type="radio" name="recommend" value="Yes">YES<br>
        <input type="radio" name="recommend" value="NO">NO<br>
       
      
      </div>
         <div>
    <p>Any Comments or Suggestions?</p>
  </div>
  
  <div>
     
      <textarea name="comments"> </textarea>
      <form action="index.php" method="POST">
                    <input type="hidden" name="action"
                           value="Log_survey">
                    <input type="submit" value="Select">
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


