<?php 

$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_www";
$db_pass = "PPkD7Ta2lp[i)J1B";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: ".mysqli_connect_error();
    exit;
}


$sql = "SELECT *
        FROM articles
        ORDER BY published_at";

        $results= mysqli_query($conn,$sql);

        if($results === false){
            echo mysqli_error($conn);
            
        }else{
            $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);

            //var_dump($articles);
        }
            


