# Peer-to-Peer Marketplace User Manual

## Introduction

Welcome to the Peer-to-Peer Marketplace! This user manual will guide you through the installation process, explain the main functions of the software, and provide instructions on how to use it effectively.

## Table of Contents

1. Installation
2. Main Functions
3. Usage Instructions
4. Troubleshooting
5. Frequently Asked Questions

## 1. Installation

To install the Peer-to-Peer Marketplace, please follow these steps:

1. Ensure that you have a server running Ubuntu 22, Apache webserver, and PHP 8.
2. Clone the repository to your server.
3. Configure the database settings in the `config.php` file.
4. Import the database schema using the provided SQL file.
5. Install the required dependencies by running `composer install`.
6. Set up the Monero RPC server on `localhost:18080`.
7. Configure the CoinGecko API settings in the `config.php` file.
8. Set up the captcha system using an open-source alphanumeric five-figure combination.
9. Configure the desired theme and text color in the `config.php` file.
10. Start the Apache webserver and navigate to the marketplace URL.

## 2. Main Functions

The Peer-to-Peer Marketplace offers the following main functions:

- User registration and login with captcha protection.
- Peer-to-peer transactions using Monero as the exclusive currency.
- Unique Monero subaddresses for each user.
- Mobile-responsive design with a dark theme and blue text.
- Display of Monero account balances at the top of the marketplace.
- Dual pricing for products in Monero and USD.
- Automatic deposit crediting after at least 2 confirmations.
- Manual processing of user withdrawals by the admin.
- Buyer-seller messaging encrypted with PGP.
- Admin intervention in disputes.
- PGP keys as the sole means for password recovery.
- Admin-managed product categories.
- Inclusive forum for user discussions.
- Admin dashboard control for editing hostname, port, and overseeing user withdrawal requests.

## 3. Usage Instructions

### User Registration and Login

1. Navigate to the marketplace URL.
2. Click on the "Register" button and fill in the required information.
3. Complete the captcha to verify that you are not a bot.
4. Click on the "Register" button to create your account.
5. To log in, enter your username and password on the login page.
6. Complete the captcha to verify your identity.
7. Click on the "Login" button to access your account.

### Peer-to-Peer Transactions

1. Browse the marketplace to find a product you want to purchase.
2. Click on the product to view its details and pricing.
3. Add the product to your cart by clicking on the "Add to Cart" button.
4. Review your cart and proceed to checkout.
5. Select your desired payment method (Monero) and confirm the transaction.
6. The seller will receive a notification of the transaction.
7. Once the seller confirms the transaction, the product will be delivered to you.

### User Withdrawals

1. Go to your account settings and navigate to the withdrawal section.
2. Enter your Monero address and the amount you wish to withdraw.
3. Submit the withdrawal request.
4. The admin will manually process your withdrawal request.

### Buyer-Seller Messaging

1. Go to the product page and click on the "Contact Seller" button.
2. Compose your message and click on the "Send" button.
3. Your message will be encrypted using PGP and sent to the seller.
4. The seller will receive the encrypted message and can decrypt it using their PGP key.

### Admin Dashboard Control

1. Log in to the admin dashboard using the provided credentials.
2. From the dashboard, you can edit the hostname and port settings.
3. You can also oversee user withdrawal requests and process them manually.

## 4. Troubleshooting

If you encounter any issues while using the Peer-to-Peer Marketplace, please refer to the following troubleshooting steps:

1. Ensure that all dependencies are installed correctly.
2. Check the server logs for any error messages.
3. Verify that the Monero RPC server is running and accessible.
4. Double-check the database configuration settings.
5. Clear your browser cache and try again.
6. If the issue persists, please contact our support team for further assistance.

## 5. Frequently Asked Questions

Q: Can I use a different cryptocurrency instead of Monero?
A: No, the Peer-to-Peer Marketplace exclusively uses Monero for transactions.

Q: How long does it take for deposits to be credited?
A: Deposits are automatically credited after at least 2 confirmations.

Q: How are withdrawals processed?
A: User withdrawals are manually processed by the admin upon withdrawal requests.

Q: Can I recover my password without a PGP key?
A: No, PGP keys serve as the sole means for password recovery.

Q: Can I customize the marketplace's theme and text color?
A: Yes, you can configure the desired theme and text color in the `config.php` file.

For more questions, please refer to our support documentation or contact our support team.

---

Thank you for choosing the Peer-to-Peer Marketplace! We hope you have a great experience using our software. If you have any further questions or need assistance, please don't hesitate to reach out to our support team.