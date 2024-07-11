<?php
$connection = mysqli_connect("localhost", "root", "", "ken_poms");

// Insert
if (isset($_POST['save'])) {
    $client_id = $_POST['client_id'];
    $order_status = $_POST['order_status'];
    $payment_status = $_POST['payment_status'];
    $total_price = $_POST['total_price'];
    $order_date = $_POST['order_date'];
    $fulfillment_date = $_POST['fulfillment_date'];

    $insert_query = "INSERT INTO orders (client_id, order_status, payment_status, total_price, order_date, fulfillment_date) VALUES ('$client_id', '$order_status', '$payment_status', '$total_price', '$order_date', '$fulfillment_date')";

    $insert_query_run = mysqli_query($connection, $insert_query);

    if ($insert_query_run) {
        $_SESSION['status'] = "Data inserted successfully";
        header("Location: index.php?p=orders");
    } else {
        $_SESSION['status'] = "Insertion of data failed";
        header("Location: error.php");
    }
}


// View
if (isset($_POST['click-view-btn'])) {
    $id = $_POST['order-id'];

    $fetch_query = "SELECT * FROM orders WHERE order_id='$id'";
    $fetch_query_run = mysqli_query($connection, $fetch_query);

    if (mysqli_num_rows($fetch_query_run) > 0) {
        while ($row =  mysqli_fetch_array($fetch_query_run)) {
            echo '<h6 class="text-center">Order ID: &nbsp&nbsp&nbsp'.$row['order_id'].'</h6>
            <h6 class="text-center">Client ID: &nbsp&nbsp&nbsp'.$row['client_id'].'</h6>
            <h6 class="text-center">Order Status: &nbsp&nbsp&nbsp'.$row['order_status'].'</h6>
            <h6 class="text-center">Payment Status: &nbsp&nbsp&nbsp'.$row['payment_status'].'</h6>
            <h6 class="text-center">Total Price: &nbsp&nbsp&nbsp'.$row['total_price'].'</h6>
            <h6 class="text-center">Date of Order: &nbsp&nbsp&nbsp'.$row['order_date'].'</h6>
            <h6 class="text-center">Fulfillment Date: &nbsp&nbsp&nbsp'.$row['fulfillment_date'].'</h6>
            ';
        }
    } else {
        echo '<h4>No record found.</h4>';
    }
}

// Edit
if (isset($_POST['click-edit-btn'])) {
    $id = $_POST['order-id'];
    $array_result = [];

    $fetch_query = "SELECT * FROM orders WHERE order_id='$id'";
    $fetch_query_run = mysqli_query($connection, $fetch_query);

    if (mysqli_num_rows($fetch_query_run) > 0) {
        while ($row =  mysqli_fetch_array($fetch_query_run)) {
            
            array_push($array_result, $row);
            header('content-type: application/json');
            echo json_encode($array_result);
        }
    } else {
        echo '<h4>No record found.</h4>';
    }
}

// Update
if (isset($_POST['update']))
{
    $id = $_POST['order_id'];
    $client_id = $_POST['client_id'];
    $order_status = $_POST['order_status'];
    $payment_status = $_POST['payment_status'];
    $total_price = $_POST['total_price'];
    $order_date = $_POST['order_date'];
    $fulfillment_date = $_POST['fulfillment_date'];
    $update_query = "UPDATE orders SET client_id = '$client_id', order_status = '$order_status', payment_status ='$payment_status ' , total_price='$total_price' , order_date='$order_date' , fulfillment_date='$fulfillment_date' WHERE order_id = '$id'";

    $update_query_run = mysqli_query($connection, $update_query);

    if($update_query_run){
        $_SESSION['status'] = "Data updated successfully";
        header("Location: ../public/index.php?p=orders");
    } else {
        $_SESSION['status'] = "Update failed";
        header("Location: ../public/index.php?p=orders");
    }
}

// delete
if(isset($_POST['click_delete_btn']))
{
    $id = $_POST['order-id'];

    $delete_query = "DELETE FROM orders WHERE order_id = '$id'";
    $delete_query_run = mysqli_query($connection, $delete_query);

    if($delete_query_run)
    {
        echo "Order deletion successful.";
    } else 
    {
        echo "Order deletion failed.";
    }
}
?>