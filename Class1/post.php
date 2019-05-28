<?php
$email = $_POST['email'];
$pass = $_POST['password'];
echo $email ."<br/>";
echo $pass;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Dang nhap thanh cong voi email: <?php echo $email;?></h1>
</body>
</html>