<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST KARTU</title>
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
    $sql = "SELECT * FROM card";
    // execute the query
    $rs = $dbh->query($sql);
?>

<H1>LIST KARTU</H1>
<div class="containermy-5">
<a class="btn btn-success" href="form_card.php" role="button">Create card</a>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>NO</th>
            <th>code</th>
            <th>Name</th>
            <th>discount</th>
            <th>member_fee</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            // initialize counter
            $id = 1;
            // loop through the result set
            foreach($rs as $row) {
        ?>
        <tr>
            <td><?=$id?></td>
            <td><?=$row['code']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['discount']?></td>
            <td><?=$row['member_fee']?></td>
            <td>
                <!-- buttons to view, edit, and delete a product -->
                <a class="btn btn-primary" href="view_card.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-success" href="form_card.php?id=<?=$row['id']?>">Edit</a>
                <a class="btn btn-danger" href="delete_card.php?id=<?=$row['id']?>"
                onclick="if(!confirm('Anda Yakin Hapus Data kartu <?=$row['name']?>?')) {return false}"
                >Delete</a>
            </td>
        </tr>
        <?php 
            // increment counter
            $id++;   
            } 
        ?>
    </tbody>
</table>

</body>
</html>
