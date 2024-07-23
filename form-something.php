<?php 

$text = $_POST["phrase"];
$bad_word = $_POST["bad-word"];

$replace_word = str_replace($bad_word, "***", $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Result</title>
</head>
<body>
    <div>
        <h2>Testo Originale:</h2>
        <p>
            <?php echo $text ?> 
        </p>
        <h5>Lunghezza testo originale: <?php echo strlen($text) ?></h5>

        <h2>Testo censurato:</h2>
        <p>
            <?php echo $replace_word ?> 
        </p>
        <h5>Lunghezza testo censurato: <?php echo strlen($replace_word) ?></h5>
    </div>    

</body>
</html>