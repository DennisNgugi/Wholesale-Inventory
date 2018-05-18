<?php
require_once "connection/config.php";
$sql=$mysqli->query("SELECT supplier_id,supplier_name FROM suppliers ORDER BY supplier_name ASC");
 $sql2= $mysqli->query("SELECT product_id,product_name FROM products  ORDER BY product_name ASC");

 ?>

<!doctype html>
<html lang="en-us">


<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Purchase</title>
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

      <h2 class="c-navbar__title u-mr-auto">Purchase</h2>

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
      <div class="col-12 col-sm-12">
        <div class="card-box">
          <h4 class="m-t-0 header-title">Add Purchase</h4>
          <span id="confirm"></span>
          <form method="post" id="insert_purchase" class="insert_purchase" >
              <div class="row">

                  <div class="col-md-6">
                    <div class="form-group row">
                      <label for="Supplier" class="col-sm-3 col-form-label"> Suppplier</label>
                      <i class="text-danger">*</i>

                    <div class="col-md-6">

                      <select name="supplier_name" class="form-control" id="supplier_name" aria-required="true">
                        <option value="Choose supplier">Choose Supplier</option>
                        <?php while ($row = $sql->fetch_array()) { ?>


                        <option value="<?php echo htmlentities($row[0]); ?>"> <?php echo htmlentities($row['supplier_name']); ?></option>
                        <?php   } ?>

                     </select>
                    </div>
                    <div class="col-sm-3">
                      <a style="text-decoration:none;" href="">Add Supplier</a>
                    </div>
                    </div>

                  </div>
                    <div class="col-sm-6">
      <div class="form-group row">
          <label for="date" class="col-sm-4 col-form-label">Purchase Date
            <i class="text-danger">*</i>
          </label>
          <div class="col-sm-8">
<input type="text" tabindex="2" class="form-control datepicker hasDatepicker" name="purchase_date" placeholder="05-05-2018" id="date" required="" aria-required="true">
          </div>

      </div>
  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6 float-right">
                    <div class="form-group row">
                      <label for="details" class="col-sm-3 col-form-label">Details</label>
                      <div class="col-md-6">
                        <input type="text" name="details" class="form-control" value="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-responsive" style="margin-top: 10px">
                            <table class="table table-bordered table-hover" id="purchaseTable">
                                <thead>
                                    <tr>
                                        <th class="text-center">Product name<i class="text-danger">*</i></th>
                                        <th class="text-center">Stock/Qnt</th>
                                        <th class="text-center">Quantity </th>
                                        <th class="text-center">Rate<i class="text-danger">*</i></th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="addPurchaseItem">
                                    <tr>
                                        <td style="width:220px;" class="span3 supplier">

                                          <select name="product_name" class="form-control pid" aria-required="true">
                                            <div class="col-md-5">
                                            <option value="">Choose Product</option>

                                           <?php while ($row2 = $sql2->fetch_array()) { ?>


                                           <option value="<?php echo htmlentities($row2[0]); ?>"> <?php echo htmlentities($row2['product_name']); ?></option>
                                           <?php   } ?>
                                         </select>

                                         </div>                                           <!-- <select class="form-control supplier"></select> -->
                                        </td>
                                            <td>
                                            <input type="text" id="show_quantity" class="form-control text-right stock_ctn_1" readonly="">
                                          </td>

                                        <td class="text-right">
                                            <input type="text" name="product_quantity" id="total_quantity" class="form-control text-right" placeholder="0.00">
                                        </td>
                                        <td>
                                            <input type="text" name="product_rate"  id="price_item" class="form-control price_item1 text-right" placeholder="0.00" value="" min="0" tabindex="7">
                                        </td>
                                        <td class="text-right">
                                            <input class="form-control total_price text-right" type="text" name="total_price" id="total_price" value="0.00" tabindex="-1" readonly="readonly">
                                        </td>
                                        <td>
                                          <input type="button" id="delete-purchase-item" name="delete-purchase-item" class="btn btn-danger" value="Delete">
                                        </td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2">
                                            <input type="button" id="add-purchase-item" class="btn btn-info" name="add-purchase-item"  value="Add New Item" tabindex="9">

                                          </td>
                                        <td style="text-align:right;" colspan="2"><b>Grand Total:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="grandTotal" tabindex="-1" class="text-right form-control" name="grand_total_price" value="0.00" readonly="readonly">
                                        </td>
                                    </tr>

                                </tfoot>
                            </table>
                            <td>
                              <input type="submit" id="submit" name="submit" class="btn btn-secondary" value="Save">
                            </td>
                        </div>
              </div>
          </form>

          <div class="show">

          </div>
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
  $('.pid').change(function(){
    var product_id = $(this).val();
    $.ajax({
      url:"php_actions/load_data_1.php",
      method:"POST",
      data:{product_id:product_id},
      dataType:"text",
      success:function(data){
        $('#show_quantity').val(data);
      }
    });
  });
  var count = 1;
  $('#add-purchase-item').click(function(){
    count = count +1;
    var html ='<tr id="row'+count+'">';
    html+='<td class="span3 supplier"><select name="pid" class="form-control pid"><div class="col-md-5"><option value="">Choose Product</option> <?php while ($row2 = $sql2->fetch_array()) { echo "<option value='".$row2[0]."'>".$row2['product_name']."</option>"; }?></select></div></td>';
    html+='<td contenteditable="true"><input type="text" id="show_quantity" class="form-control text-right stock_ctn_1" readonly=""></td>';
    html+='<td contenteditable="true" class="text-right"><input type="text" name="product_quantity[]" id="total_qntt_1" class="form-control text-right" placeholder="0.00"></td>';
    html+='<td contenteditable="true"><input type="text" name="product_rate[]" onkeyup="quantity_calculate(1);" onchange="quantity_calculate(1);" id="price_item_1" class="form-control price_item1 text-right" placeholder="0.00" value="" min="0" tabindex="7"></td>';
    html+='<td contenteditable="true" class="text-right"><input class="form-control total_price text-right" type="text" name="total_price[]" id="total_price_1" value="0.00" tabindex="-1" readonly="readonly"></td>';
    html+='<td contenteditable="true"><input type="button" id="delete-purchase-item" data-row="row'+count+'" name="delete-purchase-item" class="btn btn-danger" value="Delete"></td>';
    html+='</tr>';

    $('#addPurchaseItem').append(html);

    $('#delete-purchase-item').click(function(){
      var delete_row = $(this).data("row");
      $('#'+delete_row).remove();
    });
  });
  $('#insert_purchase').on('submit', function(event){
    event.preventDefault();
    if($('#supplier_name').val() == ''){
      alert('Supplier name is required');
    }
    else if($('.pid').val() == ''){
      alert('Product name is required');
    }
    else if($('#total_quantity').val() == ''){
      alert('Quantity is required');
    }
    else if($('#price_item').val() == ''){
      alert('Rate field is required');
    }

    else{
      $.ajax({
        url:"php_actions/addPurchase.php",
        method:"POST",
        data:$("#insert_purchase").serialize(),
        success:function(data){
          $("#insert_purchase")[0].reset();
          $('#confirm').append('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Purchase submitted successfully.</div>');
        }
      });
    }

  });



    });
  </script>

</body>



</html>
