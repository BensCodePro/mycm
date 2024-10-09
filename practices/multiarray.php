<?php 

$articles = [
    ["title" => "first post","content"=>"This is the first post"],
    ["title" => "Another post","content"=>"Another post to read here"],
    ["title" => "Read this","content"=>"You must read this article"],
];



var_dump($articles[0]["title"]);
var_dump($articles[1]["title"]);
var_dump($articles[2]["title"]);
'<br>';


var_dump($articles[0]["content"]);
var_dump($articles[1]["content"]);
var_dump($articles[2]["content"]);