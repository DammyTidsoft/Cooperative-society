
# Cooperative Society Management System

A web-based application designed to streamline the operations of cooperative societies.
It facilitates efficient management of member registrations, loan processing, subscription tracking, asset management, and more. The system aims to digitize and simplify cooperative administrative tasks, enhancing transparency and member engagement.

## Features

- **Member Management**: Register new members, manage profiles, and maintain member records.
- **Loan Processing**: Handle loan applications, approvals, repayments, and track outstanding balances.
- **Subscription Management**: Monitor member subscriptions, payment statuses, and generate reports.
- **Asset Management**: Record and manage cooperative assets, including purchases and allocations.
- **Special Contributions**: Manage unique or one-time member contributions outside regular subscriptions.
- **Search Functionality**: Robust search features to quickly locate member information, loans, assets, and contributions.
- **Authentication System**: Secure login and signup processes to protect member data.
- **Dashboard**: An intuitive dashboard providing an overview of cooperative activities and statistics.

## Technologies Used

- **Frontend**: HTML, CSS, SCSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Others**: Hack (31.0%), CSS (30.5%), SCSS (23.7%), JavaScript (11.8%), PHP (3.0%)

## Installation

1. **Clone the Repository**:

   ```bash
   git clone https://github.com/DammyTidsoft/Cooperative-society.git
   ```

2. **Set Up the Environment**:

   - Ensure you have a web server (like XAMPP or WAMP) installed.
   - Place the cloned repository in the server's root directory (e.g., `htdocs` for XAMPP).
   - Create a MySQL database for the project.
   - Import the provided SQL file (if available) to set up the necessary tables.

3. **Configure Database Connection**:

   - Navigate to the `config` directory.
   - Open the `config.php` file.
   - Update the database credentials (`host`, `username`, `password`, `database_name`) accordingly.

4. **Run the Application**:

   - Start your web server and navigate to `http://localhost/Cooperative-society/` in your browser.

## Usage

- **Sign Up**: New users can register via the `signup.php` page.
- **Login**: Registered users can log in through the `signin.php` page.
- **Dashboard**: Upon login, users are directed to the `dashboard.php`, providing an overview of activities.
- **Manage Members**: Add or view members using `signup.php` and related pages.
- **Process Loans**: Handle loan-related operations via `loan.php` and `loanindex.php`.
- **Handle Subscriptions**: Manage subscriptions through `subscription.php` and `subscriptionindex.php`.
- **Asset Management**: Oversee assets using `asset.php` and `assetindex.php`.
- **Special Contributions**: Manage unique contributions via `special.php` and `specialindex.php`.
- **Search Records**: Utilize search functionalities with `search.php`, `searchloan.php`, `searchasset.php`, and `searchspecial.php`.

## File Structure

```
Cooperative-society/
├── admin/
├── assets/
├── config/
├── css/
├── images/
├── js/
├── CHANGELOG.md
├── LICENSE.md
├── README.md
├── asset.php
├── assetindex.php
├── authentication.php
├── config.php
├── connection.php
├── contact.php
├── dashboard.php
├── db.php
├── index.php
├── loan.php
├── loanindex.php
├── maps.php
├── notifications.php
├── payasset.php
├── payloan.php
├── payspecial.php
├── search.php
├── searchasset.php
├── searchloan.php
├── searchspecial.php
├── signin.php
├── signup.php
├── signup_code.php
├── special.php
├── specialindex.php
├── subscription.php
├── subscriptionindex.php

```

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request for any enhancements or bug fixes.

## License

This project is licensed under the [MIT License](LICENSE.md).

## Author

- **Ibrahim Toheeb (DammyTidsoft)**
  - GitHub: [@DammyTidsoft](https://github.com/DammyTidsoft)
  - Portfolio: [tidsoftitsolution.wordpress.com](https://tidsoftitsolution.wordpress.com/)
  - LinkedIn: [Ibrahim Toheeb](https://www.linkedin.com/in/ibrahim-toheeb-35a8b719b)
