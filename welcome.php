<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="/welcome.php">

Name:  <input type="text" name="name" value="">
  <input type="submit" name="submit" value="submit" id="">
<a href=""></a>
</form>
    Welcome 
    <?php

    $name = $_GET['name'];
    echo $name
    ?>
</body>

</html>