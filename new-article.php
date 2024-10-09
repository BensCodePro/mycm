<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    var_dump($_POST);
    
$sql = "INSERT INTO articles(title, content, published_at)
VALUES('" .$_POST['title'] . "','"
          .$_POST['content'] . "','"
          .$_POST['published_at']. "')";

       
     // Improtant what ID that iam parsing to..
         var_dump($sql);

$results = mysqli_query($conn, $sql);

if ($results === false) {

    echo mysqli_error($conn);

} else {

    $article = mysqli_fetch_assoc($results);
}

}else{
    $article = null;

}


?>
<?php require 'includes/header.php'; ?>
        <?php if ($article === null): ?>
            <p>Article not found.</p>
        <?php else: ?>

            <article>
                <h2><?= $article['title']; ?></h2>
                <p><?= $article['content']; ?></p>
            </article>

        <?php endif; ?>

        <?php require 'includes/footer.php'; ?>
