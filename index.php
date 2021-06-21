<?php 
$my_text = "Fuck what I said it don't mean shit now
Fuck the presents might as well throw em out
Fuck all those kisses, they didn't mean jack
Fuck you, you hoe, I don't want you back
Fuck what I said it don't mean shit now
Fuck the presents might as well throw em out
Fuck all those kisses they didn't mean jack
Fuck you, you hoe, I don't want you back";
$word = $_GET["word"]
#str_replace(porzioneDaModificare, conCosa, stringa)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <p> <?php echo str_replace($word, "***", $my_text) ?> </p>
</body>
</html>