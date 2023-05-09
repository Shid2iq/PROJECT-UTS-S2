<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST PRODUCT</title>
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
.table {
    background-color :#fff389;
}
    </style>
</head>
<body>
    
<?php 
    // include database connection
    require_once '../dbkoneksi.php';
?>

<?php 
    // select all data from table "produk"
    $sql = "SELECT * FROM product";
    // execute the query
    $rs = $dbh->query($sql);
?>

<H1>LIST PRODUCT</H1>
<a class="btn btn-success" href="form_product.php" role="button">Create Product</a>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>No</th>
            <th>SKU</th>
            <th>Name</th>
            <th>Purchase price</th>
            <th>Sell price</th>
            <th>Stock</th>
            <th>Min Stock</th>
            <th>Product type id</th>
            <th>Restock id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            // initialize counter
            $nomor = 1;
            // loop through the result set
            foreach($rs as $row) {
        ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$row['sku']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['purchase_price']?></td>
            <td><?=$row['sell_price']?></td>
            <td><?=$row['stock']?></td>
            <td><?=$row['min_stock']?></td>
            <td><?=$row['product_type_id']?></td>
            <td><?=$row['restock_id']?></td>
            <td>
                <!-- buttons to view, edit, and delete a product -->
                <a class="btn btn-primary" href="view_product.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-success" href="form_product.php?id=<?=$row['id']?>">Edit</a>
                <a class="btn btn-danger" href="delete_product.php?id=<?=$row['id']?>"
                onclick="if(!confirm('Anda Yakin Hapus Data product <?=$row['name']?>?')) {return false}"
                >Delete</a>
            </td>
        </tr>
        <?php 
            // increment counter
            $nomor++;   
            } 
        ?>
    </tbody>
</table>

</body>
</html>