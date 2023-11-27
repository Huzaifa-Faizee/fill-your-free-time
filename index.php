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
    <p id="activity">Not sure what to do in your free time? Click the button for a suggestion!</p>
    <form action="#" method="post">
        <button name="submit" type="submit">Get Activity</button>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $activities = [
            "Read a book",
            "Go for a walk",
            "Try a new recipe",
            "Learn a new language",
            "Start a DIY project",
            "Practice a musical instrument",
            "Write in a journal",
            "Do a workout or exercise",
            "Take up photography",
            "Join a local club or group",
            "Learn to code",
            "Explore a nearby town or city",
            "Volunteer for a cause you care about",
            "Meditate or practice mindfulness",
            "Watch a documentary"
        ];
        $i = mt_rand(0, count($activities) - 1);
        ?>
        <div class="content">
            <?= $activities[$i] ?>
        </div>
        <?php
    }
    ?>
</body>

</html>