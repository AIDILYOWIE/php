<?php 
// sistme login

// mengecek variale / key 
if( isset($_POST["submit"])){
    if( $_POST["username"] == "yojes" && $_POST["password"] == "123"){
        header("Location : admin.php");
        exit;
    }else {
        // header("Location : login.php");
         $error = true;
    };
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 10em;
        }

        form button {
            margin-top: 10px;
        }

        p {
            color: red;
            font-style: italic;
        }
    </style>
</head>

<body>
    <h1>Login</h1>
    <?php if(isset($error)) : ?>
        <p>username / password error</p>
    <?php endif; ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>

            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>

            <li>
                 <button type="submit" name="submit">submit</button>
            </li>
        </ul>    
    </form>
</body>

</html>