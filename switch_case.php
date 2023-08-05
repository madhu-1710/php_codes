<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>

<body>
    <form action="" method="get">
        <label for="input">Enter The Day :</label>
        <input type="text" name="input" id="input">
        <input type="submit" value="View Result" name="submit">

        <?php

        if (isset($_GET['submit'])) {
            $input = $_GET['input'];
        }

        switch ($input) 
        {
            case "sunday":
                echo "This is Sunday.....Shall we go for a movie?";
                break;

            case "monday":
                echo "Today Is Monday....You should go to Office!";
                break;

            case "friday":
                echo "Friday is the best day of week!!";
                break;

            default:
                echo "This is Weekend....So Enjoy Your Weekend";
        }
        ?>

    </form>
</body>

</html>