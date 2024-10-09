<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

var_dump($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <meta charset="utf-8">
</head>
<body>
    <form method="post">

    <div>
        postcode: <input name="postcode" pattern="">
    </div>

    <div>
        email : <input type="email" name="email"required>
    </div>


    <div>
        url : <input type="url" name="url">
    </div>


    <div>
        number: <input type="number" name="count">
    </div>


    <button>Send</button>

    </form>
    
</body>
</html>