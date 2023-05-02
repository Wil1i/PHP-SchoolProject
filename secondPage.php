<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        *{
            text-align: center;
        }
        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ccc;
        }

        div{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap : 1rem;
            background-color: white;
            border-radius: 10px;
            width: 300px;
            height: 300px;
        }
    </style>

    <div>
        <p> User <?php echo $_POST['username']; ?> Registered.</p>
        <p> Your email is <?php echo $_POST['email']; ?> </p>
        <p><?php if($_POST['password'] == $_POST['repeatedPassword']) {echo $_POST['password'];}else{echo "Your password doesn't match";} ?></p>
    </div>
</body>
</html>