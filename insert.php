<?php
require "settings/init.php";

if (!empty($_POST["data"])) {
    $data = $_POST["data"];
    $file = $_FILES;

    if (!empty($file["carImg"]["tmp_name"])) {
        move_uploaded_file($file["carImg"]["tmp_name"], "uploads/" . basename($file["carImg"]["name"]));
    }

    if (!empty($file["carLogo"]["tmp_name"])) {
        move_uploaded_file($file["carLogo"]["tmp_name"], "uploads/" . basename($file["carLogo"]["name"]));
    }

    $sql = "INSERT INTO cars (carBrand, carModel, carMotor, carColor, carImg, carPrice, carLogo, carReg, carDistance) VALUES(:carBrand, :carModel, :carMotor, :carColor, :carImg, :carPrice, :carLogo, :carReg, :carDistance)";
    $bind = [
        ":carBrand" => $data["carBrand"],
        ":carModel" => $data["carModel"],
        ":carMotor" => $data["carMotor"],
        ":carColor" => $data["carColor"],
        ":carImg" => (!empty($file["carImg"]["tmp_name"])) ? $file["carImg"]["name"] : NULL,
        ":carPrice" => $data["carPrice"],
        ":carLogo" => (!empty($file["carLogo"]["tmp_name"])) ? $file["carLogo"]["name"] : NULL,
        ":carReg" => $data["carReg"],
        ":carDistance" => $data["carDistance"],
    ];

    $db->sql($sql, $bind, false);

    echo "The product has been inserted. <a href='insert.php'>Insert another product</a>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Indsæt til database</title>

    <meta name="robots" content="noindex">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/3rsmw9ccp9juy3m9rrz59fl5h38b0pjh8g11qyia040fvhuw/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body class="d-block container mt-5 pt-5 mb-5 pb-5 bg-primary text-light">

<form method="post" action="insert.php" enctype="multipart/form-data">
    <div class="row g-4">

        <!-- Bilmærke Navn -->
        <div class="col-12 col-md-4">
            <div class="form-group">
                <label class="fw-bold mb-2" for="carBrand">Car Brand</label>
                <input class="form-control" type="text" name="data[carBrand]" id="carBrand" placeholder="Car Brand" value="">
            </div>
        </div>

        <!-- Bilmodel -->
        <div class="col-12 col-md-4">
            <div class="form-group">
                <label class="fw-bold mb-2" for="carModel">Car Model</label>
                <input class="form-control" type="text" name="data[carModel]" id="carModel" placeholder="Car Model" value="">
            </div>
        </div>

        <!-- Bilmotor -->
        <div class="col-12 col-md-4">
            <div class="form-group">
                <label class="fw-bold mb-2" for="carMotor">Car Motor</label>
                <input class="form-control" type="text" name="data[carMotor]" id="carMotor" placeholder="Car Motor" value="">
            </div>
        </div>

        <!-- Bilfarve -->
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label class="fw-bold mb-2" for="carColor">Car Color</label>
                <input class="form-control" type="text" name="data[carColor]" id="carColor" placeholder="Car Color" value="">
            </div>
        </div>

        <!-- Bil Reg -->
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label class="fw-bold mb-2" for="carReg">Car Reg</label>
                <input class="form-control" type="text" name="data[carReg]" id="carReg" placeholder="Car Reg" value="">
            </div>
        </div>

        <!-- Bilpris -->
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label class="fw-bold mb-2" for="carPrice">Car Price</label>
                <input class="form-control" type="number" step="0.1" name="data[carPrice]" id="carPrice" placeholder="Car Price" value="0">
            </div>
        </div>

        <!-- Car Distance -->
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label class="fw-bold mb-2" for="carDistance">Car Distance</label>
                <input class="form-control" type="number" step="1" name="data[carDistance]" id="carDistance" placeholder="Car Distance" value="0">
            </div>
        </div>

        <!-- Bilbillede -->
        <div class="col-12 col-md-6">
            <label class="fw-bold mb-2 form-label" for="carImg">Car Image</label>
            <input type="file" class="form-control" id="carImg" name="carImg">
        </div>

        <!-- Bil Logo -->
        <div class="col-12 col-md-6">
            <label class="fw-bold mb-2 form-label" for="carLogo">Car Logo</label>
            <input type="file" class="form-control" id="carLogo" name="carLogo">
        </div>

        <div class="col-12 col-md-4 offset-md-8 mt-5">
            <button class="form-control text-light btn btn-secondary bg-gradient" type="submit" id="btnSubmit">Submit Product</button>
        </div>
</form>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea',
    });
</script>
</body>
</html>