<?php
    include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dingus</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div>
        <div class="navigation">
            <a class="navbar-brand" href="/">
                <div class="logo-image">
                    <img class="logo" src="./Images/Dingus-and-Zazzy-Logo-300x108.png.webp" alt="">
                </div>
            </a>
            <nav class="navbar">
                <ul class="navbar-links">
                    <li class="navbar-link">
                        <?php echo $lang['Services'] ?>
                    </li>
                    <li class="navbar-link">
                        <?php echo $lang['About'] ?>
                    </li>
                    <li class="navbar-link">
                        <?php echo $lang['Work'] ?>
                    </li>
                    <li class="navbar-link">
                        <?php echo $lang['Pricing'] ?>
                    </li>
                    <li class="navbar-link">
                        <?php echo $lang['Faqs'] ?>
                    </li>
                    <li class="navbar-link">
                        <?php echo $lang['Careers'] ?>
                    </li>
                    <li class="navbar-link">
                        <?php echo $lang['Contact'] ?>
                    </li>
                </ul>
            </nav>
        </div>
        <div>
            <footer class="footer">
            <a href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a>
            | <a href="index.php?lang=fr"><?php echo $lang['lang_fr'] ?></a>
            </footer>
        </div>
    </div>
</body>
</html>