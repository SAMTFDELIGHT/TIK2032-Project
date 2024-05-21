<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Personal Homepage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="">
            <img src="assets/profilephoto.jpg" alt="my-avatar" />>
        </div>
        <ul>
            <li>
                <a href="index.html">Home</a>
            </li>
        </ul>
    </nav>
    <h1>Blog</h1>

    <?php
    $mysqli = new mysqli("SA-LAPTOP-QL4TOT5C", "localhost", "localhost", "portfolio_db");

    if ($mysqli === false) {
        die("ERROR: Could not connect. " . $mysqli->connect_error);
    }

    $sql = "SELECT * FROM Blog";
    $result = $mysqli>query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<article>";
            echo "h3>".$row['title']."</h3";
            echo "img src='".$row[image"]."' alt='Coming Soon!>";
            echo "<p> /$row['content']."</p>;
            echo "</article>";
        }
    } else {
        echo "0 result";
    }

    $mysqli->close();
    ?>
    
</body>
