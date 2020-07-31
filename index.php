<?php
    // allow the config
    define('__CONFIG__', true);
    //require the config
    require_once "inc/config.php";
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>INDEX PHP</title>
    <base href="/" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css">
                          <!-- UIkit CSS -->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/css/uikit.min.css" /> -->
  </head>
  <body>
    <div class="uk-section uk-container ">
      <?php echo "HELLO WORLD! Today is: ";
      echo date('Y d m');
      ?>
       <p>
        <a href="/Learn_login/php_login_course/login.php">login </a>
        <a href="/Learn_login/php_login_course/register.php">register </a>
      </p>
    </div>

    <?php require_once "inc/footer.php"; ?>


  </body>
</html>
