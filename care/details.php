<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </head>
        <body>

        <h1 align="center">Welcome to my assignment page</h1>
        <div class="jumbotron">
            <a href="index.php" class="btn btn-info" role="button">Home</a>
            <a class="btn btn-info" role="button" href="sponsors.html">Sponsors</a>
            <a href="login.php" class="btn btn-info" role="button">Login</a>
        </div>
        <?php
            include 'connection.php';
            $sql = "SELECT * FROM child";
            $result = $conn->query($sql);
            if ($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo $row["given_name"],"\t", $row["family_name"],"\t", $row["gender"],"\t", $row["dob"],"\t", $row["daily_message"];
                    echo "<br>";
                }
            }
			
		
        ?>
    </body>
    </html>