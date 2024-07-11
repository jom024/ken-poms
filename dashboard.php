<?php

?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Employee Dashboard</title>
<link rel="stylesheet" href="css/dashboard.css">
</head>
<body>

<h1>Dashboard</h1>
<main>
    <h2> Summary </h2>
    <section class="summary">
        <div class="summary-item">
            <h2>Total Orders</h2>
            <p>1000</p>
        </div>
        <div class="summary-item">
            <h2>Pending Orders</h2>
            <p>1000</p>
        </div>
        <div class="summary-item">
            <h2>Completed Orders</h2>
            <p>1000</p>
        </div>
        <div class="summary-item">
            <h2>Revenue</h2>
            <p>&#x20B1; 50,000</p>
        </div>
    </section>

    <section class="actions">
        <button class="btn create-order">Create New Order</button>
        <button class="btn notifications" onclick="openNotifications()">Notifications</button>
    </section>

    <section class="order-status">
        <h2>Order Status Overview</h2>
        <!-- Placeholder for charts/graphs -->
    </section>

    <section class="update">
        <section class="recent-orders">
            <h2>Recent Orders</h2>
            <ul>
                <li><a href="#">Order #1234 - John Doe - 2024-06-30 - Pending</a></li>
                <li><a href="#">Order #1233 - Jane Doe - 2024-06-29 - Completed</a></li>
                <li><a href="#">Order #1232 - Mike Wazowski - 2024-06-28 - Pending</a></li>
            </ul>
        </section>

        <section class="upcoming-tasks">
            <h2>Upcoming Tasks</h2>
            <ul>
                <li><a href="#">Order #1234 - John Doe - 2024-06-30 - Pending</a></li>
                <li><a href="#">Order #1232 - Mike Wazowski - 2024-06-28 - Pending</a></li>
            </ul>
        </section>
    </section>
    

    <section class="analytics">
        <div>
            <h2>Sales</h2>
            <!-- Placeholder for graphs/charts -->
        </div>
        <div>
            <h2>Top Customers</h2>
            <!-- Placeholder for list of top customers -->
        </div>
    </section>

    <section class="notifications-popup" id="notificationsPopup">
        <div class="popup-content">
            <span class="close" onclick="closeNotifications()">&times;</span>
            <h3>Notifications</h3>
            <ul>
                <li>New order received from Jane Doe</li>
                <li>Order #1234 status changed to Pending</li>
                <li>Approve proof for Order #1234 due today</li>
            </ul>
        </div>
    </section>
</main>

<footer>
    <p>&copy; 2024 Ken PrintShoppe. All rights reserved.</p>
</footer>

<script>
function openNotifications() {
    document.getElementById("notificationsPopup").style.display = "block";
}

function closeNotifications() {
    document.getElementById("notificationsPopup").style.display = "none";
}
</script>

</body>
</html>

    
<?php

?>