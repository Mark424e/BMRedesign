<?php
require "settings/init.php";
$id = $_GET['carID'];

$cars = $db->sql("SELECT * FROM cars WHERE carID = $id");
?>

<?php
foreach ($cars as $product){
?>

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
        <div class="row">

            <div class="col-12 col-lg-6 offset-lg-3 my-5 h-100">

                <div>
                    <?php
                    echo "<img src='uploads/$product->carImg' alt='Cover Art' class='w-100'>";
                    ?>
                </div>

                <hr>

                <div>
                    <h2 class="text-center max-lines-1">
                        <?php
                        echo $product->carBrand, ' ', $product->carModel;
                        ?>
                    </h2>
                </div>

                <hr>

                <div class="row g-4">

                    <div class="col-6">
                        <p class="text-decoration-none max-lines-1">
                            <?php
                            echo "Motor: ", $product->carMotor;
                            ?>
                        </p>
                    </div>

                    <div class="col-6">
                        <p class="text-decoration-none max-lines-1">
                            <?php
                            echo "Farve: ", $product->carColor;
                            ?>
                        </p>
                    </div>

                    <div class="col-6">
                        <p class="text-decoration-none max-lines-1">
                            <?php
                            echo "1. Reg: ", $product->carReg;
                            ?>
                        </p>
                    </div>

                    <div class="col-6">
                        <p class="text-decoration-none max-lines-1">
                            <?php
                            echo "Km: ", $product->carDistance;
                            ?>
                        </p>
                    </div>

                </div>

                <hr>

                <div>
                    <h2>
                        <?php
                        echo "Pris: ", $product->carPrice, ' DKK';
                        ?>
                    </h2>
                </div>


            </div>

        </div>
    </div>

    <?php include "includes/footer.php"; ?>

</main>

<?php
}
?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script><div id="fb-root"></div>

</body>
</html>