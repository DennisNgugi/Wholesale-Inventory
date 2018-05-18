<!doctype html>
<html lang="en-us">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Categories</title>
  <meta name="description" content="Dashboard UI Kit">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font -->
  <link href="../../fonts.googleapis.com/cssc604.css?family=Source+Sans+Pro:300,400,400i,600" rel="stylesheet">

  <!-- Favicon -->


    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Stylesheet -->
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/style.css">

  <!-- Datatables -->
  <link rel="stylesheet" href="../includes/datatables/dataTables.bootstrap4.min.css">
</head>

<body class="o-page">
  <div class="o-page__sidebar js-page-sidebar">
    <div class="c-sidebar">
      <a class="c-sidebar__brand" href="#">
                    <img class="c-sidebar__brand-img" src="../img/logo.png" alt="Logo"> Dashboard
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

      <h2 class="c-navbar__title u-mr-auto">Categories</h2>

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
                                    <img class="c-avatar__img" src="../img/avatar2-72.jpg" alt="User's Profile Picture">
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
                                    <img class="c-avatar__img" src="../img/avatar3-72.jpg" alt="User's Profile Picture">
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
                                    <img class="c-avatar__img" src="../img/avatar4-72.jpg" alt="User's Profile Picture">
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
                        <img class="c-avatar__img" src="../img/avatar-72.jpg" alt="User's Profile Picture">
                    </a>

        <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdwonMenuAvatar">
          <a class="c-dropdown__item dropdown-item" href="#">Edit Profile</a>
          <a class="c-dropdown__item dropdown-item" href="#">View Activity</a>
          <a class="c-dropdown__item dropdown-item" href="#">Manage Roles</a>
        </div>
      </div>
    </header>
    <?php
    require "../connection/config.php";
      $fetch = $mysqli->query("SELECT * FROM categories");

     ?>
      <section class="content">
    <div class="container-fluid">
      <div class="row">
      <div class="col-12">
        <div class="card-box">
          <h4 class="m-t-0 header-title">Manage Categories</h4>
          <div class="row  mt-4">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 text-center">
              <div class="dt-buttons btn-group">
                <a class="btn btn-default buttons-copy buttons-html5 btn-sm" tabindex="0" aria-controls="dataTableExample3"><span>Copy</span></a>
                <a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0" aria-controls="dataTableExample3"><span>CSV</span></a>
                <a class="btn btn-default buttons-excel buttons-html5 btn-sm" tabindex="0" aria-controls="dataTableExample3"><span>Excel</span></a>
                <a class="btn btn-default buttons-pdf buttons-html5 btn-sm" tabindex="0" aria-controls="dataTableExample3"><span>PDF</span></a>
                <a class="btn btn-default buttons-print btn-sm" tabindex="0" aria-controls="dataTableExample3"><span>Print</span></a>
              </div>
            </div>
            <div class="col-sm-4"></div>
          </div>
            <div class="row">
            <div class="table-responsive" style="margin-top:20px;">
              <table id="datatable" class="table table-bordered table-hover">
                <thead >
                  <tr role="row">
                    <th class="text-center">#</th>
                    <th class="text-center">Category Name</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php while($row=$fetch->fetch_assoc()){ ?>
                  <tr role="row">

                      <td class="text-center"><?php echo $row['category_id']; ?></td>
                      <td class="text-center"><?php echo $row['category_name']; ?></td>

                      <td>
                        <center>
                        <a href="http://localhost/demo/php_actions/updateCategories.php?id=<?php echo $row['category_id']; ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update">
                          <i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="" class="deleteProduct btn btn-danger btn-sm" name="" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete ">
                        <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                      </center>
                      </td>

                  </tr>
                    <?php } ?>
                </tbody>
              </table>
          </div>
      <!--  <span class="c-divider has-text u-mb-medium">Active Projects</span>-->
    </div>
  </div>
</div>
</div>
</div>

    <!-- // .container -->
    </section>

  </main>
  <!-- // .o-page__content -->

  <!-- Main javascsript -->
  <script src="../js/main.min3661.js?v=2.0"></script>
    <script src="../js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
      <script src="../includes/datatables/jquery.dataTables.min.js"></script>
        <script src="../includes/datatables/dataTables.bootstrap4.min.js"></script>


  <script>
  $(document).ready(function() {
    $('#datatable').DataTable();

    });
  </script>
</body>

<!-- Mirrored from dashboard.zawiastudio.com/demo/home-overview.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Apr 2018 07:54:16 GMT -->

</html>
