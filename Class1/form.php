<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>GET</h1>
    <form method="GET" action="get.php">
        <label>Email<input name="email" type = "email"/></label>
        <label>Password<input name="password" type = "password"/></label>
        <button type="submit">GetSubmit</button>
    </form>
    <h1>POST</h1>
    <form method="POST" action="post.php">
        <label>Email<input name="email" type = "email"/></label>
        <label>Password<input name="password" type = "password"/></label>
        <button type="submit">PostSubmit</button>
    </form>
</body>
</html>