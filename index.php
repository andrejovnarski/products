<!doctype html>
<html lang="en">

<?php
$title = "Product List";
require_once 'header/header.php';
?>

<body>
    <div class="container-fluid">
        <div class="row mx-5 my-5">
            <div class="col d-flex justify-content-between align-items-center">
                <h1>Product List</h1>
                <div>
                    <a href="addProduct.php" class="btn btn-primary mx-3">ADD</a>
                    <button class="btn btn-danger" id="delete-product-btn">MASS DELETE</button>
                </div>
            </div>
            <hr>
        </div>
        <div class="row mx-5 my-5">
            <div class="card" style="width: 16rem;">
                <input type="checkbox" name="delete-checkbox" class="delete-checkbox mt-2 form-check-input">
                <div class="card-body text-center">
                    <h5 class="card-title">JVC200123</h5>
                    <h6 class="card-subtitle mb-2">Chair</h6>
                    <p class="card-subtitle mb-2">40$</p>
                    <p class="card-subtitle">Size: 700MB</p>
                </div>
            </div>
        </div>
    </div>


    <?php require_once 'scripts/scripts.php'; ?>
</body>

</html>