<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM ORDERS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    
  <style>
.containermy-5 {
    background-color :  #fff389;
    padding : 29px;
    width: 60%;
    border-radius : 10px;
    max-width : 1000px;
    margin: 0 auto;
    padding-bottom : 50px;
    margin-bottom : 50px;
    font-size : 20px;
}
body {
    background-color : #ffb413;
}
h1 {
    text-align : center;
    color : black;
    padding-top : 20px;
}
  </style>
</head>
<body>
    
<?php
require_once '../dbkoneksi.php';
?>

<H1>FORM ORDERS</H1>
<div class="containermy-5">
<form method="POST" action="proses_orders.php">
    <div class="form-group row">
        <label for="name" class="col-4 col-form-label">order_number</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="order_number" name="order_number" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="date" class="col-4 col-form-label">date</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-o-left"></i>
                    </div>
                </div>
                <input id="date" name="date" type="date" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="qty" class="col-4 col-form-label">qty</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-up"></i>
                    </div>
                </div>
                <input id="qty" name="qty" value="" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="min_stok" class="col-4 col-form-label">total_price</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </div>
                <input id="total_price" name="total_price" value="" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="jenis" class="col-4 col-form-label">customer_id</label>
        <div class="col-8">
            <?php
            $sqlcustomer_id = "SELECT * FROM orders";
            $rscustomer_id = $dbh->query($sqlcustomer_id);
            ?>
            <select id="customer_id" name="customer_id" class="custom-select">
                <?php
                foreach ($rscustomer_id as $rowcustomer_id) {
                ?>
                    <option value="<?= $rowcustomer_id['id'] ?>"><?= $rowcustomer_id['id'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="jenis" class="col-4 col-form-label">product_id</label>
        <div class="col-8">
            <?php
            $sqlproduct_id = "SELECT * FROM orders";
            $rsproduct_id = $dbh->query($sqlproduct_id);
            ?>
            <select id="product_id" name="product_id" class="custom-select">
                <?php
                foreach ($rsproduct_id as $rowproduct_id) {
                ?>
                    <option value="<?= $rowproduct_id['id'] ?>"><?= $rowproduct_id['id'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
            <a href="list_orders.php" class="btn btn-success">List</a>
        </div>
    </div>
</form>
</body>
</html>