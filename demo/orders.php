<?php
require "connection/config.php";
$query1= $mysqli->query("SELECT customer_id,customer_name FROM customers ORDER BY customer_name ASC");
$query2=$mysqli->query("SELECT product_id,product_name FROM products ORDER BY product_name ASC");
 ?>

<!doctype html>
<html lang="en-us">


<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Invoice</title>
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
          <a class="c-sidebar__link is-active" href="home-overview.html">
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

      <h2 class="c-navbar__title u-mr-auto">Orders</h2>

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
              <h4 class="m-t-0 header-title">New Invoice</h4>
              <form  method="post" id="insert_invoice" class="insert_invoice">

                <div class="row">

                  <div class="col-sm-8" id="payment_from_1" style="display: block;">
                    <div class="form-group row">
                      <label for="customer_name" class="col-sm-3 col-form-label">Customer Name <i class="text-danger">*</i></label>
                      <div class="col-sm-6">
                        <select class="form-control customer_name" name="customer_name">
                          <option value="">Choose customer</option>
                          <?php while ($row=$query1->fetch_array()) { ?>
                              <option value="<?php echo $row[0] ?>"><?php echo $row['customer_name'] ?></option>
                        <?php } ?>
                        </select>
                        </div>
                      <div class=" col-sm-3">
                        <input id="myRadioButton_1" type="button" onclick="active_customer('payment_from_1')" class="btn btn-primary checkbox_account" name="customer_confirm" checked="checked" value="New Customer" tabindex="2">
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-8" id="payment_from_2" style="display: none;">
                    <div class="form-group row">
                      <label for="customer_name_others" class="col-sm-3 col-form-label">Payee Name <i class="text-danger">*</i></label>
                      <div class="col-sm-6">
                        <input autofill="off" type="text" size="100" name="customer_name_others" placeholder="Payee Name" id="customer_name_others" class="form-control">
                      </div>

                      <div class="col-sm-3">
                        <input onclick="active_customer('payment_from_2')" type="button" id="myRadioButton_2" class="checkbox_account btn btn-primary" name="customer_confirm_others" value="Old Customer">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="customer_name_others_address" class="col-sm-3 col-form-label">Address </label>
                      <div class="col-sm-6">
                        <input type="text" size="100" name="customer_name_others_address" class=" form-control" placeholder="Address" id="customer_name_others_address">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group row">
                      <label for="date" class="col-sm-4 col-form-label">Date <i class="text-danger">*</i></label>
                      <div class="col-sm-8">
                        <input class="datepicker form-control hasDatepicker" type="date" size="50" name="order_date" id="date" required="" value="04-05-2018" tabindex="3">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="add_new ml-auto p-4">
                    <button type="button" id="add-invoice-item" name="add-invoice-item" class="btn btn-success"><i class="fa fa-plus"></i> Add New Item</button>
                  </div>

                  <div class="table-responsive" style="margin-top:10px;">

                    <table class="table table-bordered table-hover" id="normalinvoice">
                      <thead>

                        <tr>
                          <td class="text-center">
                            Item information
                            <i class="text-danger">*</i>
                          </td>
                          <td class="text-center">
                            Available Qty
                          </td>
                          <td class="text-center">
                            Sell price
                          </td>

                          <td class="text-center">
                            Quantity
                          </td>
                          <td class="text-center">
                            Total
                          </td>
                          <td class="text-center">
                            Action
                          </td>
                        </tr>

                      </thead>
                      <tbody id=addInvoiceItem>
                        <td style="width:220px;">
                          <select class="form-control product_name" name="product_name">
                              <option value="">Choose Product</option>
                              <?php while($row2 = $query2->fetch_array()){ ?>
                                  <option value="<?php echo $row2[0]; ?>"><?php echo $row2['product_name']; ?></option>
                              <?php } ?>
                          </select>
                          </td>
                        <td>
                          <input type="text" id="available_quantity" name="available_quantity" class="form-control text-right" value="" readonly="">
                        </td>
                        <td>
                          <input type="text" id="sell_price" name="sell_price" class="form-control text-right" value="">
                        </td>

                        <td>
                          <input type="text" name="product_quantity" id="product_quantity" class="form-control text-right" value="" min="1" tabindex="5" placeholder="0">
                        </td>

                          <td>
                          <input type="text" name="total" value="" id="total_price" class="form-control text-right" tabindex="6">
                        </td>

                    <td>

              <button style="text-align:right;" class="btn btn-danger" type="button" value="Delete" id="delete_row" tabindex="8">Delete</button>
          </td>

                      </tbody>

            <tfoot>
              <tr>
              <td colspan="5"style="text-align:right;">
                <b>Total Discount</b>
              </td>
              <td style="width:150px;" class="text-right">
              <input type="text" id="total_discount" tabindex="" class="form-control text-right" name="total_discount_amount">
          </td>
              </tr>
              <tr>
                <td colspan="5" style="text-align:right;">
               <b>Grand Total</b>
                </td>
                <td class="text-right">
                <input type="text" id="grand_total" tabindex="" class="form-control text-right" name="grand_total_price" placeholder="0.00" readonly="readonly">
            </td>
              </tr>
              <tr>

                <td colspan="4" style="text-align:right;">
                  <b>Paid Amount</b>
                </td>
                   <td class="text-right">
                     <input type="text" id="paid_amount" class="form-control text-right" name="paid_amount" value="" placeholder="0.00" tabindex="22">
                   </td>
              </tr>
              <tr>


            <td style="text-align:right;" colspan="5"><b>Due:</b></td>
            <td class="text-right">
                <input type="text" id="due_amount" class="form-control text-right" name="due_amount" value="0.00" readonly="readonly">
            </td>
        </tr>

            </tfoot>
                    </table>
                    <input type="submit" id="add_invoice" class="btn btn-success" name="add_invoice" value="Submit" tabindex="24">

                    <input type="button" id="full_paid_tab" class="btn btn-warning" name="" value="Full Paid" tabindex="23" onclick="full_paid();">





                      </div>
                    </div>
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
      $('.product_name').change(function(){
        var product_id = $(this).val();
        var tr = $(this).parent().parent();
        $.ajax({
          url:"php_actions/load_data_1.php",
          method:"POST",
          data:{product_id:product_id},
          dataType:"text",
          success:function(data){
            tr.find('#available_quantity').val(data);
              calculate();

          }
        });
      });
      $('.product_name').change(function(){
        var product_id = $(this).val();
        var tr = $(this).parent().parent();
        $.ajax({
          url:"php_actions/load_data_2.php",
          method:"POST",
          data:{product_id:product_id},
          dataType:"text",
          success:function(data){
            tr.find('#sell_price').val(data);
            tr.find('#total_price').val(0.00);
              calculate(0,0);
          }
        });
      });

      $('#product_quantity').keyup(function() {
        var quantity = $(this);
        var tr = $(this).parent().parent();
        var sell_price = parseFloat(tr.find('#sell_price').val());

        if(isNaN(quantity.val())){
          alert("Please enter a valid quantity");

        }else{
          if((quantity.val()-0) > (tr.find('#available_quantity').val()-0)){
            alert("This much of quantity is not available");
            tr.find('#total_price').val(0);
            $('#grand_total').val(0);
          }
          else{
              tr.find('#total_price').val(quantity.val() * sell_price);
              calculate(0,0);
          }
        }


      });


  $('tr').find('#total_discount').keyup(function() {
        var discount = $(this).val();
        calculate(discount,0);
      });


    function calculate(dis,paid){
        var discount = dis;
        var grandtotal = parseFloat(0);
        var paid_amt = paid;
        var due = 0;
    $('tr').find('#total_price').each(function() {

      grandtotal= grandtotal + parseFloat(($(this).val() * 1));

    });
     grandtotal = grandtotal - discount;
     due = grandtotal-paid_amt;
        $('#grand_total').val(grandtotal);
        $('#due_amount').val(due);
      }

      $('#paid_amount').keyup(function(){
        var paid_amount = $(this).val();
        var discount = $('#total_discount').val();
        calculate(discount,paid_amount);
      });

      $('#add-invoice-item').click(function(){
           var data = $("#normalinvoice tr:eq(1)").clone(true).appendTo("#normalinvoice");
           data.find("input").val('');
           $(document).on('click', '#delete_row', function() {
             var trIndex = $(this).closest("tr").index();
                if(trIndex>0) {
                 $(this).closest("tr").remove();
                 calculate(0,0);
               }

               });
      });

    });
  </script>

</body>

<!-- Mirrored from dashboard.zawiastudio.com/demo/home-overview.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Apr 2018 07:54:16 GMT -->

</html>
