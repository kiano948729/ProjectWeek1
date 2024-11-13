<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/5321476408.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <?php require_once("components/header.php"); ?>
    </header>
    <main class="reizen-main">
        <section class="hero-section-not-main-1">
            <div class="hero-content">
                <section class="reizen-section">
                    <h2 class="title">Reizen - Voorzieningen en Vergoedingen bij ROC Nijmegen</h2>
                    <div class="voorzieningen">
                        <h3 class="subtitle">Voorzieningen</h3>
                        <ul class="voorzieningen-list">
                            <li><i class="fas fa-bicycle icon"></i><strong>Fiets- en Fietsenstallingen: </strong>
                                Veilige
                                stalling voor je fiets op de campus.</li>
                            <li><i class="fas fa-bus icon"></i><strong>Openbaar Vervoer:</strong> Goede bereikbaarheid
                                met bus en trein, met nabije haltes.</li>
                            <li><i class="fas fa-parking icon"></i><strong>Parkeren:</strong>Parkeerplaatsen
                                beschikbaar voor studenten die met de auto komen.</li>
                            <li><i class="fas fa-euro-sign icon"></i><strong>Reiskosten:</strong>Specifieke informatie
                                over de reiskostenregeling en vergoedingen.</li>
                            <li><i class="fa-solid fa-hotdog"></i><strong> Kantine: </strong>Kantine is aanwezig met
                                ruime keuze aan eten en drinken (niet aangeraden)</li>
                            <li><i class="fa-solid fa-basket-shopping"></i><strong>Supermarkt &
                                    Broodjeszaak:</strong>Plus is op 1km loopafstand en er is een subway om de hoek met
                                korting</li>
                        </ul>
                    </div>

                    <div class="vergoedingen">
                        <h3 class="subtitle">Vergoedingen</h3>
                        <ul class="vergoedingen-list">
                            <li><i class="fas fa-subway icon"></i><strong>OV-vergoeding:</strong> Mogelijkheid voor
                                studenten om een vergoeding te krijgen voor openbaar vervoer (afhankelijk van afstand en
                                gezinssituatie).</li>
                            <li><i class="fas fa-route icon"></i><strong>Kilometervergoeding:</strong> Voor studenten
                                die met de auto of fiets reizen, kan een kilometervergoeding beschikbaar zijn.</li>
                            <li><i class="fas fa-id-card icon"></i><strong>Reisdocumenten:</strong> Informatie over het
                                aanvragen van reiskaarten of andere benodigde documenten voor het openbaar vervoer.</li>
                        </ul>
                    </div>
                </section>

            </div>
        </section>
    </main>
    <footer>
        <?php require_once("components/footer.php"); ?>
    </footer>
</body>