  if(!isset($_SERVER['HTTP_REFERER'])){
        // redirect them to your desired location
        header('location: http://localhost/wooxtravel/index.php');
        exit;
    }