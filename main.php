
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

                              <?php
                              if(isset($_POST['brandname']) || isset($_POST['prodname']) || isset($_POST['paypal_link'])){
                                $brandname = $_POST['brandname'];
                                $prodname = $_POST['prodname'];
                                $paypal_link = $_POST['paypal_link'];

                                echo "<h3><b>Current input results for:<br/></b>$brandname</h3><br/>";
                                echo "<b>Brand name: </b>" . "$brandname" . "<br/>";
                                echo "<b>Product name: </b>" . "$prodname" . "<br/>";
                                echo "<b>PayPal payment link: </b>" . "$paypal_link" . "<br/><br/>";
                                echo "<p><b>Need to change this information?</b></p>";
                                echo "<p>Click the link below to re-enter your inputs anytime.</p>";
                                echo '<p><a href ="index.php">Return To Inputs Page</a></p>';

                              }


                              elseif (!isset($_POST['brandname' || 'prodname' || 'paypal_link']))
                              {
                                echo "<h1><b>Action Needed</b></h1>";
                                echo "You don't have records</br>";
                                echo '<a href="index.php"> Return To Inputs Page</a>';
                              }

                              ?>

                        		</div>
                        		<div class="form-top-right">
                            <i class="fas fa-cogs"></i>
                            </div>
                          </div>



		                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

    </body>
</html>
