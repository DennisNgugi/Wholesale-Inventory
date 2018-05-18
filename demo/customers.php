<?php
require_once "connection/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $customer_name = $mysqli->escape_string($_POST['customer_name']);
  $customer_mobile = $mysqli->escape_string($_POST['customer_mobile']);
  $customer_address = $mysqli->escape_string($_POST['customer_address']);
  $customer_details = $mysqli->escape_string($_POST['customer_details']);

  $sql = $mysqli->query("INSERT INTO `customers` VALUES (NULL,'$customer_name','$customer_mobile','$customer_address','$customer_details',CURRENT_TIMESTAMP)");
}
else{
  echo "failed to submit data";
}
 ?>

<!doctype html>
<html lang="en-us">


<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Customers</title>
  <meta name="description" content="Dashboard UI Kit">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font -->
  <link href="../../fonts.googleapis.com/cssc604.css?family=Source+Sans+Pro:300,400,400i,600" rel="stylesheet">

  <!-- Favicon -->

  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <!-- Stylesheet -->
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="o-page">
  <div class="o-page__sidebar js-page-sidebar">
    <div class="c-sidebar">
      <a class="c-sidebar__brand" href="#">
                    <img class="c-sidebar__brand-img" src="img/logo.png" alt="Logo"> Dashboard
                </a>

      <h4 class="c-sidebar__title">Dashboards</h4>
      <ul class="c-sidebar__list">

        <li class="c-sidebar__item">
          <a class="c-sidebar__link is-active" href="index.html">
                            <i class="fa fa-home u-mr-xsmall"></i>Dashboard
                        </a>
        </li>

        <li class="c-sidebar__item has-submenu">
          <a class="c-sidebar__link" data-toggle="collapse" aria-expanded="false" aria-controls="products" href="#products">
                            <i class="fa fa-suitcase u-mr-xsmall"></i>Products
                        </a>
          <ul class="c-sidebar__submenu collapse" id="products">
            <li><a class="c-sidebar__link" href="product.html"> Add Products</a></li>
            <li><a class="c-sidebar__link" href="manageproduct.html">Manage products</a></li>

          </ul>
        </li>

        <li class="c-sidebar__item has-submenu">
          <a class="c-sidebar__link" data-toggle="collapse" aria-expanded="false" aria-controls="categories" href="#categories">
                            <i class="fa fa-snowflake-o u-mr-xsmall"></i>Categories
                        </a>
          <ul class="c-sidebar__submenu collapse" id="categories">
            <li><a class="c-sidebar__link" href="categories.html"> Add Categories</a></li>
            <li><a class="c-sidebar__link" href="managecategories">Manage categories</a></li>

          </ul>
        </li>

        <li class="c-sidebar__item has-submenu">
          <a class="c-sidebar__link" data-toggle="collapse" aria-expanded="false" aria-controls="customers" href="#customers">
                            <i class="fa fa-handshake-o u-mr-xsmall"></i>Customer
                        </a>
          <ul class="c-sidebar__submenu collapse" id="customers">
            <li><a class="c-sidebar__link" href="customers.html"> Add Customer</a></li>
            <li><a class="c-sidebar__link" href="managecustomers.html">Manage Customers</a></li>
            <li><a class="c-sidebar__link" href="creditcustomers.html">Credit Customers</a></li>
            <li><a class="c-sidebar__link" href="paidcustomers.html">Paid Customers</a></li>


          </ul>
        </li>
        <li class="c-sidebar__item has-submenu">
          <a class="c-sidebar__link" data-toggle="collapse" aria-expanded="false" aria-controls="suppliers" href="#suppliers">
                            <i class="fa fa-user-o u-mr-xsmall"></i>Suppliers
                        </a>
          <ul class="c-sidebar__submenu collapse" id="suppliers">
            <li><a class="c-sidebar__link" href="#"> Add Suppliers</a></li>
            <li><a class="c-sidebar__link" href="#">Manage Suppliers</a></li>
            <li><a class="c-sidebar__link" href="#">Suppliers Payment</a></li>
            <li><a class="c-sidebar__link" href="#">Paid Customers</a></li>


          </ul>
        </li>

        <li class="c-sidebar__item has-submenu">
          <a class="c-sidebar__link" data-toggle="collapse" aria-expanded="false" aria-controls="stock" href="#stock">
                            <i class="fa fa-bar-chart-o u-mr-xsmall"></i>Stock
                        </a>
          <ul class="c-sidebar__submenu collapse" id="stock">
            <li><a class="c-sidebar__link" href="stock.html"> Stock report</a></li>
            <li><a class="c-sidebar__link" href="stocksupplier.html">Stock report (Supplier wise)</a></li>
            <li><a class="c-sidebar__link" href="stockproduct.html">Stock report (Product wise)</a></li>
                  </ul>
        </li>
        <li class="c-sidebar__item has-submenu">
          <a class="c-sidebar__link" data-toggle="collapse" aria-expanded="false" aria-controls="account" href="#account">
                            <i class="fa fa-street-view u-mr-xsmall"></i>Account
                        </a>
          <ul class="c-sidebar__submenu collapse" id="account">
            <li><a class="c-sidebar__link" href="#"> Add Account</a></li>
            <li><a class="c-sidebar__link" href="#">Manage Account</a></li>
          </ul>
        </li>
        <li class="c-sidebar__item has-submenu">
          <a class="c-sidebar__link" data-toggle="collapse" aria-expanded="false" aria-controls="invoice" href="#invoice">
                            <i class="fa fa-files-o u-mr-xsmall"></i>Invoice
                        </a>
          <ul class="c-sidebar__submenu collapse" id="invoice">
            <li><a class="c-sidebar__link" href="#"> Add Invoice</a></li>
            <li><a class="c-sidebar__link" href="#">Manage Invoice</a></li>
          </ul>
        </li>
        <li class="c-sidebar__item has-submenu">
          <a class="c-sidebar__link" data-toggle="collapse" aria-expanded="false" aria-controls="reciept" href="#reciept">
                            <i class="fa fa-chain-broken u-mr-xsmall"></i>Reciept
                        </a>
          <ul class="c-sidebar__submenu collapse" id="reciept">
            <li><a class="c-sidebar__link" href="#"> Add Reciept</a></li>
            <li><a class="c-sidebar__link" href="#">Manage Reciept</a></li>
          </ul>
        </li>
      </ul>



    </div>
    <!-- // .c-sidebar -->
  </div>
  <!-- // .o-page__sidebar -->

  <main class="o-page__content">
    <header class="c-navbar u-mb-medium">
      <button class="c-sidebar-toggle u-mr-small">
                    <span class="c-sidebar-toggle__bar"></span>
                    <span class="c-sidebar-toggle__bar"></span>
                    <span class="c-sidebar-toggle__bar"></span>
                </button>
      <!-- // .c-sidebar-toggle -->

      <h2 class="c-navbar__title u-mr-auto">Customers</h2>

      <div class="c-dropdown u-hidden-down@mobile">
        <a class="c-notification dropdown-toggle" href="#" id="dropdownMenuUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="c-notification__icon">
                            <i class="fa fa-user-o"></i>
                        </span>
                        <span class="c-notification__number">3</span>
                    </a>

        <div class="c-dropdown__menu c-dropdown__menu--large dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuUser">
          <a href="#" class="c-dropdown__item dropdown-item o-media">
                            <span class="o-media__img u-mr-xsmall">
                                <span class="c-avatar c-avatar--xsmall">
                                    <img class="c-avatar__img" src="img/avatar2-72.jpg" alt="User's Profile Picture">
                                </span>
                            </span>
                            <div class="o-media__body">
                                <h6 class="u-mb-zero">Someone mentioned you</h6>
                                <p class="u-text-mute">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
          <a href="#" class="c-dropdown__item dropdown-item o-media">
                            <span class="o-media__img u-mr-xsmall">
                                <span class="c-avatar c-avatar--xsmall">
                                    <img class="c-avatar__img" src="img/avatar3-72.jpg" alt="User's Profile Picture">
                                </span>
                            </span>
                            <div class="o-media__body">
                                <h6 class="u-mb-zero">Recieved a Payment</h6>
                                <p class="u-text-mute">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
          <a href="#" class="c-dropdown__item dropdown-item o-media">
                            <span class="o-media__img u-mr-xsmall">
                                <span class="c-avatar c-avatar--xsmall">
                                    <img class="c-avatar__img" src="img/avatar4-72.jpg" alt="User's Profile Picture">
                                </span>
                            </span>
                            <div class="o-media__body">
                                <h6 class="u-mb-zero">You got a promotion</h6>
                                <p class="u-text-mute">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
        </div>
      </div>

      <div class="c-dropdown dropdown u-mr-medium u-ml-small u-hidden-down@mobile">
        <a class="c-notification dropdown-toggle" href="#" id="dropdownMenuAlerts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="c-notification__icon">
                            <i class="fa fa-bell-o"></i>
                        </span>
                        <span class="c-notification__number">3</span>
                    </a>

        <div class="c-dropdown__menu c-dropdown__menu--large dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuAlerts">
          <a href="#" class="c-dropdown__item dropdown-item o-media">
                            <span class="o-media__img u-mr-xsmall">
                                <span class="c-avatar c-avatar--xsmall">
                                    <span class="c-avatar__img u-bg-success u-flex u-justify-center u-align-items-center">
                                        <i class="fa fa-check u-text-large u-color-white"></i>
                                    </span>
                                </span>

                            </span>
                            <div class="o-media__body">
                                <h6 class="u-mb-zero">Completed a task</h6>
                                <p class="u-text-mute">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>

          <a href="#" class="c-dropdown__item dropdown-item o-media">
                            <span class="o-media__img u-mr-xsmall">
                                <span class="c-avatar c-avatar--xsmall">
                                    <span class="c-avatar__img u-bg-fancy u-flex u-justify-center u-align-items-center">
                                        <i class="fa fa-calendar u-text-large u-color-white"></i>
                                    </span>
                                </span>

                            </span>
                            <div class="o-media__body">
                                <h6 class="u-mb-zero">Company meetup</h6>
                                <p class="u-text-mute">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
          <a href="#" class="c-dropdown__item dropdown-item o-media">
                            <span class="o-media__img u-mr-xsmall">
                                <span class="c-avatar c-avatar--xsmall">
                                    <span class="c-avatar__img u-bg-primary u-flex u-justify-center u-align-items-center">
                                        <i class="fa fa-info u-text-large u-color-white"></i>
                                    </span>
                                </span>

                            </span>
                            <div class="o-media__body">
                                <h6 class="u-mb-zero">Someone mentioned you</h6>
                                <p class="u-text-mute">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
        </div>
      </div>

      <div class="c-dropdown dropdown">
        <a class="c-avatar c-avatar--xsmall has-dropdown dropdown-toggle" href="#" id="dropdwonMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="c-avatar__img" src="img/avatar-72.jpg" alt="User's Profile Picture">
                    </a>

        <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdwonMenuAvatar">
          <a class="c-dropdown__item dropdown-item" href="#">Edit Profile</a>
          <a class="c-dropdown__item dropdown-item" href="#">View Activity</a>
          <a class="c-dropdown__item dropdown-item" href="#">Manage Roles</a>
        </div>
      </div>
    </header>

      <section class="content">
    <div class="container-fluid">
      <div class="row">
      <div class="col-12">
        <div class="card-box">
          <h4 class="m-t-0 header-title">Add Customer</h4>
          <form  method="post" id="insert_customer" class="insert_customer">

            <div class="form-group row">
                <label for="customerName" class="col-sm-3 col-form-label">Customer name
                  <i class="text-danger"> *</i>
                </label>
              <div class="col-sm-6">

                <input class="form-control" aria-required="true" type="text" id="customer_name" name="customer_name" placeholder="Customer name " required>
            </div>
          </div>
          <div class="form-group row">
                <label for="customerMobile" class="col-sm-3 col-form-label">Customer Mobile
                  <i class="text-danger"> *</i>
                </label>
              <div class="col-sm-6">

                <input class="form-control" id="customer_mobile" aria-required="true" type="text" name="customer_mobile" placeholder="Customer mobile" required>

              </div>
            </div>
            <div class="form-group row">
                <label for="customerAddress" class="col-sm-3 col-form-label">Customer Address
                  <i class="text-danger"> *</i>
                </label>


              <div class="col-sm-6">

                <textarea class="form-control" name="customer_address" id="customer_address " rows="3" placeholder="Customer Address"></textarea>
                  </div>
                  </div>
                  <div class="form-group row">
                <label for="customerDetails" class="col-sm-3 col-form-label">Customer Details
                  <i class="text-danger"> *</i>
                </label>

              <div class="col-sm-6">

                <textarea class="form-control" name="customer_details" id="details " rows="3" placeholder="Customer Details"></textarea>
              </div>
            </div>
                  <div class="col-sm-6">
                <input  type="submit" id="add-customer"  class="btn btn-primary btn-large" name="add-customer" value="Save">
                <!--<input  type="submit" id="add-customer-another"  class="btn btn-large btn-success " name="add-customer-another" value="Save and Add Another">-->
                        </div>
            </div>
          </form>
        </div>
      </div>


      </div>
      <!--  <span class="c-divider has-text u-mb-medium">Active Projects</span>-->
    </div>
    <!-- // .container -->
    </section>

  </main>
  <!-- // .o-page__content -->

  <!-- Main javascsript -->
  <script src="js/main.min3661.js?v=2.0"></script>
  <script src="./bootstrapjs/bootstrap.js"></script>
  <script src="./bootstrapjs/bootstrap.min.js"></script>
  <script src="./js/jquery-3.2.1.js"></script>

<script>
  $(document).ready(function() {
  $('#insert_customer').on('submit', function(event){
    event.preventDefault();
    if($('#customer_name').val() == ''){
      alert('Customer name is required');
    }
    else if($('#customer_mobile').val() == ''){
      alert('Customer mobile is required');
    }

    else{
      $.ajax({
        url:"customers.php",
        method:"POST",
        data:$("#insert_customer").serialize(),
        success:function(data){
          $("#insert_customer")[0].reset();
          $('#confirm').append('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Customer added successfully.</div>');

        }
      });
    }

  });

  });
</script>
</body>



</html>
