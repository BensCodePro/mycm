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
    <p>Which colour do you like</p>
    <input type="radio" name="colour" value="blue" checked>Blue<br>
    <input type="radio" name="colour" value="red">Red<br>
    <input type="radio" name="colour" value="green">Green<br>

    <button>Send</button>
</div>

</form>


    
</body>
</html>