<?php


$articles = [
    [

    "title"     => "First post",
    "content"   => "This is the first of many posts"

    ],

    [

    "title"     => "Another post",
    "content"   => "Yet another fascinating post.."
    
    ],


    [

     "title"     => "Read this",
     "content"   => "You must read this now, it's essential reading"
        
    ],


    [

        "title"     => "My footer",
        "content"   => "You must read to the footer of my page"
           
       ],
           
        

];

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
            </li>
        <?php endforeach;?>
    </ul>
</main>
    
</body>
</html>