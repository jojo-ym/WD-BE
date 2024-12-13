<?php
include('connect.php');

if (isset($_GET['islandOfPersonalityID'])) {
    $islandOfPersonalityID = $_GET['islandOfPersonalityID'];
    $islandQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = '$islandOfPersonalityID'";
    $islandResult = executeQuery($islandQuery);
    $row = mysqli_fetch_assoc($islandResult);
}


$islandQuery = "SELECT * FROM islandsofpersonality";
$islandResult = executeQuery($islandQuery);

?>

<!DOCTYPE html>
<html>

<head>
    <title>ISLAND</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
        @font-face {
            font-family: 'Inside Out';
            src: url('fonts/InsideOut.woff2') format('woff2'),
                url('fonts/InsideOut.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }


        body,
        h1,
        h2 {
            font-family: "Arial", sans-serif
        }

        body,
        html {
            height: 100%
        }

        p {
            line-height: 2
        }

        .bgimg {
            min-height: 100%;
            background-position: center;
            background-size: cover;
        }

        .bgimg {
            background-image: url('img/bg.png')
        }
    </style>
</head>

<body>

    <header class="w3-display-container w3-wide bgimg" id="home">
        <div class="w3-display-middle w3-text-white w3-center "
            style="font-family: 'Inside Out', sans-serif; font-size: clamp(6vh, 10vh, 18vh);">
            ISLAND OF PERSONALITIES
        </div>
    </header>

    <?php
    if (mysqli_num_rows($islandResult) > 0) {
        while ($islandRow = mysqli_fetch_assoc($islandResult)) {
            $name = $islandRow['name'];
            $shortDescription = $islandRow['shortDescription'];
            $longDescription = $islandRow['longDescription'];
            $color = $islandRow['color'];
            $image = $islandRow['image'];
            $status = $islandRow['status'];
            $islandOfPersonalityID = $islandRow['islandOfPersonalityID'];
            ?>

            <div class="w3-container w3-padding-64" style=" color: #ffffff; background-color: <?php echo $color; ?>;">
                <div class="w3-content">
                    <h1 class="w3-center w3-text-white" style="font-family: 'Inside Out'" ><b><?php echo $name; ?></b></h1>
                    <img class="w3-round" src="img/<?php echo $image; ?>" style="width:100%;margin:32px 0">
                    <p><i><?php echo $longDescription; ?></i>
                    </p><br>
                    <p class="w3-center"><a href="view.php?islandOfPersonalityID=<?php echo $islandOfPersonalityID; ?>" class="w3-button w3-black w3-round w3-padding-large w3-large">Visit
                            Island</a></p>
                </div>
            </div>
            <?php
        }
    } else {
        echo "No records found.";
    }
    ?>

    <footer class="w3-center w3-black w3-padding-16">
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank"
                class="w3-hover-text-green">w3.css</a></p>
    </footer>
    <div class="w3-hide-small" style="margin-bottom:32px"> </div>

</body>

</html>