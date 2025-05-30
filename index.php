<?php
include("activities.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Generator</title>
    <script>
        // Check if the page is being refreshed
        if (performance.navigation.type === 1) {
            // Redirect to index.php
            window.location.href = 'index.php';
        }

    </script>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Fill The Free Time</h1>
    <p class="activity">Not sure what to do in your free time? Click the button for a suggestion!</p>
    <form action="#" method="post">
        <button name="submit" type="submit" class="button-74">Get Activity</button>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $i = mt_rand(0, count($activities) - 1);
        ?>
        <div class="content">
            <span class="fade-in">How About? </span>
            <span class="delayed-fade-in">
                <?= $activities[$i][0] ?>
            </span>
        </div>
        <div class="benefits">
            <label>Benefits</label>
            <div class="images">
                <div class="image-container">
                    <img src=<?php echo "images/" . $activities[$i][1] . "/1.jpg" ?> alt="no image">
                    <h3>
                        <?= $benefits[$i][0] ?>
                    </h3>
                    <p>
                        <?= $benefits[$i][1] ?>
                    </p>
                </div>
                <div class="image-container">
                    <img src=<?php echo "images/" . $activities[$i][1] . "/2.jpg" ?> alt="no image">
                    <h3>
                        <?= $benefits[$i][2] ?>
                    </h3>
                    <p>
                        <?= $benefits[$i][3] ?>
                    </p>
                </div>
                <div class="image-container">
                    <img src=<?php echo "images/" . $activities[$i][1] . "/3.jpg" ?> alt="no image">
                    <h3>
                        <?= $benefits[$i][4] ?>
                    </h3>
                    <p>
                        <?= $benefits[$i][5] ?>
                    </p>
                </div>
            </div>
        </div>
        <p>Source:<?=$activities[$i][2]?></p>

        <?php
    }
    ?>
</body>

</html>