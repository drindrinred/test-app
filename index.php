<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Homepage!</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 1em 0;
            text-align: center;
            margin-bottom: 20px;
        }
        nav {
            background-color: #ddd;
            padding: 0.5em 0;
            text-align: center;
            margin-bottom: 15px;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        .content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        footer {
            text-align: center;
            margin-top: 20px;
            color: #777;
            font-size: 0.9em;
        }
        .php-info {
            margin-top: 20px;
            padding: 15px;
            background-color: #e6f7ff;
            border: 1px solid #b3e0ff;
            border-radius: 5px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Our Awesome Website!</h1>
        <p>Discover amazing things here.</p>
    </header>

    <nav>
        <a href="index.php">Home</a> |
        <a href="about.php">About Us</a> |
        <a href="services.php">Services</a> |
        <a href="contact.php">Contact</a>
    </nav>

    <div class="content">
        <h2>Welcome!</h2>
        <p>This is the homepage of our website. Feel free to explore the different sections using the navigation above.</p>
        <p>We are excited to have you here and hope you find what you're looking for.</p>

        <h3>Some Highlights:</h3>
        <ul>
            <li>Learn about our latest products.</li>
            <li>Read interesting articles and blog posts.</li>
            <li>Get in touch with our team.</li>
        </ul>
    </div>

    <div class="php-info">
        <h3>PHP Information:</h3>
        <p>This section is dynamically generated using PHP.</p>
        <?php
            echo "<p>The current date and time in Dinalupihan, Central Luzon, Philippines is: <strong>" . date('Y-m-d H:i:s') . " PST</strong></p>";
            echo "<p>PHP version: <strong>" . phpversion() . "</strong></p>";
        ?>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Awesome Website</p>
    </footer>
</body>
</html>
