<!doctype html>
<html lang="en">

<?php
$title = "Add Product";
require_once 'header/header.php';
?>


<body>
    <div class="container-fluid">
        <div class="row mx-5 my-5">
            <div class="col d-flex justify-content-between align-items-center">
                <h1>Product Add</h1>
                <div>
                    <button class="btn btn-success mx-3" type="submit" form="product_form" name="save-btn">SAVE</button>
                    <a href="index.php" class="btn btn-warning" id="delete-product-btn">CANCEL</a>
                </div>
            </div>
            <hr>
        </div>
        <?php if (isset($_GET['error'])) {
            echo '<div class="text-center w-25 mx-auto"><div class="alert alert-danger" role="alert">
            ' . $_GET['error'] . '
            </div></div>';
        } else {
            echo '';
        } ?>
        <div class="row mx-5 my-5 w-25">
            <form action="classes/InputController.php" method="post" id="product_form">
                <div class="row g-3 align-items-center mx-auto mb-2">
                    <div class="col-2">
                        <label for="sku" class="col-form-label">SKU</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="sku" class="form-control" aria-describedby="passwordHelpInline" name="sku" >
                    </div>
                </div>
                <div class="row g-3 align-items-center mx-auto mb-2 ">
                    <div class="col-2">
                        <label for="name" class="col-form-label">Name</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="name" class="form-control" aria-describedby="passwordHelpInline" name="name">
                    </div>
                </div>
                <div class="row g-3 align-items-center mx-auto mb-2">
                    <div class="col-2">
                        <label for="price" class="col-form-label">Price($)</label>
                    </div>
                    <div class="col-auto">
                        <input type="number" id="price" class="form-control" aria-describedby="passwordHelpInline" name="price">
                    </div>
                </div>
                <div class="row g-3 align-items-center mx-auto mb-3">
                    <div class="col-auto">
                        <label for="productType" class="col-form-label">Type Switcher</label>
                    </div>
                    <div class="col-auto">
                        <select class="form-select" id="productType" name="productType">
                            <option value="0">Choose...</option>
                        </select>
                    </div>
                </div>
                <div class="row g-3 align-items-center mx-auto mb-2" id="dvd"></div>
                <div class="row" id="furniture"></div>
                <div class="row g-3 align-items-center mx-auto mb-2" id="book"></div>
            </form>
        </div>
    </div>



    <?php require_once 'scripts/scripts.php'; ?>
</body>

</html>