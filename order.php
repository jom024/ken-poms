<?php 
// session_start();
require "code.php";
?>

<!-- Insert Modal -->
<div class="modal fade" id="addOrder" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addOrderLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addOrderLabel">Add Order Details</h1>
      </div>
      <form action="code.php" method="POST">
        <div class="modal-body">
          <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="client-id" class="col-form-label">Client ID</label>
            </div>
            <div class="col-auto">
              <input type="number" id="client-id" class="form-control client-id" min="1" value="1" name="client_id">
            </div>
            <div class="col-auto">
              <label for="order-status" class="col-form-label">Order Status</label>
            </div>
            <div class="col-auto">
              <select name="order_status" id="order-status" class="form-control">
                <option value="" selected disabled hidden>Choose here</option>
                <option value="Pending">Pending</option>
                <option value="Ongoing">Ongoing</option>
                <option value="On Delivery">On Delivery</option>
                <option value="Ready For Pick-up">Ready For Pick-up</option>
                <option value="Complete">Complete</option>
              </select>
            </div>
          </div>
          <div class="row g-3 align-items-center mt-1 ms-5">
            <div class="col-auto">
              <label for="payment-status" class="col-form-label">Payment Status</label>
            </div>
            <div class="col-auto">
              <select name="payment_status" id="payment-status" class="form-control">
                <option value="" selected disabled hidden>Choose here</option>
                <option value="Downpayment">Downpayment</option>
                <option value="Paid">Paid</option>
                <option value="Unpaid">Unpaid</option>
              </select>
            </div>
          </div>
          <div class="row g-3 align-items-center mt-1 ms-5">
            <div class="col-auto">
              <label for="price" class="col-form-label">Total Price</label>
            </div>
            <div class="col-auto">
              <input type="number" min="1" class="form-control" id="price" step="any" value="1.00" name="total_price">
            </div>
          </div>
        </div>
        <div class="row g-3 align-items-center ms-5 mb-3">
          <div class="col-auto ms-4">
            <label for="order-date" class="col-form-label">Date Ordered</label>
          </div>
          <div class="col-auto">
            <input type="date" name="order_date" id="order-date" class="form-control">
          </div>
          <div class="col-auto ms-3">
            <label for="fulfillment-date" class="col-form-label">Fulfillment Date</label>
          </div>
          <div class="col-auto">
            <input type="date" name="fulfillment_date" id="fulfillment-date" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="save" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- View Modal -->
