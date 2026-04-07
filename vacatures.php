<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Eren Yilmaz">
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
<main>
    <section class="heroSectionVC">
        <section class="heroContentVC">
            <h1>Word onderdeel van <span>Ons Team</span></h1>
            <p>We zoeken passievolle collega's voor onze unieke Umami beleving.</p>
        </section>
    </section>
    <section class="mainContentVC">
        <section class="jobsColumnVC">
            <h2>Beschikbare Posities</h2>           
            <article class="jobCardVC">
                <section class="jobInfoVC">
                    <h3>Sushi Chef</h3>
                    <span class="typeBadgeVC">Full-time</span>
                </section>
                <p>Breng de Japanse keuken tot leven met jouw vakmanschap.</p>
            </article>
            <article class="jobCardVC">
                <section class="jobInfoVC">
                    <h3>Gastvrouw / Heer</h3>
                    <span class="typebadgeVC">Part-time</span>
                </section>
                <p>Het stralende middelpunt voor onze gasten.</p>
            </article>
        </section>
        <section class="formColumnVC">
            <section class="cardBoxVC">
                <h2>Snel Solliciteren</h2>
                <form class="gridFormVC">
                    <section class="fieldVC">
                        <label>Naam</label>
                        <input type="text" placeholder="Je volledige naam">
                    </section>                  
                    <section class="fieldRowVC">
                        <section class="fieldVC">
                            <label>Telefoon</label>
                            <input type="tel" placeholder="06...">
                        </section>
                        <section class="fieldVC">
                            <label>Functie</label>
                            <select>
                                <option>Sushi Chef</option>
                                <option>Gastvrouw</option>
                            </select>
                        </section>
                    </section>
                    <button type="submit" class="submitButtonVC">VERSTUUR INTERESSE</button>
                </form>
            </section>
        </section>
    </section>
</main>

<?php
include('lib/footer.php');
?>

</body>
</html>


