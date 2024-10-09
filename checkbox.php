
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

    <p>Which colours do you like?</p>

    <div>

    <input type="checkbox" name="red" value="red">red
    </div>



    <div>

    <input type="checkbox" name="colours[]" value="green">Green
   </div>

   <div>

    <input type="checkbox" name="colours[]" value="blue">blue
    </div>


    <div>

    <input type="checkbox" name="colours[]" value="yes" checked>Yellows
    </div>


    <button>Send</button>



    </form>
    
</body>
</html>