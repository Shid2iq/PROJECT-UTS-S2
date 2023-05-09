<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW PRODUCT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
body {
    background-color : #ffb413;
}
h1 {
    text-align : center;
    color : black;
    padding-top : 20px;
}
tbody {
    color : black;
}
table {
    padding : 10px;
    border : white;
}
  </style>
</head>
<body>
    
<?php 
require_once '../dbkoneksi.php';
?>

<?php
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data produk dengan id tertentu
    $sql = "SELECT * FROM product WHERE id=?";
    $st = $dbh->prepare($sql);

    // Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
    $st->execute([$_id]);

    // Mengambil hasil query dan menyimpannya ke dalam variabel $row
    $row = $st->fetch();
?>

<!-- Menampilkan data produk dalam bentuk tabel -->
<H1>VIEW PRODUCT</H1>
<table class="table table-striped">
    <tbody>
        <tr>
            <td>ID :</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>SKU :</td>
            <td><?=$row['sku']?></td>
        </tr>
        <tr>
            <td>Name product :</td>
            <td><?=$row['name']?></td>
        </tr>
        <tr>
            <td>Purchase price :</td>
            <td><?=$row['purchase_price']?></td>
        </tr>
        <tr>
            <td>Sell price :</td>
            <td><?=$row['sell_price']?></td>
        </tr>
        <tr>
            <td>Stock :</td>
            <td><?=$row['stock']?></td>
        </tr>
        <tr>
            <td>Minimum Stock :</td>
            <td><?=$row['min_stock']?></td>
        </tr>
        <tr>
            <td>Product type id :</td>
            <td><?=$row['product_type_id']?></td>
        </tr>
        <tr>
            <td>Restock id :</td>
            <td><?=$row['restock_id']?></td>
        </tr>
    </tbody>
</table>

</body>
</html>