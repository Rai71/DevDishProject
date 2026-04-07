<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Rainier Gondres">
    <title>Umami Sushi</title>
    <link rel="icon" href="images/logo_umami_sushi_1.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="lib/index.js" defer></script>
    <script src="https://kit.fontawesome.com/a2c653daa5.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
include('lib/header.php');
?>
<main class="contentOP">
    <section class="pageHeaderOP">
        <h1>Locatie & <span>Openingstijden</span></h1>
    </section>

    <section class="contentGridOP">
        <section class="mapContainerOP">
            <img id="kaartOP" src="images/kaartleiden.png" alt="Kaart van Leiden">
        </section>

        <section class="infoColumnOP">
            
            <section class="cardOP">
                <p><strong>Omakase Lane 123</strong></p>
                <p>1011 AB, Amsterdam</p>
            </section>

            <section class="cardOP">
                <h2>
                    <span class="materialSymbolsOutlined">schedule</span> Tijden
                </h2>
                <section id="times">
                    <ul id="opening" style="display: flex; flex-direction: column;">
                        <h2>Opening</h2>
                        <h2></h2>
                        <li class="dag" style="color: red;">Maandag</li>
                        <li class="dag" style="color: red;">Closed</li>
                        <li class="dag">Dinsdag</li>
                        <li class="dag">12:00 - 22:00</li>
                        <li class="dag">Woensdag</li>
                        <li class="dag">12:00 - 22:00</li>
                        <li class="dag">Donderdag</li>
                        <li class="dag">12:00 - 22:00</li>
                        <li class="dag">Vrijdag</li>
                        <li class="dag">12:00 - 22:00</li>
                        <li class="dag">Zaterdag</li>
                        <li class="dag">12:00 - 22:00</li>
                        <li class="dag">Zondag</li>
                        <li class="dag">12:00 - 22:00</li>
                        <p id="openOrClosed"></p>
                    </ul>
                </section>
            </section>

            <section class="cardOP">
                <p>📞 +31 (0)20 123 4567</p>
                <p>✉️ hello@umamiSusuhi.nl</p>
                <br>
                <button class="btnPrimaryOP">DIRECT RESERVEREN</button>
            </section>

        </section>
    </section>
</main>

<?php
include('lib/footer.php');
?>

</body>
</html>


