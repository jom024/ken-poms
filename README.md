# Print Order Management System (POMS)

## Overview

Welcome to the Print Order Management System (POMS) for Ken Printshoppe Graphics & Design. This system is designed to streamline the management of print orders, making it easier to handle customer requests, track order statuses, and manage inventory.

## Features

- **Order Management**: Easily create, view, update, and delete print orders.
- **Customer Management**: Maintain a database of customer information for easy access and order tracking.
- **Inventory Management**: Keep track of materials and supplies to ensure you have what you need for each order.
- **Order Tracking**: Monitor the status of orders from creation to completion.
- **Reporting**: Generate reports on orders, inventory, and customer data to help make informed business decisions.

## Getting Started

### Prerequisites

Before you begin, ensure you have met the following requirements:
- A web server environment (e.g., Apache, Nginx)
- PHP (version 7.3 or higher)
- MySQL or MariaDB database
- Native Bootstrap (CSS Framework)

### Installation

1. **Clone the Repository**
    ```sh
    git clone https://github.com/yourusername/print-order-management-system.git
    cd print-order-management-system
    ```

2. **Install PHP Dependencies**
    ```sh
    composer install
    ```

3. **Install Frontend Dependencies**
    ```sh
    npm install
    npm run build
    ```

4. **Database Setup**
    - Create a new database in MySQL or MariaDB.
    - Run the provided SQL script to set up the necessary tables.
    ```sh
    mysql -u yourusername -p yourpassword yourdatabase < database/schema.sql
    ```

5. **Configuration**
    - Copy `.env.example` to `.env` and update the necessary configurations.
    ```sh
    cp .env.example .env
    nano .env
    ```
    - Update database credentials and other settings in the `.env` file.

6. **Run Migrations**
    ```sh
    php artisan migrate
    ```

7. **Serve the Application**
    ```sh
    php artisan serve
    ```

    The application should now be running at `http://localhost:8000`.

## Usage

### Accessing the System

- Open your web browser, upload the necessary files, and open in your own `localhost` server

### Managing Orders

- **Create Order**: Navigate to the Orders section and click on "New Order".
- **View Orders**: View all existing orders in the Orders section.
- **Update Order**: Click on an order to edit its details.
- **Delete Order**: Select an order and click "Delete".

### Managing Customers

- **Add Customer**: Navigate to the Customers section and click on "New Customer".
- **View Customers**: View all customers in the Customers section.
- **Update Customer**: Click on a customer to edit their details.
- **Delete Customer**: Select a customer and click "Delete".

### Managing Inventory

- **Add Inventory Item**: Navigate to the Inventory section and click on "New Item".
- **View Inventory**: View all inventory items in the Inventory section.
- **Update Inventory Item**: Click on an item to edit its details.
- **Delete Inventory Item**: Select an item and click "Delete".

## Contributing

Contributions are welcome! Please follow these steps to contribute:

1. Fork the Project.
2. Create your Feature Branch.
3. Commit your Changes.
4. Push to the Branch.
5. Open a Pull Request.

## License

Distributed under the MIT License. See `LICENSE` for more information.

## Contact

Cunado, Jomar              09761944988 
Toledo, January Venice
Monsalud, Liv Jewel
Sumicad, Heart Alvern
