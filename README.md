# Student Management System – My First PDO Project

My first project using **PHP PDO and MySQL**! 

I built this small Student Management System to practice what I've been learning about PHP and database management. It was a good opportunity to understand how PHP communicates with MySQL and how to perform basic CRUD operations.

This project is simple, but I learned a lot while building it.

## 🛠️ Technologies

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

## ✨ Features

- Add new students.
- Display the list of students.
- Delete students using their ID.
- Store student information in a MySQL database.

## 📚 What I learned

This project helped me understand several important concepts:

- How to establish a database connection using PDO.
- The difference between `query()`, `prepare()`, and `execute()`.
- How to use prepared statements to handle user input.
- How to retrieve data using `fetch()` and `fetchAll()`.
- The difference between `PDO::FETCH_ASSOC` and other fetch modes.
- How to perform CRUD operations.
- How to organize PHP files and separate responsibilities.
- How to display database records dynamically using PHP and HTML.

## 📂 Project Structure

```text
register-project/
│
├── css/
│   ├── style.css
│   ├── create.css
│   └── delete.css
│
├── db.php
├── setup.php
├── index.php
├── create.php
├── read.php
└── delete.php
```

## ⚙️ Installation

1. Clone this repository:

```bash
git clone https://github.com/YOUR_USERNAME/register-project.git
```

2. Move the project into your XAMPP `htdocs` directory.

3. Start Apache and MySQL from XAMPP.

4. Configure your database credentials in `db.php`.

5. Run `setup.php` once to initialize the database.

6. Open the project in your browser:

```text
http://localhost/register-project/
```

## 🎯 My Goal

This is just a starting point. I'm still learning PHP, and I wanted to build something practical instead of only following tutorials.

I know there is still a lot to improve, but understanding how everything works step by step is what matters to me.

**More projects and more learning ahead!**

---

*Built while learning PHP PDO & MySQL.*
