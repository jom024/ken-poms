<?php
   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POMS | Ken Printshoppe</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
    <link href="css/poms2.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <img src="images/ken_logo1.png" alt="logo" id="logo">
                </button>
                <div class="sidebar-logo">
                    <a href="#">Ken Printshoppe</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="?p=dashboard" class="sidebar-link">
                        <i class="lni lni-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="?p=profile" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="?p=orders" class="sidebar-link">
                        <i class="lni lni-clipboard"></i>
                        <span>Orders</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="?p=clients" class="sidebar-link">
                        <i class="lni lni-customer"></i>
                        <span>Clients</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-stats-up"></i>
                        <span>Analytics</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="?p=analytics1" class="sidebar-link">Analytics 1</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="?p=analytics2" class="sidebar-link">Analytics 2</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="lni lni-layout"></i>
                        <span>Multi Level</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                Two Links
                            </a>
                            <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="?p=link1" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="?p=link2" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="?p=notifications" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Notification</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="?p=settings" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="logout.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main text-center ps-2 pe-2">
            <div>
                <?php 
                    if (isset($_GET['p'])) {
                        $p = $_GET['p'];
                    } else {
                        $p = '';
                    }

                    if($p == '' || $p == 'dashboard') {
                        ?> <?php include 'dashboard.php'; ?> <?php

                    } 
                    else if($p == 'profile'){
                        ?> <?php include 'profile.php'; ?> <?php
                    }
                    else if($p == 'orders'){
                        ?> <?php include 'order.php'; ?> <?php
                    }
                    else if($p == 'clients'){
                        ?> <?php include 'client.php'; ?> <?php
                    }
                    else if($p == 'analytics1'){
                        ?> <?php include 'analytics.html' ?> <?php
                    }
                    else if($p == 'analytics2'){
                        ?> <h1>Analytics 2 Section</h1> <?php
                    }
                    else if($p == 'link1'){
                        ?> <h1>Link 1 Section</h1> <?php
                    }
                    else if($p == 'link2'){
                        ?> <h1>Link 2 Section</h1> <?php
                    }
                    else if($p == 'notifications'){
                        ?> <?php include 'notifications.html'; ?> <?php
                    }
                    else if($p == 'settings'){
                        ?> <?php include 'settings.html'; ?> <?php
                    }
                ?>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php"; ?>
</body>

</html>