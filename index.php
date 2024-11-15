<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/5321476408.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/61f819b69c.js" crossorigin="anonymous"></script>
    <title>ROC Nijmegen - Welkom</title>
</head>

<body>
    <!-- Start header-->
    <header>
        <?php require_once("components/header.php"); ?>
         <!-- Einde header-->
    </header>
    <main>
         <!-- Start main pagina-->
        <section class="hero-section">
            <div class="hero-content">
                <h1>Welkom bij ROC Nijmegen</h1>
                <h1>Software Developer</h1> 
                <p>Ontdek een wereld vol mogelijkheden en leertrajecten!</p>
                <a href="../resource/lessen.php" class="cta-button">Ontdek meer</a>
            </div>
            <div class="hero-image">
                <div class="hero-section-not-main-1">
                    <img src="img/image copy 3.png" alt="Afbeelding van ROC Nijmegen">
                </div>
            </div>
        </section>
        <section class="hero-section">
            <div class="hero-content">
                <h1>Bekijk deze video</h1>
            </div>
            <div class="hero-image">
                <div class="hero-section-not-main-1">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/a23-gb3hxHU" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <!-- Einde main pagina-->
    </main>
    <footer>
        <?php require_once("components/footer.php"); ?>
    </footer>
</body>

</html>