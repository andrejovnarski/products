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
                    <button class="btn btn-danger" id="delete-product-btn" form="form-check">MASS DELETE</button>
                </div>
            </div>
            <hr>
        </div>
        <form id="form-check" method="POST" action="classes/DeleteController.php">
            <div class="row mx-5 my-5" id="showProducts"></div>
        </form>
    </div>

    <?php require_once 'scripts/scripts.php'; ?>
</body>

</html>