<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Wizard</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form id="orderWizardForm" method="post">
        <div class="card">
          <div class="card-header">
            <h3>Order Wizard</h3>
          </div>
          <div class="card-body">
            <div class="wizard">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#orderDetails" data-toggle="tab">Order Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#productDetails" data-toggle="tab">Product Details</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="orderDetails">
                  <div class="form-group">
                    <label for="orderNumber">Order Number</label>
                    <input type="text" class="form-control" id="orderNumber" name="orderNumber" required>
                  </div>
                  <div class="form-group">
                    <label for="customerName">Customer Name</label>
                    <input type="text" class="form-control" id="customerName" name="customerName" required>
                  </div>
                  <div class="form-group">
                    <label for="paymentMethod">Payment Method</label>
                    <select class="form-control" id="paymentMethod" name="paymentMethod" required>
                      <option value="">Select Payment Method</option>
                      <option value="Credit Card">Credit Card</option>
                      <option value="PayPal">PayPal</option>
                      <option value="Cash on Delivery">Cash on Delivery</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="orderDate">Order Date</label>
                    <input type="date" class="form-control" id="orderDate" name="orderDate" required>
                  </div>
                  <div class="form-group">
                    <label for="orderStatus">Order Status</label>
                    <select class="form-control" id="orderStatus" name="orderStatus" required>
                      <option value="">Select Order Status</option>
                      <option value="Pending">Pending</option>
                      <option value="Processing">Processing</option>
                      <option value="Shipped">Shipped</option>
                      <option value="Delivered">Delivered</option>
                    </select>
                  </div>
                </div>
                <div class="tab-pane" id="productDetails">
                  <div class="form-group">
                    <label for="productName">Product Name</label>
                    <input type="text" class="form-control" id="productName" name="productName" required>
                  </div>
                  <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" required>
                  </div>
                  <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" id="category" name="category" required>
                      <option value="">Select Category</option>
                      <option value="Electronics">Electronics</option>
                      <option value="Clothing">Clothing</option>
                      <option value="Books">Books</option>
                      <option value="Home & Garden">Home & Garden</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="unitPrice">Unit Price</label>
                    <input type="number" class="form-control" id="unitPrice" name="unitPrice" required>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-secondary" id="prevBtn">Previous</button>
            <button type="button" class="btn btn-primary" id="nextBtn">Next</button>
            <button type="submit" class="btn btn-success" id="submitBtn">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
$(document).ready(function () {
  var form = $("#orderWizardForm");

  form.validate({
    errorPlacement: function errorPlacement(error, element) { 
      toastr.error(error.text());
    },
    rules: {
      orderNumber: "required",
      customerName: "required",
      paymentMethod: "required",
      orderDate: "required",
      orderStatus: "required",
      productName: "required",
      quantity: {
        required: true,
        min: 1
      },
      category: "required",
      unitPrice: {
        required: true,
        min: 0
      }
    },
    messages: {
      orderNumber: "Please enter the order number",
      customerName: "Please enter the customer name",
      paymentMethod: "Please select the payment method",
      orderDate: "Please select the order date",
      orderStatus: "Please select the order status",
      productName: "Please enter the product name",
      quantity: {
        required: "Please enter the quantity",
        min: "Please enter a valid quantity"
      },
      category: "Please select the category",
      unitPrice: {
        required: "Please enter the unit price",
        min: "Please enter a valid unit price"
      }
    }
  });

  $("#nextBtn").click(function () {
    if (form.valid()) {
      var nextTab = $('.nav-tabs .active').parent().next('li').find('a');
      nextTab.trigger('click');
    }
  });

  $("#prevBtn").click(function () {
    var prevTab = $('.nav-tabs .active').parent().prev('li').find('a');
    prevTab.trigger('click');
  });

  $("#submitBtn").click(function () {
    if (form.valid()) {
      toastr.success("Form submitted successfully!");
    }
  });
});
</script>

</body>
</html>
