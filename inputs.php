<?php

 ?>


 <!DOCTYPE html>
 <html lang="en">

     <head>

         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Branded Products Input Page</title>

         <!-- CSS -->
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
         <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
         <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
 		<link rel="stylesheet" href="assets/css/form-elements.css">
         <link rel="stylesheet" href="assets/css/style.css">

         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
         <!--[if lt IE 9]>
             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
             <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
         <![endif]-->

         <!-- Favicon and touch icons -->
         <link rel="shortcut icon" href="assets/ico/favicon.png">
         <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
         <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
         <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
         <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

     </head>



  <body>

    <!-- Top content -->
    <div class="top-content">
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>Branded Products Input Form</strong></h1>
                        <div class="description">
                          <p></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">

                      <div class="form-top">
                        <div class="form-top-left">
                          <p>
                            This is where you'll enter your products branded information.
                          </p>
                        </div>
                        <div class="form-top-right">
                        <i class="fas fa-cogs"></i>
                        </div>
                      </div>

                        <div class="form-bottom contact-form">
                      <form action="main.php" method="post">
                        <div class="form-group">






                      </form>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

    <h2>Branded Product Inputs Page</h1>
    <p>This is where you'll enter your products branded information.</p><br>

    <div class="form">
    <form action="main.php" method="post" id="brandinputs">
      <!-- This is the name they want to present to the end user as the "creator" of the product. Can be an individual or business name. -->
      Brand Name:  <input type="text" name="brandname" /><br /><br />
      <!-- This is going to be the name that the user decides for the end result product they will sell.  -->
      Product Name: <input type="text" name="prodname" /><br /><br />
      <!-- This is where you enter your paypal payment link so that you can get paid when someone makes a purchase of your branded product. -->
      PayPal Payment Link:<br/><br/>
      <textarea rows="4" cols="50" name="paypal_link" form="brandinputs"></textarea><br /><br />
      <input type="submit" name="submit" value="SUBMIT" />
    </form>
    <br/>
    <p>Already done this?</p>
    <a href ="main.php">Check records are correct</a>

    </div>




  <?php
  if (isset($_POST['submit']))
    {
    // Execute this code if the submit button is pressed.
    $formvalue = $_POST['input_value'];
    }
  ?>

  </body>
</html>
