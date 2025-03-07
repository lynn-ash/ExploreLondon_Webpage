<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="styles.css">
        <link rel="shortcut icon" href="phonebooth.png">
        <script src="buttons.js"></script>
    </head>
    <body>
        <!--NOTE: **Because there is no php server, this code is not actually being stored anywhere.
                      This (along with the newsletter.html file) is moreso to show how a form 
                      should look like** -->

        <div class="container">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Retrieve form data
                    $fname = $_POST["fname"];
                    $lname = $_POST["lname"];
                    $email = $_POST["email"];
                    $comment = $_POST["comment"];
                
                    // Display the submitted data
                    echo "Thank you for your submission, ". $fname. "<br>";
                    echo "All information regarding special events will be sent to the 
                    email address ". $email. "<br>" ;
                    
                }
            ?>
        </div>
    </body>
         
</html>