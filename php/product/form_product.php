<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FORM PRODUCT</title>
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

<?php 
    // cek apakah terdapat parameter id pada URL, jika ada maka dilakukan edit data
    $_id = isset($_GET['id']) ? $_GET['id'] : null;
    if(!empty($_id)){
        // ambil data produk berdasarkan id
        $sql = "SELECT * FROM product WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_id]);
        $row = $st->fetch();
    }else{
        // jika tidak ada parameter id pada URL, maka dianggap input data baru
        // inisialisasi variabel $row sebagai array kosong
        $row = [];
    }
?>

<H1>FORM PRODUCT</H1>
<div class="containermy-5">
<form method="POST" action="proses_product.php">
  <div class="form-group row">
    <label for="sku" class="col-4 col-form-label">SKU</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="sku" name="sku" type="text" class="form-control"
        value="<?php if(isset($row['sku'])) echo $row['sku']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Name</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="name" name="name" type="text" class="form-control" 
        value="<?php if(isset($row['name'])) echo $row['name']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="purchase_price" class="col-4 col-form-label">Purchase price</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="purchase_price" name="purchase_price" 
        value="<?php if(isset($row['purchase_price'])) echo $row['purchase_price']; ?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="sell_price" class="col-4 col-form-label">Sell price</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="sell_price" name="sell_price" value="<?php if(isset($row['sell_price'])) echo $row['sell_price']; ?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stock" class="col-4 col-form-label">Stock</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="stock" name="stock" 
        value="<?php if(isset($row['stock'])) echo $row['stock']; ?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="min_stock" class="col-4 col-form-label">Min Stok</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="min_stock" name="min_stock" 
        value="<?php if(isset($row['min_stock'])) echo $row['min_stock']; ?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
        <label for="jenis" class="col-4 col-form-label">product_type_id</label>
        <div class="col-8">
            <?php
            $sqlproduct_type_id = "SELECT * FROM product";
            $rsproduct_type_id = $dbh->query($sqlproduct_type_id);
            ?>
            <select id="product_type_id" name="product_type_id" class="custom-select">
                <?php
                foreach ($rsproduct_type_id as $rowproduct_type_id) {
                ?>
                    <option value="<?= $rowproduct_type_id['id'] ?>"><?= $rowproduct_type_id['id'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="jenis" class="col-4 col-form-label">restock_id</label>
        <div class="col-8">
            <?php
            $sqlrestock_id = "SELECT * FROM product";
            $rsrestock_id = $dbh->query($sqlrestock_id);
            ?>
            <select id="restock_id" name="restock_id" class="custom-select">
                <?php
                foreach ($rsrestock_id as $rowrestock_id) {
                ?>
                    <option value="<?= $rowrestock_id['id'] ?>"><?= $rowrestock_id['id'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
    </div>
  <div class="form-group row">
        <div class="offset-4 col-8">
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
            <a href="list_product.php" class="btn btn-success">List</a>
        </div>
    </div>
</form>
</body>
</html>
