<?php
if (isset($_POST['save-btn'])) {
    $sku = $_POST['sku'];
    $type = $_POST['productType'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    print_r($sku);
}



?>



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
        <div class="row mx-5 my-5 w-25">
            <form action="" method="post" id="product_form">
                <div class="row g-3 align-items-center mx-auto mb-2">
                    <div class="col-2">
                        <label for="sku" class="col-form-label">SKU</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="sku" class="form-control" aria-describedby="passwordHelpInline" name="sku">
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
                            <option>Choose...</option>
                            <option value="1">DVD</option>
                            <option value="2">Furniture</option>
                            <option value="3">Book</option>
                        </select>
                    </div>
                </div>
                <div class="row g-3 align-items-center mx-auto mb-2" id="dvd">
                    <div class="col-2">
                        <label for="size" class="col-form-label">Size(MB)</label>
                    </div>
                    <div class="col-auto">
                        <input type="number" id="size" class="form-control" aria-describedby="passwordHelpInline" name="size">
                    </div>
                    <h6 class="card-subtitle mb-2 text-muted">Please, provide size</h6>
                </div>
                <div class="row" id="furniture">
                    <div class="row align-items-center mx-auto mb-2">
                        <div class="col-3">
                            <label for="height" class="col-form-label">Height(CM)</label>
                        </div>
                        <div class="col-auto">
                            <input type="number" id="height" class="form-control" aria-describedby="passwordHelpInline" name="height">
                        </div>
                    </div>
                    <div class="row align-items-center mx-auto mb-2">
                        <div class=" col-3">
                            <label for="width" class="col-form-label">Width(CM)</label>
                        </div>
                        <div class="col-auto">
                            <input type="number" id="width" class="form-control" aria-describedby="passwordHelpInline" name="width">
                        </div>
                    </div>
                    <div class="row align-items-center mx-auto mb-2">
                        <div class=" col-3">
                            <label for="length" class="col-form-label">Length(CM)</label>
                        </div>
                        <div class="col-auto">
                            <input type="number" id="length" class="form-control" aria-describedby="passwordHelpInline" name="length">
                        </div>
                    </div>
                    <h6 class="card-subtitle mb-2 text-muted ms-auto">Please, provide dimensions</h6>
                </div>
                <div class="row g-3 align-items-center mx-auto mb-2" id="book">
                    <div class="col-auto">
                        <label for="weight" class="col-form-label">Weight(KG)</label>
                    </div>
                    <div class="col-auto">
                        <input type="number" id="weight" class="form-control" aria-describedby="passwordHelpInline" name="weight">
                    </div>
                    <h6 class="card-subtitle mb-2 text-muted">Please, provide weight</h6>
                </div>
            </form>
        </div>

    </div>



    <?php require_once 'scripts/scripts.php'; ?>
</body>

</html>