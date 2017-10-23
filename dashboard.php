<?php 

    // Allow the config
    define('__CONFIG__', true);
    // Require the config
    require_once "inc/config.php"; 

    forceLogin();

    $User = new User($_SESSION['user_id']);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="follow" />

        <title>Page Title</title>
        
        <base href="/" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css" />
    </head>
    
    <body>
        
        <div class="uk-section uk-container">
            <h2>Dashboard</h2>
            <p> Hello <?php echo $User->email; ?>, you registered at <?php echo $User->reg_time; ?></p>
            <p><a href="/php_login_course/logout.php">Logout</a></p>
        </div>
        
        <?php include_once "inc/footer.php"; ?>
        
    </body>
</html>