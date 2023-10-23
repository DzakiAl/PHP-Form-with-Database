<?php include("database.php") 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Form</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            padding: 0;
            margin: 0;
        }

        .form {
            margin: 25vh 0 0 0;
        }

        .title {
            font-size: 3.5vw;
        }

        .input input {
            margin: 0 0 1vw 0;
            background-color: transparent;
            border: none;
            border-bottom: 0.15vw solid white;
            width: 25vw;
            height: 2.5vw;
            color: white;
        }

        .submit {
            background-color: transparent;
            color: white;
            width: 12vw;
            height: 4vw;
            font-size: 1.25vw;
            border: none;
            border: 0.2vw solid white;
            transition: 0.25s all ease-in-out
        }

        .submit:hover {
            background-color: white;
            color: black;
            transition: 0.25s all ease-in-out;
        }
    </style>
</head>
<body>
    <form class="form" align="center" action="output.php" method="post">
        <h1 class="title">Biodata Form</h1>
        <div class="input">
            <input type="text" name="name" placeholder="Your name"><br>
            <input type="text" name="birth" placeholder="Your birth (example: 1 January 2000)"><br>
            <input type="text" name="address" placeholder="Your address"><br>
        </div>
        <input type="submit" class="submit">
    </form>
    </div>
</body>
</html>