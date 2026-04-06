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
<main class="containerRS">
    <section class="formHeaderRS">
        <h1>Tafel <span>Reserveren</span></h1>
        <p>Reserveer direct uw plek voor een unieke ervaring.</p>
    </section>
    <section class="bookingCardRS">
        <form action="#" method="POST">
            <section class="formGridRS">
                <section class="inputGroupRS">
                    <label for="naam">Naam</label>
                    <input type="text" id="naam" name="naam" placeholder="Uw volledige naam" required>
                </section>
                <section class="inputGroupRS">
                    <label for="personen">Aantal Personen</label>
                    <select id="personen" name="personen">
                        <option value="2">2 Personen</option>
                        <option value="3">3 Personen</option>
                        <option value="4">4 Personen</option>
                        <option value="5+">5+ Personen</option>
                    </select>
                </section>
                <section class="inputGroupRS">
                    <label for="datum">Datum</label>
                    <input type="date" id="datum" name="datum" required>
                </section>
                <section class="inputGroupRS">
                    <label for="tijd">Tijdstip</label>
                    <select id="tijd" name="tijd">
                        <option>18:00</option>
                        <option>19:00</option>
                        <option>20:00</option>
                        <option>21:00</option>
                    </select>
                </section>
            </section>
            <button type="submit" class="btnSubmitRS">TAFEL RESERVEREN</button>
        </form>
    </section>
    <section class="contactGridRS">
        <section class="contactItemRS">       
            <section class="containerLabelRS">
                <span class="labelRS">TELEFONISCH</span>
                <p>+31 (0)20 123 4567</p>
            </section>
        </section>
        <section class="contactItemRS">
            <section class="containerLabelRS">
                <span class="labelRS">LOCATIE</span>
                <p>Amsterdam Center</p>
            </section>
        </section>
    </section>
</main>
<?php
include('lib/footer.php');
?>

</body>
</html>