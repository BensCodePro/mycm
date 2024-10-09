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
</head>
<body>

<form method="post">

<fieldset>
    <legend>Article</legend>
<div>
<label for="title">Title: <input  id="title" name="content" placeholder="title" readonly></label>
</div>
</fieldset>


<fieldset>
    <legend>Content</legend>
<div>
Content: <textarea name="content" rows="4" cols="40" placeholder="Content"></textarea>
</div>
</fieldset>

<div>
    <label><input  type="checkbox" name="visible"value="yes"> Visible</label>
</div>


<fieldset>
<div>
   <legend> <p>Colours</p></legend>

      
    
    <label><input type="radio" name="colour" value="red" checked >RED</label><br>

    
    <label><input type="radio" name="colour" value="blue" disabled>GREEN</label><br>
    

    <label><input type="radio" name="colour" value="green" checked >GREEN</label>

    
</div>


</fieldset>

<button>Send</button>




  

</form>
    
</body>
</html>