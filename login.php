<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Global Styles */
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #1976d2; /* Blue */
            color: #fff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            margin: 0;
            font-size: 36px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s ease;
        }
        nav ul li a:hover {
            color: #ffd54f; /* Yellow */
        }
        .main-content {
            margin: 20px auto;
            width: 80%;
        }
        section {
            margin-bottom: 40px;
        }
        section h2 {
            font-size: 24px;
            font-weight: 600;
            color: #512da8; /* Dark Purple */
            margin-bottom: 20px;
        }
        section p {
            font-size: 16px;
            line-height: 1.6;
            color: #666;
            margin-bottom: 20px;
        }
        footer {
            background-color: #1976d2; /* Blue */
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: 40px;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }
        footer p {
            margin: 0;
        }
        .social-icon {
            color: #fff;
            font-size: 24px;
            margin-right: 10px;
            transition: color 0.3s ease;
        }
        .social-icon:hover {
            color: #ffd54f; /* Yellow */
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Portfolio</h1>
        <!-- Navigation Menu -->
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="about.html">About Me</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Register</a></li>
            </ul>
        </nav>
    </header>

    <div class="main-content">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit" value="Login">
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Daniel Gaudreault. All rights reserved.</p>
        <div>
            <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
</body>
</html>