<div class="modal fade" id="viewOrderModal" tabindex="-1" aria-labelledby="viewOrderModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="viewOrderModalLabel">View Order Details</h1>
      </div>
      <div class="modal-body">
        <div class="view-order-data">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editOrder" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editOrderLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editOrderLabel">Update Order Details</h1>
      </div>
      <form action="code.php" method="POST">
        <div class="modal-body">
          <div class="row g-3 align-items-center">
            <div class="col-auto">
              <input type="hidden" id="order_id" class="form-control" style="width:4.5em;" min="1" value="1" name="order_id">
            </div>
            <div class="col-auto">
              <label for="client_id" class="col-form-label ms-5">Client ID</label>
            </div>
            <div class="col-auto">
              <input type="number" id="client_id" class="form-control" style="width:4.5em;" min="1" value="1" name="client_id">
            </div>
            <div></div>
            <div class="col-auto ms-5">
              <label for="order_status" class="col-form-label">Order Status</label>
            </div>
            <div class="col-auto">
              <select name="order_status" id="order_status" class="form-control">
                <option value="" selected disabled hidden>Choose here</option>
                <option value="Pending">Pending</option>
                <option value="Ongoing">Ongoing</option>
                <option value="On Delivery">On Delivery</option>
                <option value="Ready For Pick-up">Ready For Pick-up</option>
                <option value="Complete">Complete</option>
              </select>
            </div>
          </div>
          <div class="row g-3 align-items-center mt-1 ms-5">
            <div class="col-auto">
              <label for="payment_status" class="col-form-label">Payment Status</label>
            </div>
            <div class="col-auto">
              <select name="payment_status" id="payment_status" class="form-control">
                <option value="" selected disabled hidden>Choose here</option>
                <option value="Downpayment">Downpayment</option>
                <option value="Paid">Paid</option>
                <option value="Unpaid">Unpaid</option>
              </select>
            </div>
          </div>
          <div class="row g-3 align-items-center mt-1 ms-5">
            <div class="col-auto">
              <label for="priceID" class="col-form-label">Total Price</label>
            </div>
            <div class="col-auto">
              <input type="number" min="1" class="form-control" id="priceID" step="any" name="total_price">
            </div>
          </div>
        </div>
        <div class="row g-3 align-items-center ms-5 mb-3">
          <div class="col-auto ms-4">
            <label for="order_date" class="col-form-label">Date Ordered</label>
          </div>
          <div class="col-auto">
            <input type="date" name="order_date" id="order_date" class="form-control">
          </div>
          <div class="col-auto ms-3">
            <label for="fulfillment_date" class="col-form-label">Fulfillment Date</label>
          </div>
          <div class="col-auto">
            <input type="date" name="fulfillment_date" id="fulfillment_date" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="update" class="btn btn-success">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container mt-3">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <?php
      if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        echo $_SESSION['status'];
      ?> <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Nice!</strong> <?php $_SESSION['status'] ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
        unset($_SESSION['status']);
      }
      ?>
      <div class="card">
        <div class="card-header">
          <h4 class="text-left float-start p-3">PRINT ORDER MANAGEMENT</h4>
          <!-- Button trigger modal -->
          <div class="btn-group m-3 float-end">
            <button type="button" class="btn btn-primary ordercss" data-bs-toggle="modal" data-bs-target="#addOrder">
              <i class="lni lni-plus"></i> ADD</button>
            <button type="button" class="btn btn-secondary ordercss" data-bs-toggle="modal" data-bs-target="#">
              <i class="lni lni-funnel"></i>FILTERS</button>  



          </div>
        </div>
        <div class="card-body">
          <table class="table table-warning table-striped">
            <thead>
              <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Client ID</th>
                <th scope="col">Order Status</th>
                <th scope="col">Payment Status</th>
                <th scope="col">Total Price</th>
                <th scope="col">Order Date</th>
                <th scope="col">Fulfillment Date</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $connection = mysqli_connect("localhost", "root", "", "ken_poms");

              $fetch_query = "SELECT * FROM orders";
              $fetch_query_run = mysqli_query($connection, $fetch_query);

              if (mysqli_num_rows($fetch_query_run) > 0) {
                while ($row =  mysqli_fetch_array($fetch_query_run)) {
              ?>
                  <tr>
                    <th scope="row" class="order-id"> <?php echo $row['order_id']; ?> </t>
                    <td> <?php echo $row['client_id']; ?> </td>
                    <td> <?php echo $row['order_status']; ?> </td>
                    <td> <?php echo $row['payment_status']; ?> </td>
                    <td> <?php echo $row['total_price']; ?> </td>
                    <td> <?php echo $row['order_date']; ?> </td>
                    <td> <?php echo $row['fulfillment_date']; ?> </td>
                    <td>
                    <button type="button" class="btn btn-info btn-sm text-white view-order ordercss" data-bs-toggle="modal" data-bs-target="#viewOrder">
                    <i class="lni lni-eye"></i> VIEW</button>
                    <button type="button" class="btn btn-success btn-sm edit-order ordercss" data-bs-toggle="modal" data-bs-target="#editOrder">
                    <i class="lni lni-pencil"></i> EDIT</button>
                    <button type="button" class="btn btn-danger btn-sm delete_btn ordercss">
                    <i class="lni lni-trash-can"></i> DELETE</button>
                    </td>
                  </tr>
                <?php
                }
              } else {
                ?>
                <tr>
                  <td colspan="8">No Record Found</td>
                </tr>
              <?php
              }

              ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>