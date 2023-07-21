<!DOCTYPE html>
<html>

<head>
    <title>Article 1 - Installation</title>
    <link rel="stylesheet" href="assets\css\style.css">
</head>

<body>
    <header>
        <img src="assets\css\images\logo.png" alt="Education Hub Logo">
        <h1>Welcome to PHP Installation</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="article1.php">Installation</a></li>
            <li><a href="article2.php">Basic Syntax</a></li>
            <!-- Add more article links here -->
        </ul>
    </nav>
    <main>
        <h2>Article 1</h2>
            <!-- Your article content goes here -->
            <h3>What Do I Need?</h3>
            <p>To start using PHP, you can:</br>
            <l1>- Find a web host with PHP and MySQL support</l1></br>
            <l2>- Install a web server on your own PC, and then install PHP and MySQL</l2></br>
            </p>
            <h3>Use a Web Host With PHP Support</h3>
            <p>If your server has activated support for PHP you do not need to do anything.</br>
            Just create some .php files, place them in your web directory, and the server will automatically parse them
            for you.</br>
            You do not need to compile anything or install any extra tools.</br>
            Because PHP is free, most web hosts offer PHP support.</br>
            </p>
            <h3>Set Up PHP on Your Own PC</h3>
            <p>However, if your server does not support PHP, you must:</br>
            -install a web server</br>
            -install PHP</br>
            -install a database, such as MySQL</br>
            -The official PHP website (PHP.net) has installation instructions for PHP:
            <a href= http://php.net/manual/en/install.php>Website</a></br>
            </p>
    </main>
    <footer>
        <p>&copy;
            <?php echo date('Y'); ?> Education Hub. All rights reserved.
        </p>
    </footer>
</body>

</html>