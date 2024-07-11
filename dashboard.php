<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Order Management System Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <!-- Dashboard Navbar -->
    <div class="sticky-navbar">
        <h1 class="text-start">Dashboard</h1>
    </div>
    <div>
        <h1 class="text-start" style="visibility:hidden;">Dashboard</h1>
        <h1 class="text-start" style="visibility:hidden;">Dashboard</h1>
    </div>

    <main>
        <!-- Summary Metrics -->
        <div class="row">
    <div class="col-md-3 mb-3">
        <div class="card text-center">
            <div class="card-header">
                Total Orders
            </div>
            <div class="card-body" style="background: none;">
                <h5 class="card-title">120</h5>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="card text-center">
            <div class="card-header">
                Pending Orders
            </div>
            <div class="card-body" style="background: none;">
                <h5 class="card-title">15</h5>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="card text-center">
            <div class="card-header">
                Completed Orders
            </div>
            <div class="card-body" style="background: none;">
                <h5 class="card-title">95</h5>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="card text-center">
            <div class="card-header">
                Cancelled Orders
            </div>
            <div class="card-body" style="background: none;">
                <h5 class="card-title">10</h5>
            </div>
        </div>
    </div>
</div>


        <!-- Recent Orders -->
        <div class="order-status">
            <h2>Recent Orders</h2>
            <ul>
                <li>Order ID: 101, Customer: John Doe, Date: 2023-07-01, Status: Pending</li>
                <!-- More orders -->
            </ul>
        </div>

        <!-- Order Status Overview -->
        <div class="analytics">
            <div>
                <h2>Order Status Overview</h2>
                <!-- Pie chart or bar graph -->
            </div>
        </div>

        <!-- Notifications/Alerts -->
        <div class="notifications-popup">
            <h2>Alerts</h2>
            <ul>
                <li>Order ID: 102 is overdue!</li>
                <!-- More alerts -->
            </ul>
            <span class="close">&times;</span>
        </div>

        <!-- Upcoming Tasks/Reminders -->
        <div class="update">
            <div class="recent-orders">
                <h2>Upcoming Tasks</h2>
                <ul>
                    <li>Deliver order ID: 103</li>
                    <!-- More tasks -->
                </ul>
            </div>
        </div>

        <!-- Performance Analytics -->
        <div class="analytics">
            <div>
                <h2>Performance Analytics</h2>
                <!-- Graphs or charts -->
            </div>
        </div>

        <!-- Actions and Shortcuts -->
        <div class="actions">
            <button class="btn create-order">Create New Order</button>
            <button class="btn notifications">Manage Inventory</button>
        </div>

        <!-- Customer Insights -->
        <div class="summary">
            <div class="summary-item">Top Customer: Jane Smith</div>
            <div class="summary-item">Recent Feedback: Excellent Service!</div>
        </div>
    </main>
</body>
</html>
