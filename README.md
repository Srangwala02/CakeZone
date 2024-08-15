# CakeZone - Online Cake Ordering System

## Project Overview
CakeZone is an online cake ordering system that allows users to browse through a variety of cakes, add items to their cart, and place orders. The system also includes features for user account creation, login/logout functionality, and an admin panel for managing products, orders, and users. 

## Key Features
- **Cake Ordering**: Browse and select cakes from a wide range of options available.
- **Add to Cart**: Add selected cakes to the shopping cart for easy checkout.
- **User Account Management**: Create a user account, log in, and log out.
- **Order Management**: Users can place orders for cakes and view their order history.
- **Admin Panel**: Manage cakes, orders, and users through a dedicated admin panel.

## Technologies Used
- **Backend**: PHP
- **Database**: MySQL
- **Frontend**: HTML, CSS
- **AJAX**: For asynchronous operations like adding to cart without reloading the page

## Installation and Setup

### Prerequisites
- **Web Server**: Apache or any other server that supports PHP.
- **Database Server**: MySQL

### Steps to Setup
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/yourusername/cakezone.git
   cd cakezone

2. **Database Setup**:

- Import the cakezone.sql file into your MySQL database.
- Update the database configuration in the config.php file with your MySQL credentials.

 3. **Server Setup**:

- Place the project files in the web server's root directory (e.g., htdocs for XAMPP or www for WAMP).
- Ensure that your web server and MySQL server are running.

4. **Access the Application**:

- Open your web browser and navigate to http://localhost/cakezone to access the website.

## Usage

- Browse Cakes: Users can browse through the list of available cakes.
- Add to Cart: Users can add their favorite cakes to the shopping cart.
- User Account:
  - Create Account: New users can create an account to place orders.
  - Login/Logout: Existing users can log in to their account or log out when done.
- Place Orders: After adding cakes to the cart, users can proceed to checkout and place an order.
- Admin Panel:
  - Manage Cakes: Add, update, or delete cake listings.
  - Manage Orders: View and manage customer orders.
  - Manage Users: View and manage user accounts.

## Future Enhancements

- Payment Integration: Integrate with payment gateways for online payments.
- Order Tracking: Allow users to track the status of their orders.
- Mobile Optimization: Improve the interface for mobile device compatibility.
