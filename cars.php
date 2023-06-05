<!DOCTYPE html>

<html lang="da">

<head>

    <meta charset="utf-8">

    <title>Biler</title>

    <meta name="robots" content="All">
    <meta name="author" content="Mark P. Thomassen">
    <meta name="copyright" content="2023 markphillip.dk">
    <meta name="description" content="Et redesign af brianmadsen.com">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="images/favicon.ico" rel="icon" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Brian Madsen | Bilforhandler af højeste kvalitet">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https:/www.markphillip.dk/brianmadsenredesign">
    <meta property="og:image" content="https:/www.markphillip.dk/brianmadsen_facilitet.webp">
    <meta property="og:description" content="Velkommen hos Brian Madsen - Vores mål er, at give dig lidt mere end du havde forventet.">
    <meta property="og:locale" content="da_DK">

</head>

<body>

<?php include "includes/header.php"; ?>

<main id="main">

    <div class="container mt-80">

        <div class="products mb-5">
            <div class="filter py-5">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <input type="search" class="form-control nameSearch" placeholder="Søg biler...">
                    </div>
                </div>
            </div>

            <div class="items">
                <!-- Her vises produkterne-->
            </div>

        </div>

    </div>

    <?php include "includes/footer.php"; ?>

</main>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script><div id="fb-root"></div>
<script type="module">

    import Cars from "./js/cars.js";
    const songs = new Cars();
    songs.init();

</script>

</body>
</html>