<!DOCTYPE html>
<html>
<head>
  <title>ADMIN</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!--Logo-->
  <link rel="icon" type="image/x-icon" href="img/img/paw-solid.png" />
  <!--Font Awesome-->
  <script src="https://kit.fontawesome.com/5ef359b4dc.js" crossorigin="anonymous"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
  <link rel="stylesheet" href="css/admin.css">
</head>
<body>
  <div class="header">
    <img src="img/img/header.png" alt="">
  </div>
  <div class="nav">
    <div class="nav-logo"><i class="fa-solid fa-paw"></i> Virgo petshop</div>
    <ul>
      <li class="nav-logo"><a href="#"><i class="fas fa-bell"></i><span class="badge badge-danger navbar-badge" id="notif">3</span></a></li>
      <li class="nav-logo"><a href="#"><i class="fas fa-envelope"></i><span class="badge badge-danger navbar-badge" id="notif2">3</span></a></li>
      <li class="nav-logo"><a href="#"><i class="fas fa-cog"></i></a></li>
      <li class="nav-profile"><img src="img/img/admin.ico" id="img" alt="" style="width: 40px; height: 40px;"></a></li>
    </ul>
  </div>
  <section>
    <div class="card">
      <h2>Selamat datang di Tampilan Admin</h2>
      <p>Di sini kita dapat mengelola berbagai data yang terhubung dengan web kita</p>
    </div>
    <div class="card">
      <h3>Diagram pie</h3>
      <img src="img/img/pie.png" alt="">
    </div>
  </section>
  <div class="sidebar">
    <ul>
      <li><a href="admin.php"><i class="fas fa-home" style="color: orange;"></i> Beranda</a></li>
      <li><a href="php/product/form_product.php"><i class="fa-sharp fa-solid fa-shield-cat" style="color: orange;"></i> Product</a></li>
      <li><a href="php/customer/form_customer.php"><i class="fa-solid fa-users" style="color: orange;"></i> Customer</a></li>
      <li><a href="php/orders/form_orders.php"><i class="fas fa-shopping-cart" style="color: orange;"></i> Orders</a></li>
      <li><a href="php/card/form_card.php"><i class="fa-solid fa-credit-card" style="color: orange;"></i> Card</a></li>
      <li><a href="php/product_type/form_product_type.php"><i class="fa-solid fa-table-list" style="color: orange;"></i> Product type</a></li>
      <li><a href="php/restock/form_restock.php"><i class="fa-solid fa-calendar-days" style="color: orange;"></i> Restock</a></li>
      <li><a href="php/supplier/form_supplier.php"><i class="fa-solid fa-handshake" style="color: orange;"></i> Supplier</a></li>
      </ul>
<br>
      <a href="index.html" class="btn btn-danger" style="width: 150px;">Log Out</a>
    </div>
  </body>
  </html>