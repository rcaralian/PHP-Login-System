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

    function FindUser($con, $email, $return_assoc = false) {
        // Make sure the user does not exist. 
        $email = (string) Filter::String( $email );
		$findUser = $con->prepare("SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
		$findUser->bindParam(':email', $email, PDO::PARAM_STR);
		$findUser->execute();
        
        if($return_assoc) {
            return $findUser->fetch(PDO::FETCH_ASSOC);
        }
        
        $user_found = (boolean) $findUser->rowCount();
        
        return $user_found;
    }

    ?>
