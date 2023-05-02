<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shariati Project</title>
</head>
<body style="background-color: #ccc;display: flex; justify-content: center; align-items: center; height: 100vh;">

    <style>
        input{
            outline: none;
            padding: 5px 10px;
            border-radius: 7px;
            border: 1px solid blue; 
        }

        button{
            padding: 5px 10px;
            border: 1px solid gray;
            background-color: blue;
            color: white;
            border-radius: 7px;
            transition: .2s all ease-in-out;
            cursor: pointer;
        }

        button:hover{
            background-color: transparent;
            color: blue;
        }

        form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 1rem;
            width: 400px;
            height: 400px;
            background-color: white;
            border-radius: 10px;
        }
    </style>    

        <form action="secondPage.php" method="POST">
            <input required type="text" placeholder="username" name="username">
            <input required name="email" type="email" placeholder="email">
            <input required type="password" placeholder="Password" name="password">
            <input required type="password" placeholder="Password" name="repeatedPassword">
        
            <button type="submit">Submit</button>
        </form>
</body>
</html>