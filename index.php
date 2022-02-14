<?php
$paragraph = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, nulla dolores sapiente velit a aspernatur laborum nisi vitae debitis non mollitia blanditiis, dignissimos autem assumenda minus, quos totam architecto quisquam.
';
$censure = $_GET['censure'];
$censured=str_replace($censure,'***', $paragraph);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
</head>
<body>
    <h1>PHP Bad Words</h1>
    <p><?php echo $paragraph; ?></p>
    <p>il paragrafo è composto da <?php echo strlen(
        $paragraph
    ); ?> caratteri</p>
    <hr />
    <h3>Censurando la parola che l'utente ci invia come query</h3>
    <p><?php echo $censured?></p>
    <p>il paragrafo è composto da <?php echo strlen(
        $censured
    ); ?> caratteri</p>

</body>
</html>