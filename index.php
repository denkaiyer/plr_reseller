

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

    </head>

    <body>
      <div class="se-pre-con"></div>

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
                              <form method="post" action="main.php">

                              <!-- old original boostrap  -->
                            <div class="form-group">
                              <input type="text" name="brandname" placeholder="Enter Brand Name ..." class="contact-subject form-control">
                            </div>

                              <div class="form-group">
			                        	<input type="text" name="prodname" placeholder="Enter Product Name ..." class="contact-subject form-control">
			                        </div>

                              <div class="form-group">
			                        	<textarea name="paypal_link" placeholder="Enter PayPal Link ..." class="contact-message form-control"></textarea>
			                        </div>

                              <button type="submit" class="btn">Submit Record</button>
                              <br/>
                              <br/>
                              <p>Already done this?</p>
                              <a href ="main.php">Check records are correct</a>

                          </form>

		                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
