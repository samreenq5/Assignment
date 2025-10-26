My Guitar Shop – Product Management System

A simple **PHP and MySQL** web application for managing product data.
This project demonstrates **CRUD functionality** (Create, Read, Update, Delete) and basic web application design principles.

---

Features

* **Add Product** – Insert new product information into the database
* **View Products** – Display a list of all available products
* **Update Product** – Edit and update existing product details
* **Delete Product** – Remove products from the database
* **Error Handling** – Basic PHP error pages for invalid inputs
* **Database Integration** – MySQL database connection using PHP (`mysqli`)
* **Responsive Design** – Styled using simple CSS (`main.css`)

---

Technologies Used

| Technology   | Purpose                          |
| ------------ | -------------------------------- |
| PHP          | Backend scripting and logic      |
| MySQL        | Database management              |
| HTML5        | Page structure                   |
| CSS3         | Styling and layout               |
| XAMPP / WAMP | Local web server for development |

---

Setup Instructions

1. Clone or Download

```
git clone https://github.com/samreenq5/YourRepoName.git
```

2. Configure the Database

* Open **phpMyAdmin**
* Create a new database named `my_guitar_shop1`
* Import the SQL file:

  ```
  my_guitar_shop1.sql
  ```

3. Update Database Connection

In `database.php`, update your connection credentials if needed:

```php
$host = 'localhost';
$dbname = 'my_guitar_shop1';
$username = 'root';
$password = '';
```

4. Run the Application

* Place the project folder inside your web server’s root directory (`htdocs` for XAMPP)
* Start **Apache** and **MySQL**
* Open your browser and go to:

  ```
  http://localhost/my_guitar_shop/
  ```

---

File Overview

| File                               | Description                     |
| ---------------------------------- | ------------------------------- |
| `index.php`                        | Main page displaying products   |
| `add_product.php`                  | Adds a new product              |
| `add_product_form.php`             | Form UI for adding a product    |
| `delete_product.php`               | Deletes a selected product      |
| `database.php`                     | Database connection             |
| `error.php` / `database_error.php` | Error handling pages            |
| `main.css`                         | Core styling                    |
| `my_guitar_shop1.sql`              | Database schema and sample data |

---

Future Enhancements

* Add login & authentication for admin users
* Improve UI with Bootstrap or React frontend
* Implement search and filtering
* Add product images

---

License

This project is licensed under the [MIT License](LICENSE).

---

Author

**Samreen Qasim**
Email: [samreenfatimaqasim@gmail.com](mailto:samreenfaitmaqasim@gmail.com)
Student at Queensland University of Technology
Interested in: Web & Mobile Application Development
