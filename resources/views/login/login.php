<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="">
        <input type="text" placeholder="Username"><br>
        <input type="text" placeholder="Password"><br>
        <input type="submit" value="Login">
        <ul>
            <?php
            for ($i = 0; $i <= 10; $i++) {
                echo "$i";
            }
            ?>
        </ul>
    </form>

</body>

</html>