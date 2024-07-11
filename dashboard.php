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
    <!-- Existing Navbar -->

    <!-- Dashboard Navbar -->
    <div class="sticky-navbar">
        <h1 class="text-start" style="color: black;">Dashboard</h1>
    </div>

    <main>
        <!-- Summary Metrics -->
        <div class="summary">
            <div class="summary-item">Total Orders: 120</div>
            <div class="summary-item">Pending Orders: 15</div>
            <div class="summary-item">Completed Orders: 95</div>
            <div class="summary-item">Cancelled Orders: 10</div>
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
            <div class="summary-item" style="background-color: #7D3F8A;">Top Customer: Jane Smith</div>
            <div class="summary-item" style ="background-color: #D97D00;">Recent Feedback: Excellent Service!</div>
        </div>
    </main>
</body>
</html>
