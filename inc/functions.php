    <?php

    // Force the user to logged in or redirect

    function forceLogin() {

    if(isset($_SESSION['user_id'])) {
        // User is allowed here
    }   else {
        // User is not allowed here
        header("Location: /php_login_course/login.php"); exit;
    }   
    }

    function forceDashboard() {

    if(isset($_SESSION['user_id'])) {
        // User is allowed here but redirect anyway
        header("Location: /php_login_course/dashboard.php"); exit;
    }   else {
        // User is not allowed here
        
    }   
    }

    ?>
