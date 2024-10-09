
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
        text:<input type="text" name="surname" value="Ben">
    </div>

    
    <div>
        password:<input type="password" name="password">
    </div>

    
    <div>
        tel:<input type="tel" name="mytel">
    </div>


    
    <div>
        url:<input type="url" name="myurl">
    </div>


    
    <div>
        date:<input type="date" name="mydate">
    </div>


    
    <div>
        time:<input type="time" name="mytime">
    </div>




    
    <div>
        week:<input type="week" name="myweek">
        
    </div>


    
    <div>
        color:<input type="color" name="myemail">
    </div>


    
    <div>
        email:<input type="email" name="myemail">
    </div>



    
    <div>
        month:<input type="month" name="mymonth">
        
    </div>


    
    <div>
        range:<input type="range" name="myrange">
    </div>


    <div>
        hidden:<input type="hidden" name="invisible" value="12344">
    </div>





    
    <div>
        search:<input type="search" name="mysearch">
    </div>



    
    <div>
        datetime-local:<input type="datetime-local" name="local">
    </div>

    <div>
      <textarea name="bbbb" id="" rows="7" cols="50">Hello</textarea>
    </div>




     <button>Send</button>


</form>
    
</body>
</html>