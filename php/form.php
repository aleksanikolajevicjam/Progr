<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php
if(!empty($_POST['name'])) {
    echo "Greetings, {$_POST['name']}, and welcome.";
}
#######################
## Cookie functions
#######################
$person[0] = "Edison";
$person[1] = "Wankel";
$person[2] = "Crapper";




?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    Enter your name: <input type="text" name="name">
    <input type="submit">
</form>
</body>
</html>