<?php
    include("database.php");

    $name = $_POST["name"];
    $birth = $_POST["birth"];
    $address = $_POST["address"];

    $sql = "INSERT INTO biodata_tb (name, birth, address) VALUES ('$name', '$birth', '$address')";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Form</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: black;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            margin: 45vh 0 0 0;
        }
    </style>
</head>
<body>
    <div align="center" class="container">
        <h1>
            <?php
                try {
                    mysqli_query($conn, $sql);
                    echo "Data sent to the database!";
                } catch (mysqli_sql_exception $e) {
                    echo "Data failed to send to the database: " . $e->getMessage();
                }
                
                mysqli_close($conn);
            ?>
        </h1>
    </div>
</body>
</html>