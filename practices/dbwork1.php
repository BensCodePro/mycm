
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

      
        }
           


        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work with DB</title>
</head>
<body>

<header>

<h1>My blog</h1>
</header>

<main>
    <ul>
        <?php foreach($articles as $article):?>
            <li>
                <h2><?= $article["title"];?></h2>
                <p><?= $article["content"];?></p>
                <p><?= $article["estado_articulo"];?></p>
                <p><?= $article["published_at"];?></p>
            </li>
        <?php endforeach;?>
    </ul>
</main>
    
</body>
</html>