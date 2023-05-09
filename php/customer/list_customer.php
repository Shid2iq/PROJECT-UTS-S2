<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST CUSTOMER</title>
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
require_once '../dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM customer";
$rs = $dbh->query($sql);
?>

<H1>LIST CUSTOMER</H1>
<a class="btn btn-success" href="form_customer.php" role="button">Create customer</a>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>gender</th>
            <th>phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>card</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor  = 1;
        foreach ($rs as $row) {
        ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['gender'] ?></td>
                <td><?= $row['phone'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['address'] ?></td>
                <td><?= $row['card_id'] ?></td>
                <td>
                    <a class="btn btn-primary" href="view_customer.php?id=<?= $row['id'] ?>">View</a>
                    <a class="btn btn-success" href="form_customer.php?idedit=<?= $row['id'] ?>">Edit</a>
                    <a class="btn btn-danger" href="delete_customer.php?id=<?=$row['id']?>"
                     onclick="if(!confirm('Anda Yakin Hapus Data customer <?=$row['name']?>?')) {return false}"
                    >Delete</a>                
            </td>
            </tr>
        <?php
            $nomor++;
        }
        ?>
    </tbody>
</table>
</body>
</html>