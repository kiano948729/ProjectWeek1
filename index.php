<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/5321476408.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/61f819b69c.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <?php require_once("components/header.php"); ?>
    </header>
    <main>
        <div>
            <div class="one">
                <h1>ROC Nijmegen</h1>
            </div>
            <div class="img-div">
                <img src="img/image copy 3.png">
            </div>
        </div>
    </main>
    <footer>
        <?php require_once("components/footer.php"); ?>
    </footer>

</body>

</html>