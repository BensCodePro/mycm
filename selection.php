
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
    <title>Select form</title>
</head>
<body>
    <form method="post">


    <select name="country[]" multiple>

        <optgroup label="Europe">
        <option value="germany">Germany</option>
        <option value="France">France</option>
        <option value="united">United Kingdom</option>
        </optgroup>

         <optgroup label="America">
         <option value="brazil">Brazil</option>
         <option value="canada">Canada</option>
         <option value="states" selected>United states</option>
         </optgroup>
    </select>


    <select name="marque[]" multiple>
        <option  value="bmw">BMW</option>
        <option  value="ford">Ford</option>
        <option  value="saab">Saab</option>
        <option  value="volvo">Volvo</option>
        <option  value="tesla">Tesla</option>


    </select>




    <button>Send</button>




    </form>
    
</body>
</html>