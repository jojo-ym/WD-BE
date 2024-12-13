<?php
include('connect.php');
if (isset($_GET['islandOfPersonalityID'])) {
    $islandOfPersonalityID = $_GET['islandOfPersonalityID'];
    $islandQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = '$islandOfPersonalityID'";
    $islandResult = executeQuery($islandQuery);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Memories</title>
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
            font-family: "Raleway", sans-serif
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

    <!-- Header / Home-->
    <header class="w3-display-container w3-wide bgimg" id="home">
        <div class="w3-display-middle w3-text-white w3-center "
            style="font-family: 'Inside Out', sans-serif; font-size: clamp(6vh, 10vh, 18vh);">
            CORE MEMORIES
        </div>
    </header>

    <?php
    if (mysqli_num_rows($islandResult) > 0) {
        while ($islandRow = mysqli_fetch_assoc($islandResult)) {
            $image = $islandRow['image'];
            $content = $islandRow['content'];
            $color = $islandRow['color'];
            ?>

            <div class="w3-container w3-padding-64" style=" color: #ffffff; background-color: <?php echo $color; ?>;"
                id="sport">
                <div class="w3-content">
                    <img class="w3-round" src="img/<?php echo $image; ?>" style="width:100%;margin:32px 0">
                    <p><i><?php echo $content; ?></i>
                    </p><br>
                </div>
            </div>
            <?php
        }
    } else {
        echo "No content found for this island.";
    }
    ?>

    <div class="text-center">
        <button onclick="window.location.href='index.php'" class="btn btn-secondary py-3 mx-5">
            Back
        </button>
    </div>

</body>

</html>