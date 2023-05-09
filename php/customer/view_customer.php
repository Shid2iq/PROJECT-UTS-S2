<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW CUSTOMER</title>
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
    $sql = "SELECT * FROM customer WHERE id=?";
    $st = $dbh->prepare($sql);

    // Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
    $st->execute([$_id]);

    // Mengambil hasil query dan menyimpannya ke dalam variabel $row
    $row = $st->fetch();
?>

<!-- Menampilkan data produk dalam bentuk tabel -->
<H1>VIEW CUSTOMER</H1>
<table class="table table-striped">
    <tbody>
    <tr>
            <td>ID :</td>
            <td><spece><?=$row['id']?></td>
    </tr>
        <tr>
            <td>Name :</td>
            <td><spece><?=$row['name']?></td>
    </tr>
        <tr>
            <td>gender :</td>
            <td><spece><?=$row['gender']?></td>
    </tr>
        <tr>
            <td>Phone :</td>
            <td><spece><?=$row['phone']?></td>
    </tr>
        <tr>
            <td>Email :</td>
            <td><spece><?=$row['email']?></td>
    </tr>
        <tr>
            <td>Address :</td>
            <td><spece><?=$row['address']?></td>
    </tr>
        <tr>
            <td>Card :</td>
            <td><spece><?=$row['card_id']?></td>
    </tr>
    </tbody>
</table>

</body>
</html>